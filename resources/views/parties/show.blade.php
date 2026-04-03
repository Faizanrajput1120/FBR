@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex justify-content-between align-items-center">
            <h6 class="m-0 font-weight-bold text-primary">Party Member Details</h6>
            <div>
                <a href="{{ route('parties.edit', $party->id) }}" class="btn btn-warning btn-sm">
                    <i class="fas fa-edit"></i> Edit
                </a>
                <a href="{{ route('parties.index') }}" class="btn btn-secondary btn-sm">
                    <i class="fas fa-arrow-left"></i> Back
                </a>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th width="30%">ID</th>
                            <td>{{ $party->id }}</td>
                        </tr>
                        <tr>
                            <th>Buyer Name</th>
                            <td>{{ $party->buyer_name }}</td>
                        </tr>
                        <tr>
                            <th>Buyer Type</th>
                            <td>
                                <span class="badge {{ $party->buyer_type == 'Registered' ? 'badge-success' : 'badge-warning' }}">
                                    {{ $party->buyer_type }}
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <th>CNIC</th>
                            <td>{{ $party->cnic ?? 'N/A' }}</td>
                        </tr>
                    </table>
                </div>
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th width="30%">Location</th>
                            <td>
                                {{ $party->city ?? '' }}<br>
                                {{ $party->province ?? '' }}<br>
                                {{ $party->address ?? '' }}
                            </td>
                        </tr>
                        <tr>
                            <th>Contact</th>
                            <td>
                                @if($party->NTN)
                                    <i class="fas fa-phone"></i> {{ $party->NTN }}<br>
                                @endif
                                @if($party->strn)
                                    <i class="fas fa-envelope"></i> {{ $party->strn }}
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <th>Company</th>
                            <td>{{ $party->company->name ?? 'N/A' }}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection