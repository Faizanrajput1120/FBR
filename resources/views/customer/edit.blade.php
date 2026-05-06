@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">{{ isset($buyer) ? 'Edit' : 'Create' }} Customer</h6>
        </div>
        <div class="card-body">
            <form action="{{ isset($buyer) ? route('custommer.update', $buyer->id) : route('custommer.store') }}" method="POST">
                @csrf
                @if(isset($buyer))
                    @method('PUT')
                @endif

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="business_name">Business Name *</label>
                            <input type="text" class="form-control @error('business_name') is-invalid @enderror" 
                                   id="business_name" name="business_name" 
                                   value="{{ old('business_name', $buyer->business_name ?? '') }}" required>
                            @error('business_name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="registration_type">Registration Type *</label>
                            <select class="form-control @error('registration_type') is-invalid @enderror" 
                                    id="registration_type" name="registration_type" required>
                                <option value="Registered" {{ (old('registration_type', $buyer->registration_type ?? '') == 'Registered') ? 'selected' : '' }}>Registered</option>
                                <option value="Unregistered" {{ (old('registration_type', $buyer->registration_type ?? '') == 'Unregistered') ? 'selected' : '' }}>Unregistered</option>
                            </select>
                            @error('registration_type')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="row">
                   
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="ntn_cnic">NTN/CNIC</label>
                            <input type="text" class="form-control @error('ntn_cnic') is-invalid @enderror" 
                                   id="ntn_cnic" name="ntn_cnic" 
                                   value="{{ old('ntn_cnic', $buyer->ntn_cnic ?? '') }}">
                            @error('ntn_cnic')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="address">Address</label>
                            <input type="text" class="form-control @error('address') is-invalid @enderror" 
                                   id="address" name="address" 
                                   value="{{ old('address', $buyer->address ?? '') }}">
                            @error('address')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="province">Province/State</label>
                            <input type="text" class="form-control @error('province') is-invalid @enderror" 
                                   id="province" name="province" 
                                   value="{{ old('province', $buyer->province ?? '') }}">
                            @error('province')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                  
                    
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="province">Province/State</label>
                            <input type="text" class="form-control @error('province') is-invalid @enderror" 
                                   id="province" name="province" 
                                   value="{{ old('province', $party->province ?? '') }}" >
                            @error('province')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    
                </div>

               <input type='hidden' value={{auth()->user()->fk_c_id}} name='company_id'>
               <input type='hidden' value='customer' name='type'>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-save"></i> {{ isset($buyer) ? 'Update' : 'Save' }}
                    </button>
                    <a href="{{ route('custommer.index') }}" class="btn btn-secondary">
                        <i class="fas fa-times"></i> Cancel
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection