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
                                <i class="fas fa-search"></i>
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
                            <th>Buyer Name</th>
                            <th>Type</th>
                            <th>CNIC</th>
                            <th>STRN</th>
                            <th>NTN</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($parties as $party)
                        <tr>
                            <td>{{ $party->id }}</td>
                            <td>{{ $party->buyer_name }}</td>
                            <td>
                                <span class="badge {{ $party->buyer_type == 'Registered' ? 'badge-success' : 'badge-warning' }}">
                                    {{ $party->buyer_type }}
                                </span>
                            </td>
                            <td>{{ $party->cnic ?? 'N/A' }}</td>
                            <td>
                                @if($party->strn)
                                   {{ $party->strn }}
                                @endif
                               
                            </td>
                            <td>
                                @if($party->NTN)
                                   {{ $party->NTN }}
                                @endif
                               
                            </td>
                            <td>
                                <div class="btn-group btn-group-sm" role="group">
                                    <a href="{{ route('custommer.show', $party->id) }}" class="btn btn-info" title="View">
                                        <i class="fas fa-eye">View</i>
                                    </a>
                                    <a href="{{ route('custommer.edit', $party->id) }}" class="btn btn-warning" title="Edit">
                                        <i class="fas fa-edit">EDIT</i>
                                    </a>
                                    <form action="{{ route('custommer.destroy', $party->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger" title="Delete" onclick="return confirm('Are you sure you want to delete this party?')">
                                            <i class="fas fa-trash">Delete</i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="6" class="text-center">No parties found</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            <!-- Pagination -->
            <div class="d-flex justify-content-between">
                <div class="mt-3">
                    Showing {{ $parties->firstItem() }} to {{ $parties->lastItem() }} of {{ $parties->total() }} entries
                </div>
                <div class="mt-3">
                    {{ $parties->appends(request()->query())->links() }}
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
    $(document).ready(function() {
        $('#dataTable').DataTable({
            "paging": false, // Disable DataTables pagination (using Laravel pagination)
            "info": false,
            "searching": false // Disable DataTables search (using our custom search)
        });
    });
</script>
@endsection