@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="#">Reports</a></li>
                        <li class="breadcrumb-item active">Purchase Report</li>
                    </ol>
                </div>
                <h4 class="page-title"> Purchase Report</h4>
            </div>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-md-12">
            <form method="GET" action="{{ route('reports.party') }}" class="row g-3">
                <div class="col-md-3">
                    <label for="start_date" class="form-label">Start Date</label>
                    <input type="date" class="form-control" name="start_date" 
                           value="{{ request('start_date') }}">
                </div>
                <div class="col-md-3">
                    <label for="end_date" class="form-label">End Date</label>
                    <input type="date" class="form-control" name="end_date" 
                           value="{{ request('end_date') }}">
                </div>
                <div class="col-md-4">
                    <label for="party_id" class="form-label">Party</label>
                    <select class="form-control select2" name="party_id">
                        <option value="">All Parties</option>
                        @foreach($parties as $party)
                            <option value="{{ $party->id }}" 
                                {{ request('party_id') == $party->id ? 'selected' : '' }}>
                                {{ $party->buyer_name }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-2 d-flex align-items-end">
                    <button type="submit" class="btn btn-primary">Generate</button>
                </div>
            </form>
        </div>
    </div>

    <div class="row mb-2">
        <div class="col-md-12 text-end">
            <button onclick="printReport()" class="btn btn-success">
                <i class="mdi mdi-printer"></i> Print Report
            </button>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="reportTable" class="table table-striped table-bordered">
                            <thead class="table-light">
                                <tr>
                                    <th>Party Name</th>
                                    <th>Bill No</th>
                                    <th>Voucher No</th>
                                    <th>Date</th>
                                    <th>Subtotal</th>
                                    <th>Tax Amount</th>
                                    <th>Grand Total</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($reportData as $data)
                                <tr>
                                    <td>{{ $data->parties->buyer_name ?? 'N/A' }}</td>
                                    <td>{{ $data->bill_no }}</td>
                                    <td>{{ $data->v_no }}</td>
                                    <td>{{ $data->created_at->format('d/m/Y') }}</td>
                                    <td class="text-end">{{ number_format($data->subtotal, 2) }}</td>
                                    <td class="text-end">{{ number_format($data->tax_amount, 2) }}</td>
                                    <td class="text-end">{{ number_format($data->grand_total, 2) }}</td>
                                    <td>
                                        <a href="{{ route('premiertax.purchase.invoice', $data->bill_no) }}" 
                                           class="btn btn-sm btn-info" target="_blank">
                                            View Invoice
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                            @if(count($reportData) > 0)
                            <tfoot>
                                <tr class="fw-bold">
                                    <td colspan="4" class="text-end">Total:</td>
                                    <td class="text-end">{{ number_format($reportData->sum('subtotal'), 2) }}</td>
                                    <td class="text-end">{{ number_format($reportData->sum('tax_amount'), 2) }}</td>
                                    <td class="text-end">{{ number_format($reportData->sum('grand_total'), 2) }}</td>
                                    <td></td>
                                </tr>
                            </tfoot>
                            @endif
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Print styles and script -->
<style>
    @media print {
        body * {
            visibility: hidden;
        }
        #printSection, #printSection * {
            visibility: visible;
        }
        #printSection {
            position: absolute;
            left: 0;
            top: 0;
            width: 100%;
        }
        .no-print {
            display: none !important;
        }
        table {
            width: 100% !important;
            font-size: 12px !important;
        }
        .table-responsive {
            overflow: visible !important;
        }
    }
</style>

<div id="printSection" style="display: none;">
    <h2 class="text-center">Party Purchase Report</h2>
    <p class="text-center">
        @if(request('start_date') || request('end_date'))
            Date Range: {{ request('start_date') ? date('d/m/Y', strtotime(request('start_date'))) : 'Start' }} 
            to {{ request('end_date') ? date('d/m/Y', strtotime(request('end_date'))) : 'End' }}
        @endif
        @if(request('party_id'))
            <br>Party: {{ $parties->firstWhere('id', request('party_id'))->buyer_name ?? 'All Parties' }}
        @endif
    </p>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Party Name</th>
                <th>Bill No</th>
                <th>Voucher No</th>
                <th>Date</th>
                <th class="text-end">Subtotal</th>
                <th class="text-end">Tax Amount</th>
                <th class="text-end">Grand Total</th>
            </tr>
        </thead>
        <tbody>
            @foreach($reportData as $data)
            <tr>
                <td>{{ $data->parties->buyer_name ?? 'N/A' }}</td>
                <td>{{ $data->bill_no }}</td>
                <td>{{ $data->v_no }}</td>
                <td>{{ $data->created_at->format('d/m/Y') }}</td>
                <td class="text-end">{{ number_format($data->subtotal, 2) }}</td>
                <td class="text-end">{{ number_format($data->tax_amount, 2) }}</td>
                <td class="text-end">{{ number_format($data->grand_total, 2) }}</td>
            </tr>
            @endforeach
        </tbody>
        @if(count($reportData) > 0)
        <tfoot>
            <tr class="fw-bold">
                <td colspan="4" class="text-end">Total:</td>
                <td class="text-end">{{ number_format($reportData->sum('subtotal'), 2) }}</td>
                <td class="text-end">{{ number_format($reportData->sum('tax_amount'), 2) }}</td>
                <td class="text-end">{{ number_format($reportData->sum('grand_total'), 2) }}</td>
            </tr>
        </tfoot>
        @endif
    </table>
    <div class="text-end mt-3">
        <p>Printed on: {{ now()->format('d/m/Y H:i') }}</p>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('.select2').select2({
            width: '100%'
        });
    });

    function printReport() {
        // Clone the print section
        var printContents = document.getElementById('printSection').innerHTML;
        
        // Open a new window
        var originalContents = document.body.innerHTML;
        var printWindow = window.open('', '_blank');
        
        printWindow.document.write('<html><head><title>Party Purchase Report</title>');
        printWindow.document.write('<link href="{{ asset("assets/css/bootstrap.min.css") }}" rel="stylesheet">');
        printWindow.document.write('<style>body { font-family: Arial; } .table { width: 100%; } .text-end { text-align: right; } table { border-collapse: collapse; } table, th, td { border: 1px solid #ddd; } th, td { padding: 8px; }</style>');
        printWindow.document.write('</head><body>');
        printWindow.document.write(printContents);
        printWindow.document.write('</body></html>');
        printWindow.document.close();
        
        // Wait for content to load before printing
        printWindow.onload = function() {
            printWindow.print();
            printWindow.close();
        };
    }
</script>
@endsection

@push('scripts')
<script>
    $(document).ready(function() {
        $('.select2').select2({
            width: '100%'
        });
    });

    function printReport() {
        // Clone the print section
        var printContents = document.getElementById('printSection').innerHTML;
        
        // Open a new window
        var originalContents = document.body.innerHTML;
        var printWindow = window.open('', '_blank');
        
        printWindow.document.write('<html><head><title>Party Purchase Report</title>');
        printWindow.document.write('<link href="{{ asset("assets/css/bootstrap.min.css") }}" rel="stylesheet">');
        printWindow.document.write('<style>body { font-family: Arial; } .table { width: 100%; } .text-end { text-align: right; } table { border-collapse: collapse; } table, th, td { border: 1px solid #ddd; } th, td { padding: 8px; }</style>');
        printWindow.document.write('</head><body>');
        printWindow.document.write(printContents);
        printWindow.document.write('</body></html>');
        printWindow.document.close();
        
        // Wait for content to load before printing
        printWindow.onload = function() {
            printWindow.print();
            printWindow.close();
        };
    }
</script>
@endpush