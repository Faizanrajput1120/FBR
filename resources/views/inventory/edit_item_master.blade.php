@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Hyper</a></li>
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                            <li class="breadcrumb-item active">Form Elements</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Edit Registered Item</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h2 class="header-title">Edit Item</h2>

                        <div class="tab-content mt-2">
                            <div class="tab-pane show active" id="input-types-preview">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <form action="{{ route('inventory.itemmaster.update', $itemMasters->id) }}"
                                            method="POST">
                                            @csrf

                                            <div class="mb-3">
                                                <label for="item_code" class="form-label">Item Title</label>
                                                <input type="text" id="item_code" class="form-control" name="item_code"
                                                    value="{{ old('item_code', $itemMasters->item_code) }}" placeholder="Item Title" required>

                                                @if ($errors->has('item_code'))
                                                    <span class="text-danger">{{ $errors->first('item_code') }}</span>
                                                @endif
                                            </div>

                                           

                                            <div class="mb-3">
                                                <label for="unit" class="form-label">Units</label>
                                                <select name="unit" id="unit" class="form-control select2"
                                                    data-toggle="select2" required>
                                                    <option value="">Select</option>
                                                    @foreach ($units as $unit)
                                                        <option value="{{ $unit->unit_value }}"
                                                            {{ old('unit', $itemMasters->unit) == $unit->unit_value ? 'selected' : '' }}>
                                                            {{ $unit->unit_value }}
                                                        </option>
                                                    @endforeach
                                                </select>

                                                @if ($errors->has('unit'))
                                                    <span class="text-danger">{{ $errors->first('unit') }}</span>
                                                @endif
                                            </div>

                                            <div class="mb-3">
                                                <label for="unit_value" class="form-label">Unit Value</label>
                                                <input type="number" id="unit_value" class="form-control" name="unit_value"
                                                    value="{{ old('unit_value', $itemMasters->unit_value) }}" placeholder="unit_value" required step="any">

                                                @if ($errors->has('unit_value'))
                                                    <span class="text-danger">{{ $errors->first('unit_value') }}</span>
                                                @endif
                                            </div>
                                            
                                            <div class="mb-3">
                                                <label for="sale_type" class="form-label">Sale Type</label>
                                                <select name="sale_type" id="sale_type" class="form-control select2"
                                                    data-toggle="select2" required>
                                                    <option value="">Select</option>
                                                    @foreach ($saleType as $type)
                                                        <option value="{{ $type }}"
                                                            {{ old('sale_type', $itemMasters->sale_type) == $type ? 'selected' : '' }}>
                                                            {{ $type }}
                                                        </option>
                                                    @endforeach
                                                </select>

                                                @if ($errors->has('sale_type'))
                                                    <span class="text-danger">{{ $errors->first('sale_type') }}</span>
                                                @endif
                                            </div>

                                            <div class="mb-3">
                                                <label for="sale" class="form-label">Sale Tax %</label>
                                                <input type="number" id="sale" class="form-control" name="sale"
                                                    value="{{ old('sale', $itemMasters->sale) }}" placeholder="Sale Tax" required step="any">

                                                @if ($errors->has('sale'))
                                                    <span class="text-danger">{{ $errors->first('sale') }}</span>
                                                @endif
                                            </div>
                                            
                                            <div class="mb-3">
                                                <label for="purchase" class="form-label">Purchase</label>
                                                <input type="number" id="purchase" class="form-control" name="purchase"
                                                    value="{{ old('purchase', $itemMasters->purchase) }}" placeholder="Purchase" required step="any">

                                                @if ($errors->has('purchase'))
                                                    <span class="text-danger">{{ $errors->first('purchase') }}</span>
                                                @endif
                                            </div>

                                            <div class="mb-3">
                                                <label for="sale_rate" class="form-label">Sale Rate</label>
                                                <input type="number" id="sale_rate" class="form-control" name="sale_rate"
                                                    value="{{ old('sale_rate', $itemMasters->sale_rate) }}" placeholder="Sale Rate" required step="any">

                                                @if ($errors->has('sale_rate'))
                                                    <span class="text-danger">{{ $errors->first('sale_rate') }}</span>
                                                @endif
                                            </div>


                                          
                                            
                                            
                                            
                                            <div class="mb-3">
                                                <label for="hscode" class="form-label">HS Code</label>
                                                 <select name="hs_code" id="hs_code" class="form-select">
    <option value="{{ old('hscode', $itemMasters->hscode) }}">Select HS Code</option>
    @foreach($headings as $heading)
        @if($heading->subcategories && count($heading->subcategories))
            <optgroup label="{{ $heading->code }} - {{ $heading->description }}">
                @foreach($heading->subcategories as $sub)
                    <option value="{{ old('hscode', $itemMasters->hscode) }}">
                        {{ $sub->code }} - {{ $sub->description }}
                    </option>
                @endforeach
            </optgroup>
        @endif
    @endforeach
</select>
                                            </div>
                                            
                                            
                                            
                                            
                                            

                                            <div class="mb-3">
                                                <label for="gramage" class="form-label">Gramage</label>
                                                <input type="number" id="gramage" class="form-control" name="gramage"
                                                    value="{{ old('gramage', $itemMasters->gramage) }}" placeholder="Gramage" required step="any">

                                                @if ($errors->has('gramage'))
                                                    <span class="text-danger">{{ $errors->first('gramage') }}</span>
                                                @endif
                                            </div>

                                            <button type="submit" class="btn btn-primary">Update</button>
                                        </form>
                                    </div> <!-- end col -->
                                </div>
                                <!-- end row-->
                            </div> <!-- end preview-->
                        </div> <!-- end tab-content-->
                    </div> <!-- end card-body -->
                </div> <!-- end card -->
            </div><!-- end col -->
        </div><!-- end row -->
    </div>
      <!-- jQuery (Required for Select2) -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Select2 JS -->
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<script>
    $(document).ready(function() {
        $('#hs_code').select2({
            placeholder: 'Select or search HS Code',
            width: '100%' // optional: adjusts to full width
        });
    });
</script>
@endsection