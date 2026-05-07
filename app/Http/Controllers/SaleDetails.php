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
       $invoice = SaleInvoiceFbr::where('cid', Auth::user()->c_id)->findOrFail($id);

    return view('SaleInvoice.invoice', compact('invoice'));

}

public function printMultiple(Request $request)
{
    $request->validate([
        'invoice_ids' => 'required|array',
        'invoice_ids.*' => 'exists:sale_invoice_fbr,id',
    ]);

    $invoices = SaleInvoiceFbr::where('cid', Auth::user()->c_id)->whereIn('id', $request->invoice_ids)->get();

    return view('SaleInvoice.print_multiple', compact('invoices'));
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

    // Apply client filter
    if ($request->filled('client_name')) {
        $query->where('buyer_business_name', 'like', '%' . $request->client_name . '%');
    }

    // Apply item filter (search in JSON items)
    if ($request->filled('item_name')) {
        $query->where('items', 'like', '%' . $request->item_name . '%');
    }

    $salesInvoices = $query->where('cid',auth()->user()->c_id)->get();

    // Pass the filtered results + data for dropdowns
    $availableBillNumbers = SaleInvoiceFbr::where('cid', auth()->user()->c_id)->whereNotNull('fbr_invoice_no')->distinct()->pluck('fbr_invoice_no');
    $parties = Party::all();

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

    $vno = SalesInvoice::where('c_id', $userCId)->max('v_no') + 1;
    $bill = SalesInvoice::where('c_id', $userCId)->max('bill_no') + 1;
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
        $sales = SalesInvoice::where('bill_no', $billNo)
                             ->where('c_id', Auth::user()->c_id)
                             ->get();
        
        // Delete related TRNDTL entries for each sale
        foreach ($sales as $sale) {
            TRNDTL::where('r_id', $sale->id)->delete();
        }
        
        // Delete all sales entries with this bill_no for this company
        SalesInvoice::where('bill_no', $billNo)
                    ->where('c_id', Auth::user()->c_id)
                    ->delete();
        
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

    public function buyerSummary(Request $request)
    {
        $user = Auth::user();
        $query = SaleInvoiceFbr::where('cid', $user->c_id);

        $buyers = $query->select('buyer_business_name')
            ->distinct()
            ->whereNotNull('buyer_business_name')
            ->orderBy('buyer_business_name')
            ->pluck('buyer_business_name');

        $startDate = $request->start_date;
        $endDate = $request->end_date;
        $selectedBuyer = $request->buyer_name;
        $rows = collect();
        $totals = [
            'quantity' => 0,
            'valueExcl' => 0,
            'salesTax' => 0,
            'furtherTax' => 0,
            'valueIncl' => 0,
        ];

        if ($selectedBuyer) {
            $invoiceQuery = SaleInvoiceFbr::where('cid', $user->c_id)
                ->where('buyer_business_name', $selectedBuyer);

            if ($startDate) {
                $invoiceQuery->whereDate('invoice_date', '>=', $startDate);
            }
            if ($endDate) {
                $invoiceQuery->whereDate('invoice_date', '<=', $endDate);
            }

            $invoices = $invoiceQuery->orderBy('invoice_date', 'desc')->get();

            foreach ($invoices as $invoice) {
                $items = is_string($invoice->items) ? json_decode($invoice->items, true) : ($invoice->items ?? []);
                foreach ($items as $item) {
                    $itemArray = is_array($item) ? $item : (array) $item;
                    $qty = floatval($itemArray['quantity'] ?? 0);
                    $valueExcl = floatval($itemArray['valueSalesExcludingST'] ?? 0);
                    $salesTax = floatval($itemArray['salesTaxApplicable'] ?? 0);
                    $furtherTax = floatval($itemArray['furtherTax'] ?? 0);
                    $unitPrice = $qty > 0 ? $valueExcl / $qty : 0;
                    $valueIncl = $valueExcl + $salesTax + $furtherTax;

                    $rows->push([
                        'invoice_date' => $invoice->invoice_date,
                        'invoice_ref_no' => $invoice->invoice_ref_no,
                        'fbr_invoice_no' => $invoice->fbr_invoice_no,
                        'buyer_name' => $invoice->buyer_business_name,
                        'buyer_ntn' => $invoice->buyer_ntn_cnic,
                        'item_name' => $itemArray['product_description'] ?? $itemArray['productDescription'] ?? '-',
                        'hs_code' => $itemArray['hsCode'] ?? '-',
                        'quantity' => $qty,
                        'unit_price' => $unitPrice,
                        'value_excl' => $valueExcl,
                        'sales_tax_rate' => $itemArray['rate'] ?? '-',
                        'sales_tax' => $salesTax,
                        'further_tax' => $furtherTax,
                        'value_incl' => $valueIncl,
                    ]);

                    $totals['quantity'] += $qty;
                    $totals['valueExcl'] += $valueExcl;
                    $totals['salesTax'] += $salesTax;
                    $totals['furtherTax'] += $furtherTax;
                    $totals['valueIncl'] += $valueIncl;
                }
            }
        }

        return view('SaleInvoice.buyer_summary', compact(
            'user', 'buyers', 'selectedBuyer', 'startDate', 'endDate', 'rows', 'totals'
        ));
    }
}
