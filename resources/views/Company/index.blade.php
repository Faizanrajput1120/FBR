@extends('layouts.app')
@section('context')
<div class="container mt-5">

    <div class="card shadow">
        <div class="card-header bg-dark text-white">
            <h4 class="mb-0">Companys List</h4>
        </div>

        <div class="card-body">

            <!-- FILTER FORM -->
            <form method="GET" action="{{ route('company.index') }}" class="row mb-4">

                <div class="col-md-4">
                    <input type="text" name="search" class="form-control"
                           placeholder="Search by name or email"
                           value="{{ request('search') }}">
                </div>

                <div class="col-md-4">
                    <select name="company_id" class="form-select">
                        <option value="">All Companies</option>
                        @foreach($company as $comp)
                            <option value="{{ $comp->cid }}"
                                {{ request('company_id') == $comp->cid ? 'selected' : '' }}>
                                {{ $comp->name }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="col-md-4 d-flex">
                    <button class="btn btn-primary me-2">Filter</button>
                    <a href="{{ route('company.index') }}" class="btn btn-secondary">Reset</a>
                </div>

            </form>

            <!-- CompanyS TABLE -->
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead class="table-dark">
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                          
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        @forelse($Companys as $key => $Company)
                            <tr>
                                <td>{{ $Company->firstItem() + $key }}</td>


                                <td>
                                    <a href="{{ route('company.edit', $Company->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                    
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7" class="text-center">No Companys found</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            <!-- PAGINATION -->
            <div class="mt-3">
                {{ $Companys->withQueryString()->links() }}
            </div>

        </div>
    </div>

</div>Ï
@endsection
