@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Hyper</a></li>
                        <li class="breadcrumb-item active">Sale Invoices</li>
                    </ol>
                </div>
                <h3 class="page-title">Sales Invoices</h3>
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
        <div class="col-md-8">
            <form method="GET" action="{{ route('premiertax.sales.index') }}" class="row g-3">
                <div class="col-md-3">
                    <label for="start_date" class="form-label">Start Date</label>
                    <input type="date" class="form-control" id="start_date" name="start_date" 
                           value="{{ request('start_date') }}">
                </div>
                <div class="col-md-3">
                    <label for="end_date" class="form-label">End Date</label>
                    <input type="date" class="form-control" id="end_date" name="end_date" 
                           value="{{ request('end_date') }}">
                </div>
                <div class="col-md-3">
                    <label for="bill_no" class="form-label">Bill No</label>
                    <select class="form-control select2" id="bill_no" name="bill_no">
                        <option value="">All Bill Numbers</option>
                        @foreach($availableBillNumbers as $billNo)
                            <option value="{{ $billNo }}" 
                                {{ request('bill_no') == $billNo ? 'selected' : '' }}>
                                {{ $billNo }}
                            </option>
                        @endforeach
                    </select>
                </div>
                
                <div class="col-md-3">
                    <label for="client" class="form-label">Client</label>
                    <input type="text" class="form-control" id="client" name="client" 
                           value="{{ request('client') }}" placeholder="Search client...">
                </div>
   <div class="col-md-3">
    <label for="invoiceRefFilter" class="form-label">Invoice Ref No</label>
    <input type="text" class="form-control" id="invoiceRefFilter" 
           placeholder="Search invoice ref no..." autocomplete="off">
</div>
                
                <div class="col-md-12 mt-3">
                     <button type="submit" class="btn btn-primary">Search</button>
                    <a href="{{ route('premiertax.sales.index') }}" class="btn btn-secondary">Clear</a>
                </div>
            </form>
        </div>
     
    </div>

    <div class="row mb-2">
        <div class="col-md-12 d-flex flex-wrap gap-2 align-items-center">
            <button onclick="printSectionReport('supplierRegisterSection')" class="btn btn-info">
                <i class="mdi mdi-printer"></i> Supplier Register
            </button>
            <button onclick="printSectionReport('thirdScheduleSection')" class="btn btn-warning">
                <i class="mdi mdi-printer"></i> Third Schedule
            </button>
            <button onclick="printSectionReport('supplierRegisterSection')" class="btn btn-success">
                <i class="mdi mdi-printer"></i> Customer Print
            </button>
            <h5 class="mb-0 badge bg-primary fs-6" id="ghTotalCount">
                GH 236 Total: {{ number_format($ghTotal ?? 0, 2) }}
            </h5>
        </div>
    </div>

    <div class="row">
        <div class="card">
            <div class="card-body">
                <table class="table table-striped dt-responsive nowrap w-100">
                    <thead>
                        <tr>
                            <th>Bill No</th>
                            <th>Invoice Ref No</th>
                            <th>Client</th>
                            <th>Date</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($salesInvoices as $invoice)
                            <tr>
                                <td>{{ $invoice->fbr_invoice_no }}</td>
                                <td>{{ $invoice->invoice_ref_no ?? 'N/A' }}</td>
                                <td>{{ $invoice->buyer_business_name ?? 'N/A' }}</td>
                                <td>{{ \Carbon\Carbon::parse($invoice->invoice_date)->format('Y-m-d') }}</td>
                                <td>
                                                                        <a href="{{ route('premiertax.sale.invoice', $invoice->id) }}" 
                                       class="btn btn-primary btn-sm" target="_blank">
                                        <i class="mdi mdi-printer"></i> Print
                                    </a>
                                    <a href="{{ route('premiertax.sale.third-schedule', $invoice->id) }}" 
                                       class="btn btn-warning btn-sm" target="_blank">
                                        <i class="mdi mdi-printer"></i> Print (3rd Schedule)
                                    </a>
                                    <a href="{{ route('premiertax.sale.standard-invoice', $invoice->id) }}" 
                                       class="btn btn-info btn-sm" target="_blank">
                                        <i class="mdi mdi-printer"></i> Standard Invoice
                                    </a>
                                    <a href="{{ route('premiertax.sale.commercial-print', $invoice->id) }}" 
                                       class="btn btn-success btn-sm" target="_blank">
                                        <i class="mdi mdi-printer"></i> Commercial Print
                                    </a>
                                    <form action="{{ route('reports.sales.delete', $invoice->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure you want to delete this invoice?');">
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
                                <td colspan="5" class="text-center">No sales invoices found</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Supplier Register Print Section -->
