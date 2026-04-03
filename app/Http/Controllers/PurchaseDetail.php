<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AccountMaster;
use App\Models\ItemMaster;
use App\Models\Member;
use App\Models\ItemType;
use App\Models\PurchaseDetail as PurchaseDetails ;
use App\Models\TRNDTL;
use App\Models\ErpParam; 
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class PurchaseDetail extends Controller
{
    /**
     * Display a listing of the resource.
     */
     
     public function invoice($id)
{
     $sales = PurchaseDetails::with(['items', 'parties'])
                ->where('bill_no', $id)
                ->get();
                
    $totalAmount = $sales->sum(function($sale) {
        return ($sale->rate * $sale->qty) + $sale->stax_amount;
    });

    return view('PurchaseDetail.invoice', [
        'sales' => $sales,
        'billNo' => $id,
        'totalAmount' => $totalAmount,
        'client' => $sales->first()->parties ?? null
    ]);
}
    // public function index()
    // {
    //     $user=Auth::user();
    //     $saleDetails = PurchaseDetails::with(['items','parties'])
    //                 ->orderBy('created_at', 'desc')
    //                 ->where('c_id',$user->c_id)
    //                 ->get();
    //     // dd(PurchaseDetails::with('parties')->get());
    //     //Changes pending
        
    //     return view('PurchaseDetail.index', compact('saleDetails'));
    // }
    public function index(Request $request)
{
$query = PurchaseDetails::with(['items', 'parties' => function($query) {
        $query->where('type', 'supplier'); // Only load parties that are suppliers
    }])
    ->whereHas('parties', function($query) {
        $query->where('type', 'supplier'); // Only include records with supplier parties
    })
    ->orderBy('created_at', 'desc');

// Apply date filter
if ($request->filled('start_date')) {
    $query->whereDate('created_at', '>=', $request->start_date);
}
if ($request->filled('end_date')) {
    $query->whereDate('created_at', '<=', $request->end_date);
}

// Apply bill number filter
if ($request->filled('bill_no')) {
    $query->where('bill_no', $request->bill_no);
}

// Apply party filter
if ($request->filled('party_id')) {
    $query->where('fk_parties_id', $request->party_id);
}

$saleDetails = $query->get();

// For dropdowns - only show suppliers
$parties = Member::where('type', 'supplier')->get();
$availableBillNumbers = PurchaseDetails::whereHas('parties', function($query) {
        $query->where('type', 'supplier');
    })
    ->select('bill_no')
    ->distinct()
    ->orderBy('bill_no', 'desc')
    ->pluck('bill_no');

return view('PurchaseDetail.index', compact('saleDetails', 'parties', 'availableBillNumbers'));
}

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user=Auth::user();
        $accounts = \App\Models\AccountMaster::where('c_id',$user->c_id)->get();   // Party dropdown
        $products = \App\Models\ItemMaster::where('c_id',$user->c_id)->get();   // Product dropdown
        $clients = \App\Models\Member::where('type','supplier')->get();   // Product dropdown
        // dd($clients);
        $saleAc = ErpParam::with('accounts')->where('c_id',$user->c_id)->first();
        return view('PurchaseDetail.list', compact('accounts', 'products','saleAc','clients'));
    }

    /**
     * Store a newly created resource in storage.
     */
  public function store(Request $request)
{
    // dd($request);
     $request->validate([
            // 'c_id' => 'required|exists:accounts,id',
            'entries' => 'required|array|min:1',
            'entries.*.prod_id' => 'required|exists:item_masters,id',
            'entries.*.rate' => 'required|numeric|min:0',
            'entries.*.qty' => 'required|numeric|min:1',
            'entries.*.stax_per' => 'required|numeric|min:0',
            'entries.*.stax_Amount' => 'required|numeric|min:0',
            
            'p_account'=>"required|numeric",
            'entryParty'=>"required|numeric"
        ]);

    $now = Carbon::now();
    $userCId = Auth::user()->c_id;

    $entries = $request->input('entries');
    $accountId = $request->entryParty;
    $cashId = $request->s_account;
    $preparedBy = auth()->user()->name;

    $vno = PurchaseDetails::max('vorcher_no') + 1;
    $bill = PurchaseDetails::max('bill_no') + 1;
    $totalCredit = 0;
    // dd($request->entryParty);
   foreach ($entries as $entry) {
    $rate = $entry['rate'];
    $qty = $entry['qty'];
    $tax = $entry['stax_Amount'];
    $exclusive = $rate * $qty;
    $inclusive = $exclusive + $tax;

    // Insert SaleInvoice
    $sale = PurchaseDetails::create([
        'item_code' => $entry['prod_id'],
        'c_id' => $userCId,
        'rate' => $rate,
        'qty' => $qty,
        'stax_per' => $entry['stax_per'],
        'stax_amount' => $tax,
        'created_at' => $now,
        'updated_at' => $now,
        'vorcher_no'=>$vno,
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
        'description' => 'Purchase Entry',
        'account_id' => $cashId,
        'cash_id' => null,
        'preparedby' => $preparedBy,
        'debit' => $inclusive,
        'credit' => 0,
        'status' => 'unofficial',
        'v_type' => 'PIN',
        'r_id' => $sale->id,
        'pre_bal' => round($preBal, 2),
        'created_at' => $now,
        'updated_at' => $now,
    ]);
}


    return redirect()->route('premiertax.purchase.index')->with('success', 'Purchase entry saved!');
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
        $sales = PurchaseDetails::where('bill_no', $billNo)->get();
        
        // Delete related TRNDTL entries for each sale
        foreach ($sales as $sale) {
            TRNDTL::where('r_id', $sale->id)->delete();
        }
        
        // Delete all sales entries with this bill_no
        PurchaseDetails::where('bill_no', $billNo)->delete();
        
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
