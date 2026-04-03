@extends('layouts.app')

@section('content')
<div class="container-fluid">

    <div class="row mb-3">
        <div class="col-12 d-flex justify-content-between align-items-center">
            <h4>Companies</h4>
            <a href="{{ route('premiertax.companies.create') }}" class="btn btn-primary">Add Company</a>
        </div>
    </div>

    @if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
    @endif

    <table id="basic-datatable" class="table table-striped dt-responsive nowrap w-100">
        <thead>
            <tr>
                <th>Id</th>
                <th>Company Name</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($companies as $company)
            <tr>
                <td>{{ $company->cid }}</td>
                <td>{{ $company->cname }}</td>
                <td class="no-print">
                    <form action="{{ route('premiertax.companies.destroy', $company->cid) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this company?');" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <button type="button" class="btn btn-secondary mt-3" onclick="printTable()">Print Table</button>
</div>

<script>
    function printTable() {
        const elementsToHide = document.querySelectorAll('.no-print');
        elementsToHide.forEach(el => el.style.display = 'none');

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
                        .no-print {
                            display: none;
                        }
                    </style>
                </head>
                <body>
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