<div id="supplierRegisterSection" style="display: none;" data-title="Supply Register">
    <style>
        @page {
            size: A4 portrait;
            margin: 8mm;
        }
        .register-report {
            width: 100%;
            margin: 0 auto;
            font-family: 'Times New Roman', Times, serif;
            font-size: 10px;
            color: #000;
            background: #fff;
            box-sizing: border-box;
        }
        .register-report .header {
            position: relative;
        }
        .register-report .page-label {
            position: absolute;
            top: 0;
            right: 0;
            font-size: 10px;
        }
        .register-report .company {
            text-align: center;
            margin-bottom: 5px;
        }
        .register-report .company h2 {
            font-size: 20px;
            font-weight: bold;
            text-transform: uppercase;
            margin: 0;
        }
        .register-report .company .address,
        .register-report .company .taxno {
            font-size: 10px;
            margin-top: 3px;
        }
        .register-report .title {
            text-align: center;
            color: blue;
            font-style: italic;
            font-size: 28px;
            font-weight: bold;
            margin: 6px 0;
        }
        .register-report .date-box {
            width: 220px;
            border: 1px solid #000;
            padding: 5px;
            margin: 6px 0;
        }
        .register-report .date-box .date-label {
            font-weight: bold;
            border-bottom: 1px solid #000;
            padding-bottom: 3px;
            margin-bottom: 3px;
        }
        .register-report .date-box table {
            width: 100%;
            border: none;
        }
        .register-report .date-box td {
            border: none;
            padding: 1px 0;
        }
        .register-report .date-box td:last-child {
            text-align: right;
            font-weight: bold;
        }
        .register-report hr {
            border: 1px solid #000;
            margin: 5px 0;
        }
        .register-report table.data {
            width: 100%;
            border-collapse: collapse;
            margin-top: 5px;
        }
        .register-report table.data th,
        .register-report table.data td {
            border: 1px solid #000;
            padding: 2px 3px;
            text-align: center;
            word-wrap: break-word;
        }
        .register-report table.data th {
            background: #d9f2b4;
            font-weight: bold;
        }
        .register-report table.data td.no {
            text-align: right;
            white-space: nowrap;
        }
        .register-report .footer-notes {
            margin-top: 6px;
            text-align: right;
            font-size: 10px;
        }
    </style>
    <div class="register-report">
        <div class="header">
            <div class="page-label">Page 1 of 1</div>
            <div class="company">
                <h2>{{ $companyInfo['name'] ?? '' }}</h2>
                <div class="address">{{ $companyInfo['address'] ?? '' }}</div>
                <div class="taxno">TAXPAYER NO: {{ $companyInfo['ntn'] ?? '' }}</div>
            </div>
            <div class="title">Supply Register</div>
            <div class="date-box">
                <div class="date-label">Date</div>
                <table>
                    <tr>
                        <td>Date From :</td>
                        <td>{{ $reportStart ?? '' ? date('d-m-y', strtotime($reportStart)) : 'Start' }}</td>
                    </tr>
                    <tr>
                        <td>Date To :</td>
                        <td>{{ $reportEnd ?? '' ? date('d-m-y', strtotime($reportEnd)) : 'End' }}</td>
                    </tr>
                </table>
            </div>
            <hr>
        </div>
        <table class="data">
            <thead>
                <tr>
                    <th>DATE</th>
                    <th>INVOICE NO</th>
                    <th>CUSTOMER NAME</th>
                    <th>PRODUCT NAME</th>
                    <th>QTY</th>
                    <th>VALUE EXC.SALES TAX</th>
                    <th>SALES TAX RATE</th>
                    <th>SALES TAX AMOUNT</th>
                    <th>VALUE INC.SALES TAX</th>
                </tr>
            </thead>
            <tbody>
                @foreach($registerRows ?? [] as $row)
                <tr>
                    <td>{{ $row['date'] }}</td>
                    <td>{{ $row['invoice_no'] }}</td>
                    <td>{{ $row['customer'] }}</td>
                    <td>{{ $row['product'] }}</td>
                    <td class="no">{{ number_format($row['qty'], 2) }}{{ $row['unit'] ? ' ' . $row['unit'] : '' }}</td>
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
                    <td colspan="4" style="text-align:right;font-weight:bold;">TOTAL</td>
                    <td class="no" style="font-weight:bold;">{{ number_format(collect($registerRows)->sum('qty'), 2) }}</td>
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

<!-- Third Schedule Print Section -->
<div id="thirdScheduleSection" style="display: none;" data-title="Third Schedule Register">
    <style>
        @page {
            size: A4 landscape;
            margin: 8mm;
        }
        .register-report {
            width: 100%;
            margin: 0 auto;
            font-family: 'Times New Roman', Times, serif;
            font-size: 10px;
            color: #000;
            background: #fff;
            box-sizing: border-box;
        }
        .register-report .header {
            position: relative;
        }
        .register-report .page-label {
            position: absolute;
            top: 0;
            right: 0;
            font-size: 10px;
        }
        .register-report .company {
            text-align: center;
            margin-bottom: 5px;
        }
        .register-report .company h2 {
            font-size: 20px;
            font-weight: bold;
            text-transform: uppercase;
            margin: 0;
        }
        .register-report .company .address,
        .register-report .company .taxno {
            font-size: 10px;
            margin-top: 3px;
        }
        .register-report .title {
            text-align: center;
            color: blue;
            font-style: italic;
            font-size: 28px;
            font-weight: bold;
            margin: 6px 0;
        }
        .register-report .date-box {
            width: 220px;
            border: 1px solid #000;
            padding: 5px;
            margin: 6px 0;
        }
        .register-report .date-box .date-label {
            font-weight: bold;
            border-bottom: 1px solid #000;
            padding-bottom: 3px;
            margin-bottom: 3px;
        }
        .register-report .date-box table {
            width: 100%;
            border: none;
        }
        .register-report .date-box td {
            border: none;
            padding: 1px 0;
        }
        .register-report .date-box td:last-child {
            text-align: right;
            font-weight: bold;
        }
        .register-report hr {
            border: 1px solid #000;
            margin: 5px 0;
        }
        .register-report table.data {
            width: 100%;
            border-collapse: collapse;
            margin-top: 5px;
        }
        .register-report table.data th,
        .register-report table.data td {
            border: 1px solid #000;
            padding: 2px 3px;
            text-align: center;
            word-wrap: break-word;
        }
        .register-report table.data th {
            background: #d9f2b4;
            font-weight: bold;
        }
        .register-report table.data td.no {
            text-align: right;
            white-space: nowrap;
        }
        .register-report .footer-notes {
            margin-top: 6px;
            text-align: right;
            font-size: 10px;
        }
    </style>
    <div class="register-report">
        <div class="header">
            <div class="page-label">Page 1 of 1</div>
            <div class="company">
                <h2>{{ $companyInfo['name'] ?? '' }}</h2>
                <div class="address">{{ $companyInfo['address'] ?? '' }}</div>
                <div class="taxno">TAXPAYER NO: {{ $companyInfo['ntn'] ?? '' }}</div>
            </div>
            <div class="title">Third Schedule Register</div>
            <div class="date-box">
                <div class="date-label">Date</div>
                <table>
                    <tr>
                        <td>Date From :</td>
                        <td>{{ $reportStart ?? '' ? date('d-m-y', strtotime($reportStart)) : 'Start' }}</td>
                    </tr>
                    <tr>
                        <td>Date To :</td>
                        <td>{{ $reportEnd ?? '' ? date('d-m-y', strtotime($reportEnd)) : 'End' }}</td>
                    </tr>
                </table>
            </div>
            <hr>
        </div>
        <table class="data">
            <thead>
                <tr>
                    <th>DATE</th>
                    <th>INVOICE NO</th>
                    <th>CUSTOMER NAME</th>
                    <th>PRODUCT NAME</th>
                    <th>QTY</th>
                    <th style="display: none;">RATE</th>
                    <th>RETAIL EXCL.</th>
                    <th>RETAIL S.TAX</th>
                    <th>RETAIL INCL.</th>
                    <th>DISCOUNT</th>
                    <th>TRADE EXCL.</th>
                    <th>TRADE S.TAX</th>
                    <th>VALUE WITH S.TAX</th>
                    <th>U/S 236 G/H</th>
                    <th>FURTHER TAX</th>
                    <th>AMOUNT</th>
                </tr>
            </thead>
            <tbody>
                @foreach($registerRows ?? [] as $row)
                <tr>
                    <td>{{ $row['date'] }}</td>
                    <td>{{ $row['invoice_no'] }}</td>
                    <td>{{ $row['customer'] }}</td>
                    <td>{{ $row['product'] }}</td>
                    <td class="no">{{ number_format($row['qty'], 2) }}{{ $row['unit'] ? ' ' . $row['unit'] : '' }}</td>
                    <td class="no" style="display: none;">{{ number_format($row['rate'], 4) }}</td>
                    <td class="no">{{ number_format($row['retail_excl'], 2) }}</td>
                    <td class="no">{{ number_format($row['retail_tax'], 2) }}</td>
                    <td class="no">{{ number_format($row['retail_incl'], 2) }}</td>
                    <td class="no">{{ number_format($row['discount'], 2) }}</td>
                    <td class="no">{{ number_format($row['trade_excl'], 2) }}</td>
                    <td class="no">{{ number_format($row['trade_tax'], 2) }}</td>
                    <td class="no">{{ number_format($row['trade_with_tax'], 2) }}</td>
                    <td class="no">{{ number_format($row['us236'], 2) }}</td>
                    <td class="no">{{ number_format($row['further_tax'], 2) }}</td>
                    <td class="no">{{ number_format($row['amount'], 2) }}</td>
                </tr>
                @endforeach
            </tbody>
            @if(count($registerRows ?? []) > 0)
            <tfoot>
                <tr>
                    <td colspan="4" style="text-align:right;font-weight:bold;">TOTAL</td>
                    <td class="no" style="font-weight:bold;">{{ number_format(collect($registerRows)->sum('qty'), 2) }}</td>
                    <td style="display: none;"></td>
                    <td class="no" style="font-weight:bold;">{{ number_format(collect($registerRows)->sum('retail_excl'), 2) }}</td>
                    <td class="no" style="font-weight:bold;">{{ number_format(collect($registerRows)->sum('retail_tax'), 2) }}</td>
                    <td class="no" style="font-weight:bold;">{{ number_format(collect($registerRows)->sum('retail_incl'), 2) }}</td>
                    <td class="no" style="font-weight:bold;">{{ number_format(collect($registerRows)->sum('discount'), 2) }}</td>
                    <td class="no" style="font-weight:bold;">{{ number_format(collect($registerRows)->sum('trade_excl'), 2) }}</td>
                    <td class="no" style="font-weight:bold;">{{ number_format(collect($registerRows)->sum('trade_tax'), 2) }}</td>
                    <td class="no" style="font-weight:bold;">{{ number_format(collect($registerRows)->sum('trade_with_tax'), 2) }}</td>
                    <td class="no" style="font-weight:bold;">{{ number_format(collect($registerRows)->sum('us236'), 2) }}</td>
                    <td class="no" style="font-weight:bold;">{{ number_format(collect($registerRows)->sum('further_tax'), 2) }}</td>
                    <td class="no" style="font-weight:bold;">{{ number_format(collect($registerRows)->sum('amount'), 2) }}</td>
                </tr>
                <tr>
                    <td colspan="14" style="text-align:right;font-weight:bold;">GH 236 TOTAL</td>
                    <td class="no" style="font-weight:bold;">{{ number_format($ghTotal ?? 0, 2) }}</td>
                </tr>
            </tfoot>
            @endif
        </table>
        <div class="footer-notes">Printed on: {{ now()->format('d/m/Y H:i') }}</div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('.select2').select2({
            width: '100%',
            placeholder: function() {
                return $(this).data('placeholder') || "Select an option";
            },
            allowClear: true
        });
        $(document).ready(function() {
    var $table = $('table.dt-responsive tbody');
    var $rows = $table.find('tr').get();

    $rows.sort(function(a, b) {
        var refA = parseInt($(a).find('td').eq(1).text().trim(), 10) || 0;
        var refB = parseInt($(b).find('td').eq(1).text().trim(), 10) || 0;
        return refA - refB;
    });

    $.each($rows, function(index, row) {
        $table.append(row);
    });
});
    });
    $('#invoiceRefFilter').on('keyup', function() {
    var value = $(this).val().toLowerCase().trim();
    $('table.dt-responsive tbody tr').each(function() {
        var refCell = $(this).find('td').eq(1); // 2nd column = Invoice Ref No
        var text = refCell.text().toLowerCase();
        $(this).toggle(text.indexOf(value) > -1);
    });
});

    function printSectionReport(sectionId) {
        var section = document.getElementById(sectionId);
        var styleHTML = section.querySelector('style').outerHTML;
        var reportHTML = section.querySelector('.register-report').outerHTML;
        var title = section.getAttribute('data-title') || 'Register';
        var html = '<!DOCTYPE html><html><head><meta charset="utf-8"><title>' + title + '</title>'
            + styleHTML
            + '</head><body>' + reportHTML + '</body></html>';
        var url = URL.createObjectURL(new Blob([html], { type: 'text/html' }));
        var newTab = window.open(url, '_blank');
        if (!newTab) {
            alert('Please allow popups for this site to open the report.');
            return;
        }
        setTimeout(function() {
            newTab.focus();
            newTab.print();
        }, 400);
    }
</script>
@endsection
