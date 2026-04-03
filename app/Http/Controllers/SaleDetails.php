<?php

namespace App\Http\Controllers;

use App\Models\SaleInvoiceFbr;
use Illuminate\Http\Request;
use App\Models\AccountMaster;
use App\Models\GeneralBilling;
use App\Models\ItemMaster;
use App\Models\ItemType;
use App\Models\ProductMaster;
use App\Models\Member as Party;
use App\Models\SaleDetail;
use App\Models\TRNDTL;
use App\Models\ErpParam; 
use App\Models\SaleDetail as SalesInvoice; 
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class SaleDetails extends Controller
{
    /**
     * Display a listing of the resource.
     */
     // Controller
public function invoice($id)
{
    // dd("WORKING");
       $invoice = SaleInvoiceFbr::findOrFail($id);
    return view('SaleInvoice.invoice', compact('invoice'));

}
    
public function index(Request $request)
{
    $query = SaleInvoiceFbr::query();

    // Apply date filters
    if ($request->filled('start_date')) {
        $query->whereDate('created_at', '>=', $request->start_date);
    }
    if ($request->filled('end_date')) {
        $query->whereDate('created_at', '<=', $request->end_date);
    }

    // Apply bill number filter
    if ($request->filled('bill_no')) {
        $query->where('fbr_invoice_no', $request->bill_no);
    }

    // You might also want to filter by party_id here, depending on your DB

    $salesInvoices = $query->where('cid',auth()->user()->c_id)->get();

    // Pass the filtered results + data for dropdowns (e.g., availableBillNumbers, parties)
    $availableBillNumbers = SaleInvoiceFbr::distinct()->pluck('fbr_invoice_no');
    $parties = Party::all(); // adjust Party model name

    return view('SaleInvoice.index', compact('salesInvoices', 'availableBillNumbers', 'parties'));
}

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user=Auth::user();
         $accounts = \App\Models\AccountMaster::where('c_id',$user->c_id)->get();   // Party dropdown
        $products = \App\Models\ItemMaster::where('c_id',$user->c_id)->get();   // Product dropdown
         $saleAc = ErpParam::with('saleAcc')->where('c_id',$user->c_id)->first();
         $clients = \App\Models\Member::where('type','customer')->get();
        return view('SaleInvoice.list', compact('accounts', 'products','saleAc','clients'));
    }

    /**
     * Store a newly created resource in storage.
     */
  public function store(Request $request)
{
     $request->validate([
            // 'c_id' => 'required|exists:accounts,id',
            'entries' => 'required|array|min:1',
            'entries.*.prod_id' => 'required|exists:item_masters,id',
            'entries.*.rate' => 'required|numeric|min:0',
            'entries.*.qty' => 'required|numeric|min:1',
            'entries.*.stax_per' => 'required|numeric|min:0',
            'entries.*.stax_Amount' => 'required|numeric|min:0',
            's_account'=>"required|numeric",
            'entryParty'=>"required|numeric"
        ]);

    $now = Carbon::now();
    $userCId = Auth::user()->c_id;
// dd($request->entryParty);
    $entries = $request->input('entries');
    $accountId = $request->entryParty;
    $cashId = $request->s_account;
    $preparedBy = auth()->user()->name;

    $vno = SalesInvoice::max('v_no') + 1;
    $bill = SalesInvoice::max('bill_no') + 1;
    $totalCredit = 0;

   foreach ($entries as $entry) {
    $rate = $entry['rate'];
    $qty = $entry['qty'];
    $tax = $entry['stax_Amount'];
    $exclusive = $rate * $qty;
    $inclusive = $exclusive + $tax;

    // Insert SaleInvoice
    $sale = SalesInvoice::create([
        'prod_id' => $entry['prod_id'],
        'c_id' => $userCId,
        'rate' => $rate,
        'qty' => $qty,
        'stax_per' => $entry['stax_per'],
        'stax_Amount' => $tax,
        'created_at' => $now,
        'updated_at' => $now,
        'v_no'=>$vno,
        'fk_parties_id'=>$request->entryParty,
        'bill_no'=>$bill
    ]);

    // Calculate pre balance for credit account *before* this insert
    $preBal = DB::table('t_r_n_d_t_l_s')
        ->where('account_id', $cashId)
        ->where(function($query) use ($now) {
            $query->whereDate('date', '<', $now->toDateString())
                  ->orWhere(function($q) use ($now) {
                      $q->whereDate('date', '=', $now->toDateString())
                        ->whereTime('created_at', '<', $now->toTimeString());
                  });
        })
        ->selectRaw('IFNULL(SUM(debit), 0) - IFNULL(SUM(credit), 0) AS pre_bal')
        ->value('pre_bal');

    // Insert TRNDTL with up-to-date pre_bal
    TRNDTL::create([
        'v_no' => $vno,
        'date' => $now->toDateString(),
        'description' => 'Sales Credit Entry',
        'account_id' => $cashId,
        'cash_id' => null,
        'preparedby' => $preparedBy,
        'debit' => 0,
        'credit' => $inclusive,
        'status' => 'unofficial',
        'v_type' => 'SIN',
        'r_id' => $sale->id,
        'pre_bal' => round($preBal, 2),
        'created_at' => $now,
        'updated_at' => $now,
    ]);
}


    return redirect()->route('premiertax.sales.index')->with('success', 'Sale and credit accounting entry saved!');
}


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
   public function destroy($billNo)
{
    // Start a database transaction
    DB::beginTransaction();

    try {
        // Find all sales entries with this bill_no
        $sales = SalesInvoice::where('bill_no', $billNo)->get();
        
        // Delete related TRNDTL entries for each sale
        foreach ($sales as $sale) {
            TRNDTL::where('r_id', $sale->id)->delete();
        }
        
        // Delete all sales entries with this bill_no
        SalesInvoice::where('bill_no', $billNo)->delete();
        
        // Commit the transaction if all operations succeed
        DB::commit();
        
        return redirect()->back()
               ->with('success', 'Invoice #' . $billNo . ' and all related entries deleted successfully.');
               
    } catch (\Exception $e) {
        // Rollback the transaction on error
        DB::rollBack();
        
        return redirect()->back()
               ->with('error', 'Failed to delete invoice: ' . $e->getMessage());
    }
}
}
