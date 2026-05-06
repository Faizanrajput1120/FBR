@extends('layouts.app')

@section('content')
    <div class="container-fluid">

        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex justify-content-between align-items-center">
                <h6 class="m-0 font-weight-bold text-primary">Customer Management</h6>
                <div>
                    <a href="{{ route('custommer.create') }}" class="btn btn-primary btn-sm">
                        <i class="fas fa-plus"></i> Add New Customer
                    </a>
                </div>
            </div>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @if(session('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('error') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
            <div class="card-body">
                @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif

                <!-- Search Form -->
                <div class="mb-4">
                    <form action="{{ route('custommer.index') }}" method="GET" class="form-inline">
                        <div class="input-group">
                            <input type="text" name="search" class="form-control" placeholder="Search by name..."
                                value="{{ request('search') }}">
                            <div class="input-group-append">
                                <button class="btn btn-outline-secondary" type="submit">
                                    <i class="fas fa-search">Search</i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="table-responsive">
                    <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                        <thead class="thead-light">
                            <tr>
                                <th>ID</th>
                                <th>Business Name</th>
                                <th>Registration Type</th>
                                <th>NTN/CNIC</th>
                                <th>Province</th>
                                <th>Address</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($buyers as $buyer)
                                <tr>
                                    <td>{{ $buyer->id }}</td>
                                    <td>{{ $buyer->business_name }}</td>
                                    <td>
                                        <span
                                            class="badge {{ $buyer->registration_type == 'Registered' ? 'badge-success' : 'badge-warning' }}">
                                            {{ $buyer->registration_type }}
                                        </span>
                                    </td>
                                    <td>{{ $buyer->ntn_cnic ?? 'N/A' }}</td>
                                    <td>{{ $buyer->province ?? 'N/A' }}</td>
                                    <td>{{ $buyer->address ?? 'N/A' }}</td>
                                    <td>
                                        <div class="btn-group btn-group-sm" role="group">
                                            {{-- <a href="{{ route('custommer.show', $buyer->id) }}" class="btn btn-info"
                                                title="View">
                                                <i class="fas fa-eye">View</i>
                                            </a> --}}
                                            <a href="{{ route('custommer.edit', $buyer->id) }}" class="btn btn-warning"
                                                title="Edit">
                                                <i class="fas fa-edit">EDIT</i>
                                            </a>
                                            <form action="{{ route('custommer.destroy', $buyer->id) }}" method="POST"
                                                class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger" title="Delete"
                                                    onclick="return confirm('Are you sure you want to delete this customer?')">
                                                    <i class="fas fa-trash">Delete</i>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="7" class="text-center">No customers found</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

                <!-- Pagination -->
                <div class="d-flex justify-content-between">
                    <div class="mt-3">
                        Showing {{ $buyers->firstItem() }} to {{ $buyers->lastItem() }} of {{ $buyers->total() }} entries
                    </div>
                    <div class="mt-3">
                        {{ $buyers->appends(request()->query())->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <!-- Page level plugins -->
    <script src="{{ asset('vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

    <script>
        $(document).ready(function () {
            $('#dataTable').DataTable({
                "paging": false, // Disable DataTables pagination (using Laravel pagination)
                "info": false,
                "searching": false // Disable DataTables search (using our custom search)
            });
        });
    </script>
@endsection