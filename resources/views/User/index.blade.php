@extends('layouts.app')

@section('content')
<div class="container mt-5">

    <div class="card shadow">
        <div class="card-header bg-dark text-white d-flex justify-content-between">
            <h4 class="mb-0">Users List</h4>
            <a href="{{ route('users.create') }}" class="btn btn-light btn-sm">+ Add User</a>
        </div>

        <div class="card-body">

            <!-- FILTER FORM -->
            <form method="GET" action="{{ route('users.index') }}" class="row mb-4">

                <div class="col-md-4 mb-2">
                    <input type="text" name="search" class="form-control"
                           placeholder="Search by name or email"
                           value="{{ request('search') }}">
                </div>

                <div class="col-md-4 mb-2">
                    <select name="company_id" class="form-select">
                        <option value="">All Companies</option>
                        @foreach ($company as $comp)
                            <option value="{{ $comp->cid }}"
                                {{ request('company_id') == $comp->cid ? 'selected' : '' }}>
                                {{ $comp->name }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="col-md-4 d-flex mb-2">
                    <button type="submit" class="btn btn-primary me-2">Filter</button>
                    <a href="{{ route('users.index') }}" class="btn btn-secondary">Reset</a>
                </div>

            </form>

            <!-- SUCCESS MESSAGE -->
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <!-- USERS TABLE -->
            <div class="table-responsive">
                <table class="table table-bordered table-striped align-middle">
                    <thead class="table-dark">
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Business</th>
                            <th>Company</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        @forelse($users as $key => $user)
                            <tr>
                                <td>{{ $users->firstItem() + $key }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->business_name ?? '-' }}</td>

                                <!-- Show Company Name (not ID) -->
                                <td>{{ $user->company->name ?? '-' }}</td>

                                <td>
                                    <a href="{{ route('users.edit', $user->id) }}"
                                       class="btn btn-sm btn-warning">Edit</a>

                                    <!-- Delete -->
                                    <form action="{{ route('users.destroy', $user->id) }}"
                                          method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-sm btn-danger"
                                                onclick="return confirm('Delete this user?')">
                                            Delete
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="text-center">No users found</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            <!-- PAGINATION -->
            <div class="mt-3">
                {{ $users->withQueryString()->links() }}
            </div>

        </div>
    </div>

</div>
@endsection