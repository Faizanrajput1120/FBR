@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create New Unit</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('unit.store') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="unit_value" class="col-md-4 col-form-label text-md-right">Unit Value</label>

                            <div class="col-md-6">
                                <input id="unit_value" type="text" class="form-control @error('unit_value') is-invalid @enderror" name="unit_value" required>

                                @error('unit_value')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Create
                                </button>
                                <a href="{{ route('unit.index') }}" class="btn btn-secondary">
                                    Cancel
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection