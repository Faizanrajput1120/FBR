@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
                        <li class="breadcrumb-item active">Purchase Reports</li>
                    </ol>
                </div>
                <h3 class="page-title">Purchase Invoices</h3>
            </div>
        </div>
    </div>

    @if (session('success'))
        <div class="alert alert-success alert-dismissible text-bg-success border-0 fade show" role="alert">
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
            {{ session('success') }}
        </div>
    @endif

    <div class="row mb-3">
        <div class="col-md-10">
            <form method="GET" action="{{ route('reports.purchase') }}" class="row g-3">
                <div class="col-md-3">
                    <label for="start_date" class="form-label">Start Date</label>
                    <input type="date" class="form-control" id="start_date" name="start_date" value="{{ request('start_date') }}">
                </div>
                <div class="col-md-3">
                    <label for="end_date" class="form-label">End Date</label>
                    <input type="date" class="form-control" id="end_date" name="end_date" value="{{ request('end_date') }}">
                </div>
                <div class="col-md-3">
                    <label for="seller" class="form-label">Seller / Supplier</label>
                    <input type="text" class="form-control" id="seller" name="seller" value="{{ request('seller') }}" placeholder="Search seller...">
                </div>
                <div class="col-md-3">
                    <label for="invoice_ref_no" class="form-label">Invoice Ref No</label>
                    <input type="text" class="form-control" id="invoice_ref_no" name="invoice_ref_no" value="{{ request('invoice_ref_no') }}" placeholder="Search invoice ref no...">
                </div>
                <div class="col-md-12 mt-3">
                    <button type="submit" class="btn btn-primary">Search</button>
                    <a href="{{ route('reports.purchase') }}" class="btn btn-secondary">Clear</a>
                </div>
            </form>
        </div>
    </div>

    <div class="row mb-2">
        <div class="col-md-12 d-flex flex-wrap gap-2 align-items-center">
            <button onclick="printSectionReport('purchaseRegisterSection')" class="btn btn-info">
                <i class="mdi mdi-printer"></i> Purchase Register
            </button>
        </div>
    </div>

    <div class="row">
        <div class="card">
            <div class="card-body">
                <table class="table table-striped dt-responsive nowrap w-100">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Invoice Ref No</th>
                            <th>Seller / Supplier</th>
                            <th>Invoice Type</th>
                            <th>Date</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($purchaseInvoices as $invoice)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $invoice->invoice_ref_no ?? 'N/A' }}</td>
                                <td>{{ $invoice->seller_business_name ?? 'N/A' }}</td>
                                <td>{{ $invoice->invoice_type ?? 'N/A' }}</td>
                                <td>{{ $invoice->invoice_date ? \Carbon\Carbon::parse($invoice->invoice_date)->format('Y-m-d') : '-' }}</td>
                                <td>
                                    <a href="{{ route('premiertax.purchase.invoice', $invoice->id) }}" class="btn btn-primary btn-sm me-1" target="_blank">
                                        <i class="mdi mdi-printer"></i> Print
                                    </a>
                                    <form action="{{ route('reports.purchase.delete', $invoice->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure you want to delete this invoice?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">
                                            <i class="mdi mdi-delete"></i> Delete
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="text-center">No purchase invoices found</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<div id="purchaseRegisterSection" style="display: none;" data-title="Purchase Register">
    <style>
        @page { size: A4 portrait; margin: 8mm; }
        .register-report { width: 100%; margin: 0 auto; font-family: 'Times New Roman', Times, serif; font-size: 10px; color: #000; background: #fff; box-sizing: border-box; }
        .register-report .header { position: relative; }
        .register-report .page-label { position: absolute; top: 0; right: 0; font-size: 10px; }
        .register-report .company { text-align: center; margin-bottom: 5px; }
        .register-report .company h2 { font-size: 20px; font-weight: bold; text-transform: uppercase; margin: 0; }
        .register-report .company .address, .register-report .company .taxno { font-size: 10px; margin-top: 3px; }
        .register-report .title { text-align: center; color: blue; font-style: italic; font-size: 28px; font-weight: bold; margin: 6px 0; }
        .register-report .subtitle { text-align: center; font-size: 10px; font-weight: bold; margin: -2px 0 6px 0; text-transform: uppercase; }
        .register-report .date-box { width: 220px; border: 1px solid #000; padding: 5px; margin: 6px 0; }
        .register-report .date-box .date-label { font-weight: bold; border-bottom: 1px solid #000; padding-bottom: 3px; margin-bottom: 3px; }
        .register-report .date-box table { width: 100%; border: none; }
        .register-report .date-box td { border: none; padding: 1px 0; }
        .register-report .date-box td:last-child { text-align: right; font-weight: bold; }
        .register-report hr { border: 1px solid #000; margin: 5px 0; }
        .register-report table.data { width: 100%; border-collapse: collapse; margin-top: 5px; }
        .register-report table.data th, .register-report table.data td { border: 1px solid #000; padding: 2px 3px; text-align: center; word-wrap: break-word; }
        .register-report table.data th { background: #d9f2b4; font-weight: bold; }
        .register-report table.data td.no { text-align: right; white-space: nowrap; }
        .register-report .footer-notes { margin-top: 6px; text-align: right; font-size: 10px; }
    </style>
    <div class="register-report">
        <div class="header">
            <div class="page-label">Page 1 of 1</div>
            <div class="company">
                <h2>{{ $companyInfo['name'] ?? '' }}</h2>
                <div class="address">{{ $companyInfo['address'] ?? '' }}</div>
                <div class="taxno">STRN NO: {{ $companyInfo['strn'] ?? '' }}</div>
            </div>
            <div class="title">Purchase Register</div>
            <div class="subtitle">UNDER SECTION 22(1)(b) OF THE SALES TAX ACT 1990</div>
            <div class="date-box">
                <div class="date-label">Date</div>
                <table>
                    <tr><td>Date From :</td><td>{{ $reportStart ?? '' ? date('d-m-y', strtotime($reportStart)) : 'Start' }}</td></tr>
                    <tr><td>Date To :</td><td>{{ $reportEnd ?? '' ? date('d-m-y', strtotime($reportEnd)) : 'End' }}</td></tr>
                </table>
            </div>
            <hr>
        </div>
        <table class="data">
            <thead>
                <tr>
                    <th>DATE</th>
                    <th>INV REF NO</th>
                    <th>SELLER NAME</th>
                    <th>PRODUCT NAME</th>
                    <th>QTY</th>
                    <th>RATE</th>
                    <th>VALUE EXC. SALES TAX</th>
                    <th>SALES TAX RATE</th>
                    <th>SALES TAX AMOUNT</th>
                    <th>VALUE INC. SALES TAX</th>
                </tr>
            </thead>
            <tbody>
                @foreach($registerRows ?? [] as $row)
                <tr>
                    <td>{{ $row['date'] }}</td>
                    <td>{{ $row['invoice_ref'] }}</td>
                    <td>{{ $row['seller'] }}</td>
                    <td>{{ $row['product'] }}</td>
                    <td class="no">{{ number_format($row['qty'], 2) }}{{ $row['unit'] ? ' ' . $row['unit'] : '' }}</td>
                    <td class="no">{{ number_format($row['rate'], 2) }}</td>
                    <td class="no">{{ number_format($row['value_excl'], 2) }}</td>
                    <td class="no">{{ number_format($row['stax_rate'], 2) }}%</td>
                    <td class="no">{{ number_format($row['stax_amt'], 2) }}</td>
                    <td class="no">{{ number_format($row['value_inc'], 2) }}</td>
                </tr>
                @endforeach
            </tbody>
            @if(count($registerRows ?? []) > 0)
            <tfoot>
                <tr>
                    <td colspan="6" style="text-align:right;font-weight:bold;">TOTAL</td>
                    <td class="no" style="font-weight:bold;">{{ number_format(collect($registerRows)->sum('value_excl'), 2) }}</td>
                    <td></td>
                    <td class="no" style="font-weight:bold;">{{ number_format(collect($registerRows)->sum('stax_amt'), 2) }}</td>
                    <td class="no" style="font-weight:bold;">{{ number_format(collect($registerRows)->sum('value_inc'), 2) }}</td>
                </tr>
            </tfoot>
            @endif
        </table>
        <div class="footer-notes">Printed on: {{ now()->format('d/m/Y H:i') }}</div>
    </div>
</div>

<script>
    $(document).ready(function () {
        if (typeof $.fn.select2 !== 'undefined') {
            $('.select2').select2({ width: '100%', allowClear: true });
        }
    });

    function printSectionReport(sectionId) {
        var section = document.getElementById(sectionId);
        var styleHTML = section.querySelector('style').outerHTML;
        var reportHTML = section.querySelector('.register-report').outerHTML;
        var title = section.getAttribute('data-title') || 'Register';
        var html = '<!DOCTYPE html><html><head><meta charset="utf-8"><title>' + title + '</title>'
            + styleHTML + '</head><body>' + reportHTML + '</body></html>';
        var url = URL.createObjectURL(new Blob([html], { type: 'text/html' }));
        var newTab = window.open(url, '_blank');
        if (!newTab) { alert('Please allow popups for this site to open the report.'); return; }
        setTimeout(function () { newTab.focus(); newTab.print(); }, 400);
    }
</script>
@endsection

