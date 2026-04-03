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
                    <h4 class="page-title">Recieveables</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <!-- Search Form -->
        <div class="row">
            <div class="col-12">
                <div class="card mt-2">
                    <div class="card-body">
                        <form action="{{ route('recieveables.list') }}" method="GET" class="form-inline" id="search-form">
                            <div class="row">
                                <div class="form-group col-xl-3">
                                    <label for="end_date" class="sr-only">End Date</label>
                                    <input type="date" class="form-control" id="end_date" name="end_date" value="{{ request('end_date') }}">
                                </div>
                                <div class="form-group col-xl-3">
                                    <button type="submit" class="btn btn-primary mb-2 mt-3">Search</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Ledger Table -->
        <div class="row">
            <div class="col-12">
                <div class="card mt-2">
                    <div class="card-body">
                        <button type="button" class="btn btn-secondary" style="width: 100px;" onclick="printTable()">Print Table</button>
                        <div class="card mt-2">
                            <div class="card-body">
                                <div class="tab-content">
                                    <div class="tab-pane show active" id="basic-datatable-preview">
                                        <table id="basic-datatable" class="table table-striped dt-responsive nowrap w-100">
                                            <h5>End Date: {{ request()->get('end_date') ?? date('Y-m-d') }}</h5>
                                 
                                            <thead>
                                                <tr>
                                                    <th>Account Title</th>
                                                    <th>Amount</th>
                                                </tr>
                                            </thead>
                                            <tbody id="ledger-tbody">
                                                @foreach ($balances as $balance)
                                                    <tr>
                                                        <td>{{ $balance->title }}</td>
                                                        <td class="running-total">
                                                            @if ($balance->bal >= 0)
                                                                {{ number_format($balance->bal, 2) }} Dr
                                                            @else
                                                                {{ number_format(abs($balance->bal), 2) }} Cr
                                                            @endif
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div> <!-- end preview-->
                        </div> <!-- end tab-content-->
                    </div> <!-- end card body-->
                </div> <!-- end card -->
            </div><!-- end col-->
        </div> <!-- end row-->
    </div>

<script>
function printTable() {
    // Hide elements with 'no-print' class
    const elementsToHide = document.querySelectorAll('.no-print');
    elementsToHide.forEach(el => el.style.display = 'none');

    // Get all headings (both h4 and h5) and table content
    const headings = document.querySelectorAll('.col-12 h4, .col-12 h5');
    let headingsContent = '';
    headings.forEach(heading => {
        headingsContent += heading.outerHTML;
    });
    
    const tableContent = document.getElementById('basic-datatable').outerHTML;
    const originalContents = document.body.innerHTML;

    // Replace body content with the headings and table HTML for printing
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
                    .no-print {
                        display: none;
                    }
                    h4, h5 {
                        margin: 5px 0;
                    }
                </style>
            </head>
            <body>
                ${headingsContent}
                ${tableContent}
            </body>
        </html>
    `;

    // Trigger print dialog
    window.print();

    // Restore the original page content after printing
    document.body.innerHTML = originalContents;

    // Reattach event listeners or reload the page if needed
    window.location.reload();
}
</script>

@endsection
