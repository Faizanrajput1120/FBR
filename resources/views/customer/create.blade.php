@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">{{ isset($party) ? 'Edit' : 'Create' }} Party Member</h6>
        </div>
        <div class="card-body">
            <form action="{{ isset($party) ? route('custommer.update', $party->id) : route('custommer.store') }}" method="POST">
                @csrf
                @if(isset($party))
                    @method('PUT')
                @endif

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="buyer_name">Buyer Name *</label>
                            <input type="text" class="form-control @error('buyer_name') is-invalid @enderror" 
                                   id="buyer_name" name="buyer_name" 
                                   value="{{ old('buyer_name', $party->buyer_name ?? '') }}" required>
                            @error('buyer_name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="buyer_type">Buyer Type *</label>
                            <select class="form-control @error('buyer_type') is-invalid @enderror" 
                                    id="buyer_type" name="buyer_type" required>
                                <option value="Registered" {{ (old('buyer_type', $party->buyer_type ?? '') == 'Registered') ? 'selected' : '' }}>Registered</option>
                                <option value="Unregistered" {{ (old('buyer_type', $party->buyer_type ?? '') == 'Unregistered') ? 'selected' : '' }}>Unregistered</option>
                            </select>
                            @error('buyer_type')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="row">
                   
                      <div class="col-md-4">
                        <div class="form-group">
                            <label for="address">Address</label>
                            <input type="text" class="form-control @error('address') is-invalid @enderror" 
                                   id="address" name="address" 
                                   value="{{ old('address', $party->address ?? '') }}" required>
                            @error('address')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="NTN" required>NTN</label>
                            <input type="text" class="form-control @error('NTN') is-invalid @enderror" 
                                   id="ntn" name="NTN" 
                                   value="{{ old('NTN', $party->NTN ?? '') }}" required>
                            @error('NTN')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="strn" required>STRN</label>
                            <input type="text" class="form-control @error('strn') is-invalid @enderror" 
                                   id="strn" name="strn" 
                                   value="{{ old('strn', $party->strn ?? '') }}" required>
                            @error('strn')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="row">
                     <div class="col-md-4">
                        <div class="form-group">
                            <label for="cnic">CNIC</label>
                            <input type="number" class="form-control @error('cnic') is-invalid @enderror" 
                                   id="cnic" name="cnic" 
                                   value="{{ old('cnic', $party->cnic ?? '') }}"
                                   placeholder="XXXXX-XXXXXXX-X">
                            @error('cnic')
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
                    
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="city">City</label>
                            <input type="text" class="form-control @error('city') is-invalid @enderror" 
                                   id="city" name="city" 
                                   value="{{ old('city', $party->city ?? '') }}" >
                            @error('city')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

               <input type='hidden' value={{auth()->user()->fk_c_id}} name='company_id'>
               <input type='hidden' value='customer' name='type'>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-save"></i> {{ isset($party) ? 'Update' : 'Save' }}
                    </button>
                    <a href="{{ route('parties.index') }}" class="btn btn-secondary">
                        <i class="fas fa-times"></i> Cancel
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection