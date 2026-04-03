<?php

namespace App\Http\Controllers;

use App\Models\SaleDetail;
use App\Models\PurchaseDetail;
use App\Models\Member as Party;
use App\Models\SaleInvoiceFbr;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
class ReportController extends Controller
{
    public function partyReport(Request $request)
    {
        $query = PurchaseDetail::with(['parties', 'items'])
            ->select(
                'fk_parties_id',
                'bill_no',
                'vorcher_no',
                'created_at',
                \DB::raw('SUM(rate * qty) as subtotal'),
                \DB::raw('SUM(stax_amount) as tax_amount'),
                \DB::raw('SUM((rate * qty) + stax_amount) as grand_total')
            )
            ->groupBy('fk_parties_id', 'bill_no', 'vorcher_no', 'created_at');

        // Apply date filter
        if ($request->filled('start_date')) {
            $query->whereDate('created_at', '>=', $request->start_date);
        }
        if ($request->filled('end_date')) {
            $query->whereDate('created_at', '<=', $request->end_date);
        }

        // Apply party filter
        if ($request->filled('party_id')) {
            $query->where('fk_parties_id', $request->party_id);
        }

        $reportData = $query->get();
        $parties = Party::where('type','supplier')->get();

        return view('reports.party', compact('reportData', 'parties'));
    }
    public function SaleReport(Request $request)
{
    $query = SaleInvoiceFbr::query();
    $user=Auth::user();
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
    
    $salesInvoices = $query->where( 'cid',$user->c_id)->get();

$availableBillNumbers = SaleInvoiceFbr::where('cid', $user->c_id)
    ->distinct()
    ->pluck('fbr_invoice_no');

    return view('SaleInvoice.index', compact('salesInvoices', 'availableBillNumbers'));
}
}