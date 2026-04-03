@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Hyper</a></li>
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Tables</a></li>
                        <li class="breadcrumb-item active">Data Tables</li>
                    </ol>
                </div>
                <h4 class="page-title">Ledger</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <!-- Search Form -->
    <div class="row">
        <div class="card">
            <div class="card-body">
                <div class="tab-content">
                    <div class="col-12">
                        <form action="{{ route('ledger.list') }}" method="GET" class="form-inline col-xl-12"
                            id="search-form">
                            <div class="row">
                                <div class="form-group col-xl-3">
                                    <label for="start_date" class="sr-only">Start Date</label>
                                    <input type="date" class="form-control" id="start_date" name="start_date"
                                        value="{{ request()->get('start_date') }}">
                                </div>
                                <div class="form-group col-xl-3">
                                    <label for="end_date" class="sr-only">End Date</label>
                                    <input type="date" class="form-control" id="end_date" name="end_date"
                                        value="{{ request()->get('end_date') }}">
                                </div>
                                <div class="form-group col-xl-3">
                                    <label for="account_title" class="sr-only">Account Title</label>
                                    <select name="account_title" id="account_title" class="form-control select2"
                                        data-toggle="select2">
                                        <option value="">Select Account</option>
                                        @foreach ($accounts as $account)
                                        <option value="{{ $account->id }}" {{ isset($accountId) &&
                                            $accountId==$account->id ? 'selected' : '' }}>
                                            {{ $account->title }}
                                        </option>
                                        @endforeach
                                    </select>

                                </div>
                                <div class="form-group col-xl-3">
                                    <label for="account_title" class="sr-only">Status</label>
                                    <select name="status" class="form-control select2">
                                        <option value="">All</option>

                                        <option value="official" {{ $status=='official' ? 'selected' : '' }}>Official
                                        </option>
                                        <option value="unofficial" {{ $status=='unofficial' ? 'selected' : '' }}>
                                            Unofficial</option>

                                    </select>

                                </div>
                                <div class="col-xl-3">
                                    <button type="submit" class="btn btn-primary mb-2 mt-3">Search</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Ledger Table -->
    <div class="row">
        <div class="card mt-2">
            <div class="card-body">
                 
                
                <div id="print-header" style="display:none;">
                    @php
                    $selectedAccount = $accounts->firstWhere('id', request()->get('account_title'));
                    @endphp
                    <h3>Ledger Details</h3>
                    <div>
                        <h5 style="display: inline-block;">Start Date: <span id="display-start-date">{{
                                request()->get('start_date') ?? 'N/A' }}</span></h5>
                        <h5 style="display: inline-block; float: right;">Name: <span id="display-party-name">{{
                                $selectedAccount ? $selectedAccount->title : 'N/A' }}</span></h5>
                    </div>
                    <h5>End Date: <span id="display-end-date">{{ request()->get('end_date') ?? date('Y-m-d') }}</span>
                    </h5>

                </div>
                <button type="button" class="btn btn-secondary" style="width: 100px;" onclick="printTable()">Print
                    Table</button>
                    
                <div class="card mt-2">
                    <div class="card-body">
                        <div class="tab-content">
                            <div id="ledger">
                                <div>
                    <h3>Ledger Details</h3>
                    <div>
    <h4 style="display: inline-block;">Start Date: <span id="display-start-date">
        @if(request()->get('start_date'))
            {{ date_format(date_create(request()->get('start_date')), 'd-m-Y') }}
        @else
            N/A
        @endif
    </span>  ||</h4>
    
    <h4 style="display: inline-block;">End Date: <span id="display-party-name">
        @if(request()->get('end_date'))
            {{ date_format(date_create(request()->get('end_date')), 'd-m-Y') }}
        @else
            {{ date('d-m-Y') }}
        @endif
    </span></h4>
