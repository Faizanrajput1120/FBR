@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Hyper</a></li>
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                        <li class="breadcrumb-item active">General Billing</li>
                    </ol>
                </div>
                <h4 class="page-title">General Billing</h4>
            </div>
        </div>
    </div>

    @if (session('success'))
    <div class="alert alert-success alert-dismissible text-bg-success border-0 fade show" role="alert">
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
        {{ session('success') }}
    </div>
    @endif

    @if (session('error'))
    <div class="alert alert-danger alert-dismissible text-bg-danger border-0 fade show" role="alert">
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
        {{ session('error') }}
    </div>
    @endif

    @if ($errors->any())
    <div class="alert alert-danger alert-dismissible text-bg-danger border-0 fade show" role="alert">
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="tab-content">
                        <div class="tab-pane show active" id="input-types-preview">
                            <form id="voucherForm" action="{{ route('general_billing.store') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-6">
                                        <input type="hidden" id="invoice_type" name="v_type" value="GB" readonly>
                                        <input type="hidden" id="totalAmount" name="total_amount" value="0">
                                        <input type="hidden" id="totalWeight" name="total_weight" value="0">

                                        <div class="mb-3">
                                            <label for="entryDate" class="form-label">Date</label>
                                            <input type="date" id="entryDate" class="form-control" name="date" value="{{ \Carbon\Carbon::now()->format('Y-m-d') }}">

                                        </div>

                                        <div class="mb-3">
                                            <label for="preparedBy" class="form-label">Prepared By</label>
                                            <input type="text" id="preparedBy" class="form-control" name="prepared_by" value="{{ $loggedInUser->name }}" readonly>
                                        </div>
                                       

                                        <div class="mb-3">
                                            <label for="entryParty" class="form-label">Party</label>
                                            <select name="account" class="form-control select2" id="entryParty" data-toggle="select2" >
                                                <option value="">Select</option>
                                                @foreach ($accounts->whereIn('level2_id', [2, 7]) as $account)
                                                    <option value="{{ $account->id }}">{{ $account->title }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                       

                                        <button type="button" id="loadEntry" class="btn btn-primary">Load</button>
                                        <button type="submit" class="btn btn-success">Submit Voucher</button>
                                    </div>
                                </div>

                                <!-- Manual Product Entry -->
                                <div class="border p-3 mt-3 rounded bg-light">
                                    <h5>Manual Product Entry</h5>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <label for="productType" class="form-label">Product Type</label>
                                            <select id="productType" class="form-control select2">
                                                <option value="">Select Type</option>
                                                @foreach ($items as $item)
                                                    <option value="{{ $item->id }}">{{ $item->type_title }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-3">
                                            <label for="manualProduct" class="form-label">Product</label>

                                            <select id="manualProduct" class="form-control select2">
                                                <option value="">Select Product</option>
                                                @foreach ($products as $product)
                                                    <option value="{{ $product->id }}"
                                                        data-type="{{ $product->product_type }}"
                                                        data-name="{{ $product->prod_name }}"
                                                        data-rate="{{ $product->rate }}">
                                                        {{ $product->prod_name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-2">
                                            <label class="form-label">Qty</label>
                                            <input type="number" class="form-control" id="manualQty">
                                        </div>
                                        <div class="col-md-2">
                                            <label class="form-label">Rate</label>
                                            <input type="number" class="form-control" id="manualRate">
                                        </div>
                                        <div class="col-md-2">
                                            <label class="form-label d-block">&nbsp;</label>
                                            <button type="button" class="btn btn-secondary w-100" id="addManualProduct">Add Product</button>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mt-4">
                                    <div class="col-lg-12">
                                        <table class="table" id="entriesTable">
                                            <thead>
                                                <tr>
                                                    <th>Sr No</th>
                                                    <th>V No</th>
                                                    <th>Date</th>
                                                    <th>Party Name</th>
                                                    <th>JS No</th>
                                                    <th>Product Type</th>
                                                    <th>Item Name</th>
                                                    <th>Qty</th>
                                                    <th>Rate</th>
                                                    <th>Freight</th>
                                                    <th>Amount</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody id="entriesBody"></tbody>
                                            <tfoot>
                                                <tr>
                                                    <th colspan="7" class="text-end">Grand Totals:</th>
                                                    <th id="displayGrandTotalQty">0.00</th>
                                                    <th id="displayGrandTotalRate">0.00</th>
                                                    <th id="displayGrandTotalFreight">0.00</th>
                                                    <th id="displayGrandTotalAmount">0.00</th>
                                                    <th></th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function () {
     const entryDate = document.getElementById('entryDate');
        if (!entryDate.value) {
            entryDate.value = new Date().toISOString().split('T')[0];
        }
    let rowCounter = 1;

    // $('#productType').on('change', function () {
    //     const selectedType = $(this).val();

    //     $('#manualProduct option').each(function () {
    //         const productType = $(this).data('type');
    //         if (!selectedType || productType == selectedType) {
    //             $(this).show();
    //         } else {
    //             $(this).hide();
    //         }
    //     });

    //     $('#manualProduct').val('').trigger('change');
    // });

    $('#manualProduct').on('change', function () {
        const selectedRate = $(this).find(':selected').data('rate');
        $('#manualRate').val(selectedRate);
    });

   $('#addManualProduct').on('click', function () {
    const productSelect = $('#manualProduct');
    const productId = productSelect.val();
    const productName = productSelect.find(':selected').data('name');
    const productType = productSelect.find(':selected').data('type');  // Fix here!
    const rate = parseFloat($('#manualRate').val()) || 0;
    const qty = parseFloat($('#manualQty').val()) || 0;
    const freight = parseFloat($('#manualFreight').val()) || 0;
    const amount = qty * rate;

    if (!productId || !qty) {
        alert('Please select a product and enter quantity.');
        return;
    }

    const dateNow = new Date().toISOString().split('T')[0];
    const timestamp = Date.now();

    const row = `
        <tr>
            <td>${rowCounter++}</td>
            <td>Manual</td>
            <td>${dateNow}</td>
            <td>Manual Entry</td>
            <td>-</td>
            <td>${productType}</td> <!-- Use actual product type here -->
            <td>${productName}</td>
            <td>${qty}</td>
            <td>${rate}</td>
            <td>${freight}</td>
            <td>${amount.toFixed(2)}</td>
            <td>
                <button type="button" class="btn btn-danger btn-sm delete-row">Delete</button>
                <input type="hidden" name="entries[${timestamp}][v_no]" value="Manual">
                <input type="hidden" name="entries[${timestamp}][date]" value="${dateNow}">
                <input type="hidden" name="entries[${timestamp}][party_name]" value="Manual Entry">
                <input type="hidden" name="entries[${timestamp}][gjs_no]" value="-">
                <input type="hidden" name="entries[${timestamp}][product_type]" value="${productType}">
                <input type="hidden" name="entries[${timestamp}][item_name]" value="${productName}">
                <input type="hidden" name="entries[${timestamp}][qty]" value="${qty}">
                <input type="hidden" name="entries[${timestamp}][rate]" value="${rate}">
                <input type="hidden" name="entries[${timestamp}][freight]" value="${freight}">
                <input type="hidden" name="entries[${timestamp}][amount]" value="${amount.toFixed(2)}">
            </td>
        </tr>
    `;

    $('#entriesBody').append(row);
    calculateGrandTotals();

    productSelect.val('').trigger('change');
    $('#manualQty').val('');
    $('#manualRate').val('');
    $('#manualFreight').val('');
});

    $(document).on('click', '.delete-row', function () {
        $(this).closest('tr').remove();
        calculateGrandTotals();
        rowCounter = $('#entriesBody tr').length + 1;
    });

    function calculateGrandTotals() {
        let totalQty = 0, totalRate = 0, totalFreight = 0, totalAmount = 0;

        $('#entriesBody tr').each(function () {
            totalQty += parseFloat($(this).find('td:eq(7)').text()) || 0;
            totalRate += parseFloat($(this).find('td:eq(8)').text()) || 0;
            totalFreight += parseFloat($(this).find('td:eq(9)').text()) || 0;
            totalAmount += parseFloat($(this).find('td:eq(10)').text()) || 0;
        });

        $('#displayGrandTotalQty').text(totalQty.toFixed(2));
        $('#displayGrandTotalRate').text(totalRate.toFixed(2));
        $('#displayGrandTotalFreight').text(totalFreight.toFixed(2));
        $('#displayGrandTotalAmount').text(totalAmount.toFixed(2));

        $('#totalAmount').val(totalAmount.toFixed(2));
    }
});
</script>
@endsection