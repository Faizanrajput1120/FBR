@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <h4>Edit Company</h4>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('premiertax.companies.update', $company->cid) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="name" class="form-label">Company Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $company->cname) }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Update Company</button>
        <a href="{{ route('premiertax.companies.index') }}" class="btn btn-secondary">Back to List</a>
    </form>
</div>
@endsection
