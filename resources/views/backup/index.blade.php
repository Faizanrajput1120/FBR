@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h4 class="page-title">Data Backup</h4>
            </div>
        </div>
        @if (session('success'))
            <div class="alert alert-success alert-dismissible text-bg-success border-0 fade show" role="alert">
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
                <strong>Success - </strong> {{ session('success') }}
            </div>
        @endif
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form id="voucherForm" action="{{ route('bank.store') }}" method="POST">
                           
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    
@endsection
