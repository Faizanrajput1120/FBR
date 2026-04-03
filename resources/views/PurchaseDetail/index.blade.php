@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Hyper</a></li>
                        <li class="breadcrumb-item active">Purchase Invoices</li>
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
        <div class="col-md-8">
            <form method="GET" action="{{ route('premiertax.purchase.index') }}" class="row g-3">
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
                    <label for="party_id" class="form-label">Party</label>
                    <select class="form-control select2" id="party_id" name="party_id">
                        <option value="">All Parties</option>
                        @foreach($parties as $party)
                            <option value="{{ $party->id }}" 
                                {{ request('party_id') == $party->id ? 'selected' : '' }}>
                                {{ $party->buyer_name }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-12 mt-3">
                    <button type="submit" class="btn btn-primary">Search</button>
                    <a href="{{ route('premiertax.purchase.index') }}" class="btn btn-secondary">Reset</a>
                </div>
            </form>
        </div>
        <div class="col-md-4 d-flex justify-content-end align-items-end">
            <a href="{{ route('premiertax.purchase.create') }}" class="btn btn-success">
                <i class="mdi mdi-plus-circle"></i> Add Purchase Invoice
            </a>
        </div>
    </div>

    <div class="row">
        <div class="card">
            <div class="card-body">
                <table class="table table-striped dt-responsive nowrap w-100">
                    <thead>
                        <tr>
                            <th>Bill No</th>
                            <th>Client</th>
                            <th>Total Amount</th>
                            <th>Date</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $groupedSales = $saleDetails->groupBy('bill_no');
                        @endphp

                        @foreach($groupedSales as $billNo => $sales)
                            @php
                                $totalInclusive = $sales->sum(function($sale) {
                                    return ($sale->rate * $sale->qty) + $sale->stax_amount;
                                });
                                $firstSale = $sales->first();
                            @endphp
                            <tr>
                                <td>{{ $billNo }}</td>
                                <td>{{ optional($firstSale->parties)->buyer_name ?? 'N/A' }}</td>
                                <td>{{ number_format($totalInclusive, 2) }}</td>
                                <td>{{ $firstSale->created_at->format('Y-m-d') }}</td>
                                <td>
                                    <a href="{{ route('premiertax.purchase.invoice', $billNo) }}" 
                                       class="btn btn-primary btn-sm" 
                                       target="_blank">
                                        <i class="mdi mdi-printer"></i> Print
                                    </a>
                                    <form action="{{ route('premiertax.purchase.destroy', $billNo) }}" 
                                          method="POST" 
                                          class="d-inline"
                                          onsubmit="return confirm('Delete this entire invoice?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
    $(document).ready(function() {
        $('.select2').select2({
            width: '100%',
            placeholder: "Select a party",
            allowClear: true
        });
    });
</script>
@endpush
@endsection