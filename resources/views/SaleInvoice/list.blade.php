@extends('layouts.app')

@section('content')
<div class="container">
    <h4 class="mt-3 mb-4">Sale Invoice</h4>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    @if($errors->any())
    <div class="alert alert-danger">
        <ul class="mb-0">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form method="POST" action="{{ route('premiertax.sales.store') }}">
        @csrf
        <div class="row mb-3">
            <div class="col-md-4">
                <label>Party</label>
                <select id="entryParty" class="form-control select2" name="entryParty">
                    <option value="">Select Party</option>
                    @foreach($clients as $acc)
                        <option value="{{ $acc->id }}">{{ $acc->buyer_name }}</option>
                    @endforeach
                </select>
                <input type="hidden" name="c_id" id="hiddenCompanyId">

                @if($saleAc && $saleAc->saleAcc)
                    <input type="hidden" name="s_account" value="{{ $saleAc->saleAcc->id }}">
                @endif
            </div>
        </div>

        <div class="row align-items-end">
            <div class="col-md-3">
                <label>Product</label>
                <select id="productSelect" class="form-control select2">
                    <option value="">Select Product</option>
                    @foreach($products as $product)
                        <option value="{{ $product->id }}"
                            data-name="{{ $product->item_code }}"
                            data-rate="{{ $product->sale_rate }}">
                            {{ $product->item_code }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="col-md-2">
                <label>Rate</label>
                <input type="number" id="rate" class="form-control" readonly>
            </div>

            <div class="col-md-2">
                <label>Qty</label>
                <input type="number" id="qty" class="form-control" min="1">
            </div>

            <div class="col-md-2">
                <label>Tax %</label>
                <input type="number" id="taxPercent" class="form-control" value="0">
            </div>

            <div class="col-md-3">
                <button type="button" id="loadProduct" class="btn btn-primary w-100 mt-2">Add</button>
            </div>
        </div>

        <hr>

        <table class="table mt-4" id="entriesTable">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Product</th>
                    <th>Rate</th>
                    <th>Qty</th>
                    <th>Tax %</th>
                    <th>Exclusive</th>
                    <th>Tax Amt</th>
                    <th>Inclusive</th>
                </tr>
            </thead>
            <tbody id="entriesBody"></tbody>
            <tfoot>
                <tr class="fw-bold">
                    <td colspan="5" class="text-end">Total:</td>
                    <td id="totalExclusive">0.00</td>
                    <td id="totalTax">0.00</td>
                    <td id="totalInclusive">0.00</td>
                </tr>
            </tfoot>
        </table>

        <div class="text-end">
            <button type="submit" class="btn btn-success">Submit All</button>
        </div>
    </form>
</div>

{{-- ✅ Select2 JS + CSS CDN --}}
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<script>
$(document).ready(function () {
    // ✅ Initialize Select2
    $('.select2').select2({
        width: '100%',
        placeholder: "Select an option",
        allowClear: true
    });

    const rateInput = $('#rate');
    const qtyInput = $('#qty');
    const taxInput = $('#taxPercent');
    const entriesBody = $('#entriesBody');
    const hiddenCompanyId = $('#hiddenCompanyId');
    let rowCount = 0;

    $('#entryParty').on('change', function () {
        hiddenCompanyId.val(this.value);
    });

    $('#productSelect').on('change', function () {
        const rate = parseFloat($(this).find(':selected').data('rate') || 0);
        rateInput.val(rate);
    });

    $('#loadProduct').on('click', function () {
        const productSelect = $('#productSelect');
        const productId = productSelect.val();
        const productName = productSelect.find(':selected').data('name');
        const rate = parseFloat(rateInput.val()) || 0;
        const qty = parseFloat(qtyInput.val()) || 0;
        const taxPer = parseFloat(taxInput.val()) || 0;

        if (!productId || !qty || !rate) {
            alert('Please fill in all product fields.');
            return;
        }

        const exclusive = rate * qty;
        const taxAmount = (exclusive * taxPer) / 100;
        const inclusive = exclusive + taxAmount;

        const row = `
            <tr>
                <td>${rowCount + 1}</td>
                <td>
                    ${productName}
                    <input type="hidden" name="entries[${rowCount}][prod_id]" value="${productId}">
                </td>
                <td>
                    ${rate}
                    <input type="hidden" name="entries[${rowCount}][rate]" value="${rate}">
                </td>
                <td>
                    ${qty}
                    <input type="hidden" name="entries[${rowCount}][qty]" value="${qty}">
                </td>
                <td>
                    ${taxPer}%
                    <input type="hidden" name="entries[${rowCount}][stax_per]" value="${taxPer}">
                </td>
                <td>${exclusive.toFixed(2)}</td>
                <td>
                    ${taxAmount.toFixed(2)}
                    <input type="hidden" name="entries[${rowCount}][stax_Amount]" value="${taxAmount.toFixed(2)}">
                </td>
                <td>${inclusive.toFixed(2)}</td>
            </tr>
        `;

        entriesBody.append(row);
        rowCount++;

        productSelect.val('').trigger('change');
        rateInput.val('');
        qtyInput.val('');
        taxInput.val('0');

        updateTotals();
    });

    function updateTotals() {
        let totalExclusive = 0;
        let totalTax = 0;
        let totalInclusive = 0;

        $('#entriesBody tr').each(function () {
            totalExclusive += parseFloat($(this).find('td').eq(5).text()) || 0;
            totalTax += parseFloat($(this).find('td').eq(6).text()) || 0;
            totalInclusive += parseFloat($(this).find('td').eq(7).text()) || 0;
        });

        $('#totalExclusive').text(totalExclusive.toFixed(2));
        $('#totalTax').text(totalTax.toFixed(2));
        $('#totalInclusive').text(totalInclusive.toFixed(2));
    }
});
</script>
@endsection
