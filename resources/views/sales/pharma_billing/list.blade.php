@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <h4 class="page-title">Pharmaceutical Billing</h4>
            </div>
        </div>
    </div>

    @if (session('success'))
    <div class="alert alert-success alert-dismissible text-bg-success border-0 fade show" role="alert">
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
        {{ session('success') }}
    </div>
    @endif

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form id="voucherForm" action="{{ route('pharma_billing.store') }}" method="POST">
                        @csrf
                        <div class="col-6">
                            <input type="hidden" id="invoice_type" name="v_type" value="PSN" readonly>
                            <input type="hidden" id="totalAmount" name="total_amount" value="0">
                            <input type="hidden" id="grandTotal" name="grand_total" value="0">

                            <div class="mb-3">
                                <label for="entryDate" class="form-label">Date</label>
                                <input type="date" id="entryDate" class="form-control" name="date">
                            </div>

                            <div class="mb-3">
                                <label for="preparedBy" class="form-label">Prepared By</label>
                                <input type="text" id="preparedBy" class="form-control" name="prepared_by" value="{{ $loggedInUser->name }}" readonly>
                            </div>

                            <div class="mb-3">
                                <label for="entryParty" class="form-label">Party</label>
                                <select name="account" class="form-control select2" id="entryParty" data-toggle="select2" required>
                                    <option value="">Select</option>
                                    @foreach ($accounts->where('level2_id', 7) as $account)
                                        <option value="{{ $account->id }}">{{ $account->title }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="vno" class="form-label">Voucher No</label>
                                <select name="vno" class="form-control select2" id="vno" data-toggle="select2" required>
                                    <option value="">Select</option>
                                </select>
                            </div>

                            <button type="button" id="loadEntry" class="btn btn-primary">Load Entry</button>
                            <button type="submit" class="btn btn-success">Submit Voucher</button>
                        </div>

                        <div class="col-lg-12">
                            <div class="mt-4">
                                <h5>Add Items</h5>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="itemSearch" class="form-label">Search Item</label>
                                            <input type="text" id="itemSearch" class="form-control" placeholder="Type to search items...">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="mb-3">
                                            <label for="itemSelect" class="form-label">Select Item</label>
                                            <select id="itemSelect" class="form-control select2" data-toggle="select2">
                                                <option value="">Search and select item</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="mb-3">
                                            <label for="itemQuantity" class="form-label">Quantity</label>
                                            <input type="number" id="itemQuantity" class="form-control" value="1" min="1">
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="mb-3">
                                            <label for="itemRate" class="form-label">Rate</label>
                                            <input type="number" id="itemRate" class="form-control" step="any" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-1 d-flex align-items-end">
                                        <div class="mb-3">
                                            <button type="button" id="addItemBtn" class="btn btn-primary">Add</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <table class="table mt-4" id="entriesTable">
                                <thead>
                                    <tr>
                                        <th>Sr No</th>
                                        <th>Date</th>
                                        <th>Product Name</th>
                                        <th>Party</th>
                                        <th>Item</th>
                                        <th>Box</th>
                                        <th>Packing</th>
                                        <th>BatchNo</th>
                                        <th>Total</th>
                                        <th>Rate</th>
                                        <th>Amount</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody id="entriesBody">
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th colspan="10" class="text-end">Grand Total:</th>
                                        <th id="grandTotalRow">0.00</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const loadedVnos = new Set();

    const today = new Date().toISOString().split('T')[0];
    const dateInput = document.getElementById('entryDate');
    if (dateInput) dateInput.value = today;

    const partySelect = $('#entryParty');
    if (partySelect.length) partySelect.select2();

    partySelect.on('change', function () {
        const accountId = $(this).val();
        const vnoSelect = $('#vno');
        vnoSelect.empty().append('<option value="">Select</option>');

        if (accountId) {
            $.ajax({
                url: `/printingcell/get-vnoss/${accountId}`,
                method: 'GET',
                success: function (response) {
                    if (response.status === 'success') {
                        response.vnos.forEach(vno => {
                            vnoSelect.append(`<option value="${vno}">${vno}</option>`);
                        });
                        response.used_vnos.forEach(vno => {
                            vnoSelect.append(`<option value="${vno}" disabled>${vno} (Already Selected)</option>`);
                        });
                    } else {
                        vnoSelect.append('<option value="">Not Available</option>');
                    }
                    vnoSelect.select2();
                },
                error: function () {
                    vnoSelect.append('<option value="">Error fetching vouchers</option>');
                    vnoSelect.select2();
                }
            });
        }
    });

    $('#loadEntry').on('click', function () {
        const vno = $('#vno').val();
        if (!vno) {
            alert("Please select a Voucher No.");
            return;
        }

        $.ajax({
            url: `/printingcell/get-entry-detailss/${vno}`,
            method: 'GET',
            success: function (response) {
                if (response.status === 'success' && response.entries.length > 0) {
                    response.entries.forEach(entry => {
                        addEntryRow(entry);
                    });
                    calculateAllTotals();
                    loadedVnos.add(vno);
                    alert("Load Successfully");
                } else {
                    alert('No entries found for this voucher.');
                }
            },
            error: function () {
                alert('Error fetching entry details.');
            }
        });
    });

    let searchTimeout;
    $('#itemSearch').on('input', function() {
        clearTimeout(searchTimeout);
        const query = $(this).val();
        
        if (query.length < 2) {
            $('#itemSelect').empty().append('<option value="">Search and select item</option>');
            return;
        }

        searchTimeout = setTimeout(function() {
            $.ajax({
                url: '{{ route("inventory.search_items") }}',
                method: 'GET',
                data: { query: query },
                success: function(response) {
                    $('#itemSelect').empty().append('<option value="">Select item</option>');
                    response.forEach(function(item) {
                        $('#itemSelect').append(`<option value="${item.id}" 
                            data-code="${item.item_code}" 
                            data-rate="${item.sale_rate}" 
                            data-purchase="${item.purchase}"
                            data-unit="${item.unit}"
                            data-gramage="${item.gramage}"
                            data-hscode="${item.hscode}">${item.item_code} (${item.hscode})</option>`);
                    });
                }
            });
        }, 300);
    });

    $('#itemSelect').on('change', function() {
        const selected = $(this).find(':selected');
        const rate = selected.data('rate') || 0;
        $('#itemRate').val(rate);
    });

    $('#addItemBtn').on('click', function() {
        const itemSelect = $('#itemSelect');
        const selected = itemSelect.find(':selected');
        const itemId = itemSelect.val();
        
        if (!itemId) {
            alert('Please select an item');
            return;
        }

        const quantity = parseFloat($('#itemQuantity').val()) || 1;
        const rate = parseFloat($('#itemRate').val()) || 0;
        const total = quantity * rate;

        const entry = {
            v_no: 'MANUAL',
            date: $('#entryDate').val() || today,
            product_name: selected.data('code'),
            product_id: itemId,
            party: $('#entryParty option:selected').text() || 'N/A',
            item_type: selected.data('code'),
            item_id: itemId,
            box: selected.data('unit') || 'N/A',
            pack_qty: quantity,
            batch_no: selected.data('gramage') || 'N/A',
            total: quantity,
            rate: rate,
            total_amount: total
        };

        addEntryRow(entry, true);
        calculateAllTotals();

        $('#itemSearch').val('');
        $('#itemSelect').empty().append('<option value="">Search and select item</option>');
        $('#itemQuantity').val(1);
        $('#itemRate').val('');
    });

    $('#entriesTable').on('click', '.remove-entry', function () {
        const index = $(this).data('index');
        $(`tr[data-index="${index}"]`).remove();
        loadedVnos.delete(index);
        calculateAllTotals();
    });

    function addEntryRow(entry, isManual = false) {
        const index = $('#entriesBody tr').length;
        const totalRate = (parseFloat(entry.total) || 0) * (parseFloat(entry.rate) || 0);
        
        const row = `
            <tr data-index="${index}" data-old-vno="${entry.v_no}" data-manual="${isManual}">
                <td><input type="number" name="sr_no[]" value="${index + 1}" class="form-control p-0" style="border: none;" readonly></td>
                <td>${entry.date}</td>
                <td>
                    <span style="white-space: normal; display: block;">${entry.product_name || 'N/A'}</span>
                    <input type="hidden" name="product_name[]" value="${entry.product_name || 'N/A'}">
                    <input type="hidden" name="product_id[]" value="${entry.product_id || 'N/A'}">
                </td>
                <td>${entry.party || 'N/A'}</td>
                <td>
                    <span style="white-space: normal; display: block;">${entry.item_type || 'N/A'}</span>
                    <input type="hidden" name="item[]" value="${entry.item_type || 'N/A'}">
                    <input type="hidden" name="item_id[]" value="${entry.item_id || 'N/A'}">
                </td>
                <td><input type="text" name="box[]" value="${entry.box || 'N/A'}" class="form-control p-0" style="border: none;" readonly></td>
                <td><input type="text" name="packing[]" value="${entry.pack_qty || 'N/A'}" class="form-control p-0" style="border: none;" readonly></td>
                <td><input type="text" name="batch_no[]" value="${entry.batch_no || 'N/A'}" class="form-control p-0" style="border: none;" readonly></td>
                <td><input type="number" name="total[]" value="${entry.total || '0'}" class="form-control p-0 total-input" style="border: none;" readonly></td>
                <td><input type="text" name="rate[]" value="${entry.rate || '0'}" class="form-control p-0 rate-input" style="border: none;" readonly></td>
                <td><input type="number" name="total_rate[]" value="${totalRate.toFixed(2)}" class="form-control total-rate-input p-0" style="border: none;" readonly></td>
                <td><button type="button" class="btn btn-danger remove-entry" data-index="${index}">Remove</button></td>
            </tr>
        `;
        $('#entriesBody').append(row);
    }
});

function calculateAllTotals() {
    let grandTotal = 0;
    $('#entriesBody tr').each(function () {
        const totalRateInput = $(this).find('input[name="total_rate[]"]');
        if (totalRateInput.length) {
            const totalRate = parseFloat(totalRateInput.val()) || 0;
            grandTotal += totalRate;
        }
    });

    $('#grandTotalRow').text(grandTotal.toFixed(2));
    $('#grandTotal').val(grandTotal.toFixed(2));
}
</script>

@endsection
