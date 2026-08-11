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
    // Filter by user's company
    $query->where('cid', $user->c_id);
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

    // Apply client search filter
    if ($request->filled('client') && $request->client != '') {
        $query->where('buyer_business_name', 'like', '%' . $request->client . '%');
    }

    $salesInvoices = $query->orderBy('created_at', 'asc')->get();

$availableBillNumbers = SaleInvoiceFbr::where('cid', $user->c_id)
    ->distinct()
    ->pluck('fbr_invoice_no');

    // Build supply register rows + GH 236 total
    $registerRows = [];
    $ghTotal = 0;

    foreach ($salesInvoices as $inv) {
        $items = is_string($inv->items) ? json_decode($inv->items, true) : ($inv->items ?? []);

        foreach ($items as $it) {
            $it = (array) $it;
            $qty = floatval($it['quantity'] ?? 0);
            $rate = floatval($it['rateValues'] ?? 0);
            $valueExcl = floatval($it['valueSalesExcludingST'] ?? ($rate * $qty));
            $stax = floatval($it['salesTaxApplicable'] ?? 0);
            $gh = floatval($it['ghAmount'] ?? 0);
            $ft = floatval($it['furtherTax'] ?? 0);
            $discount = floatval($it['discount'] ?? 0);
            $retailExcl = floatval($it['fixedNotifiedValueOrRetailPrice'] ?? 0);

            $ghTotal += $gh;

            $registerRows[] = [
                'date' => \Carbon\Carbon::parse($inv->invoice_date ?? now())->format('d-m-y'),
                'invoice_no' => $inv->fbr_invoice_no ?? '-',
                'customer' => $inv->buyer_business_name ?? '-',
                'product' => $it['productDescription'] ?? $it['product_description'] ?? '-',
                'qty' => $qty,
                'unit' => $it['uoMText'] ?? $it['unit_of_measure'] ?? $it['unit'] ?? '',
                'rate' => $rate,
                'value_excl' => $valueExcl,
                'stax_rate' => floatval($it['stax_per'] ?? 18),
                'stax_amt' => $stax,
                'value_inc' => $valueExcl + $stax,
                'retail_excl' => $retailExcl,
                'retail_tax' => $retailExcl * 0.18,
                'retail_incl' => $retailExcl * 1.18,
                'discount' => $discount,
                'trade_excl' => $valueExcl - $discount,
                'trade_tax' => $stax,
                'trade_with_tax' => ($valueExcl - $discount) + $stax,
                'us236' => $gh,
                'further_tax' => $ft,
                'amount' => (($valueExcl - $discount) + $stax) + $gh,
            ];
        }
    }

    $company = \App\Models\Company::where('cid', $user->c_id)->first();
    $companyInfo = [
        'name' => $company->cname ?? ($salesInvoices->first()->seller_business_name ?? ''),
        'address' => $user->address ?? '',
        'ntn' => $user->cinc_ntn ?? '',
        'strn' => $user->strn ?? '',
    ];

    $invoiceDates = $salesInvoices->map(function ($inv) {
        return $inv->invoice_date ?: $inv->created_at;
    })->filter();

    $reportStart = $request->filled('start_date')
        ? $request->start_date
        : ($invoiceDates->min() ? \Carbon\Carbon::parse($invoiceDates->min())->format('Y-m-d') : '');
    $reportEnd = $request->filled('end_date')
        ? $request->end_date
        : ($invoiceDates->max() ? \Carbon\Carbon::parse($invoiceDates->max())->format('Y-m-d') : '');

    return view('SaleInvoice.index', compact('salesInvoices', 'availableBillNumbers', 'registerRows', 'ghTotal', 'companyInfo', 'reportStart', 'reportEnd'));
}
    public function deleteSaleInvoice($id)
    {
        $user = Auth::user();
        $invoice = SaleInvoiceFbr::where('cid', $user->c_id)
            ->where(function ($q) use ($id) {
                $q->where('id', $id)
                    ->orWhere('fbr_invoice_no', $id)
                    ->orWhere('invoice_ref_no', $id);
            })
            ->first();

        if (!$invoice) {
            return redirect()->back()->with('error', 'Invoice not found.');
        }

        $invoice->delete();
        return redirect()->back()->with('success', 'Invoice deleted successfully.');
    }
}