</div>
                </div>
                                <table id="basic-datatable" class="table table-striped dt-responsive nowrap w-100">
                                    <thead>
                                        <tr>
                                            <th>Date</th>
                                            <th>Voucher Type</th>
                                            <th>Description</th>
                                            <th>Debit</th>
                                            <th>Credit</th>
                                            <th>Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th colspan="3" class="text-end">Opening Balance</th>
                                            <th></th>
                                            <th></th>
                                            <th>
                                                @if ($openingBalance >= 0)
                                                {{ number_format(($openingBalance), 2) }} Dr
                                                @else
                                                {{ number_format(($openingBalance), 2) }} Cr
                                                @endif
                                            </th>
                                        </tr>
                                        @php
                                        $runningTotal = $openingBalance;
                                        $totalDebit = 0;
                                        $totalCredit = 0;

                                        // Sort the transactions by date before looping
                                        $sortedTrndtls = $trndtls->sortBy('date');
                                        @endphp

                                        @foreach ($sortedTrndtls as $trndtl)
                                        @php
                                        $debit = $trndtl->debit;
                                        $credit = $trndtl->credit;

                                        // Check if cash_id exists but account_id does not
                                        if (
                                        $trndtl->cash_id == $accountId &&
                                        $trndtl->account_id != $accountId
                                        ) {
                                        $credit = $trndtl->debit; // Move debit to credit
                                        $debit = $trndtl->credit; // Debit will be 0
                                        }

                                        $totalDebit += $debit;
                                        $totalCredit += $credit;
                                        $difference = $debit - $credit;
                                        $runningTotal += $difference;
                                        @endphp

                                        <tr>
                                            <td>{{ \Carbon\Carbon::parse($trndtl->date)->format('d-m-Y') }}</td>
                                            <td>{{ $trndtl->v_type }}-{{ $trndtl->v_no }}</td>
                                            <td>{{ $trndtl->description }}</td>
                                            <td>{{ number_format($debit, 2) }}</td>
                                            <td>{{ number_format($credit, 2) }}</td>
                                            <td>
                                                @if ($runningTotal > 0)
                                                {{ number_format($runningTotal, 2) }} Dr
                                                @elseif ($runningTotal < 0) {{ number_format(abs($runningTotal), 2) }}
                                                    Cr @else {{ number_format($runningTotal, 2) }} @endif </td>
                                        </tr>
                                        @endforeach

                                        <tr>
                                            <th colspan="3" class="text-end">Total:</th>
                                            <td>{{ number_format($totalDebit, 2) }}</td>
                                            <td>{{ number_format($totalCredit, 2) }}</td>
                                            <td>
                                                @if ($runningTotal > 0)
                                                {{ number_format($runningTotal, 2) }} Dr
                                                @elseif ($runningTotal < 0) {{ number_format(abs($runningTotal), 2) }}
                                                    Cr @else {{ number_format($runningTotal, 2) }} @endif </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    const today = new Date();
  const firstDayOfMonth = new Date(today.getFullYear(), today.getMonth(), 1);

  function formatDate(date) {
    const year = date.getFullYear();
    const month = String(date.getMonth() + 1).padStart(2, '0');
    const day = String(date.getDate()).padStart(2, '0');
    return `${year}-${month}-${day}`;
  }

  document.getElementById('start_date').value = formatDate(firstDayOfMonth);
  document.getElementById('end_date').value = formatDate(today);
        function printTable() {
    // Hide elements with 'no-print' class
    const elementsToHide = document.querySelectorAll('.no-print');
    elementsToHide.forEach(el => el.style.display = 'none');
    
    // Get the content from the hidden div
    const hiddenDiv = document.querySelector('div[style="display:none;"]');
    const headingContent = hiddenDiv.querySelector('h3').outerHTML;
    const subHeadings = hiddenDiv.querySelectorAll('h5');
    const subHeadingContent = Array.from(subHeadings).map(h5 => h5.outerHTML).join('');
    
    const printContents = document.getElementById('basic-datatable').outerHTML;
    const originalContents = document.body.innerHTML;

    document.body.innerHTML = `
        <html>
            <head>
                <title>Print Table</title>
                <style>
                
                    table {
                        width: 100%;
                        border-collapse: collapse;
                    }
                    th, td {
                        border: 1px solid #ddd;
                        padding: 8px;
                    }
                    th {
                        background-color: #f2f2f2;
                        text-align: left;
                    }
                    .no-print{
                        background-color: #f2f2f2;
                    }
                </style>
            </head>
            <body>
                ${headingContent}
                ${subHeadingContent}
                ${printContents}
            </body>
        </html>
    `;

    window.print();
    document.body.innerHTML = originalContents;
    window.location.reload();
}
</script>
@endsection