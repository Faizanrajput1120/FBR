@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <h4 class="page-title">Confectionery</h4>
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
                    <form id="voucherForm" action="{{ route('confectionery.store') }}" method="POST">
                        @csrf
                        <div class="col-6">
                            <input type="hidden" id="invoice_type" name="v_type" value="CDC" readonly>
                            <input type="hidden" id="invoice" name="invoice_number">
                            <input type="hidden" id="totalAmount" name="total_amount" value="0">

                            <!-- Date Field -->
                            <div class="mb-3">
                                <label for="entryDate" class="form-label">Date</label>
                                <input type="date" id="entryDate" class="form-control" name="date">
                            </div>
                            <div class="mb-3">
                                <label for="preparedBy" class="form-label">Prepared By</label>
                                <input type="text" id="preparedBy" class="form-control"
                                    name="prepared_by" value="{{$loggedInUser->name}}" readonly>
                            </div>
                            <!-- Supplier Selection -->
                            <div class="mb-3">
    <label for="entryParty" class="form-label">Party</label>
    <select name="account" class="form-control "  class="form-control select2 " id="entryParty" data-toggle="select2" required>
        <option value="">Select</option>
        @foreach ($accounts->where('level2_id', 7) as $account)
            <option value="{{ $account->id }}">{{ $account->title }}</option>
        @endforeach
    </select>
</div>

<div class="mb-3">
    <label for="productName" class="form-label">Product Name</label>
    <select name="product" class="form-control select2" id="productName" data-toggle="select2" required>
        <option value="">Select</option>
    </select>
</div>
                            
                            <div class="mb-3">
                                <label for="itemTitle" class="form-label">Item Type</label>
                                <select name="item" class="form-control select2" data-toggle="select2" id="itemTitle" required>
                                    <option value="">Select</option>
                                    @foreach ($items as $item)
                                        <option value="{{ $item->id }}">{{ $item->type_title }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <!-- P.O, Box, and Packing Fields -->

                            <div class="mb-3">
                                <label for="box" class="form-label">Box</label>
                                <input type="number" id="box" class="form-control" name="box">
                            </div>

                            <div class="mb-3">
                                <label for="packing" class="form-label">Packing</label>
                                <!-- Make packing field editable by removing 'readonly' -->
                                <input type="number" id="packing" class="form-control" name="packing">
                            </div>
                            <div class="mb-3">
                                <label for="po_no" class="form-label">PO No</label>
                                <input type="text" id="po_no" class="form-control" name="po_no">
                            </div>
<div class="mb-3">
                                                <label for="freight" class="form-label">Freight</label>
                                                <input type="number" id="freight" class="form-control" name="freight" value="0" readonly>
                                            </div>
                                            
                            <button type="button" id="addEntry" class="btn btn-primary">Add Entry</button>
                            <button type="submit" class="btn btn-success">Submit Voucher</button>
                        </div>

                        <!-- Entries Table -->
                        <div class="col-lg-12">
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
                                        <th>PO No</th>
                                        <th>Total</th>
                                        <th>Freight</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody id="entriesBody">
                                    <!-- Entries will appear here -->
                                </tbody>
                                  <tfoot>
            <tr>
                <td colspan="8" style="text-align: right;"><strong>Grand Total:</strong></td>
                <td id="grandTotal">0</td>
                <td></td>
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




<!-- Include jQuery (required for Select2) -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Include Select2 JS -->
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>


<script>

$(document).ready(function () {
    // Initialize Select2 properly
    if ($.fn.select2) {
        $('#entryParty').select2();
    } else {
        console.error("Select2 is not loaded properly.");
    }

    // Listen for changes in Select2 dropdown
    $('#entryParty').on('change', function () {
        let partyId = $(this).val(); // Get selected party ID
        console.log("Selected Party ID:", partyId); // Print in console

        let productDropdown = $('#productName');
        productDropdown.html('<option value="">Select</option>'); // Clear existing options

        if (partyId) {
            fetch(`/printingcell/get-products/${partyId}`)
                .then(response => response.json())
                .then(data => {
                    console.log("Fetched Products:", data); // Print fetched products in console
                    data.forEach(product => {
                        productDropdown.append(new Option(product.prod_name, product.id));
                    });
                })
                .catch(error => console.error('Error fetching products:', error));
        }
    });

    // Check if select change is being detected
    $('#entryParty').trigger('change'); 
});


document.addEventListener('DOMContentLoaded', function() {
    const entriesTable = document.getElementById('entriesBody');
    const addEntryButton = document.getElementById('addEntry');
    const entryDateInput = document.getElementById('entryDate');
    const boxInput = document.getElementById('box');
    const freightInput = document.getElementById('freight');
    const packingInput = document.getElementById('packing');
    const po_noInput = document.getElementById('po_no');
    let invoiceCounter = 1;

    // Automatically set the date to today
    entryDateInput.value = new Date().toISOString().split('T')[0];

    // Function to update grand totals
    function updateGrandTotals() {
        let grandTotal = 0;
        let totalFreight = 0;
        
        const rows = entriesTable.querySelectorAll('tr');
        rows.forEach(row => {
            const totalCell = row.cells[8];
            const freightCell = row.cells[9];
            
            grandTotal += parseFloat(totalCell.textContent) || 0;
            totalFreight += parseFloat(freightCell.textContent) || 0;
        });
        
        document.getElementById('grandTotal').textContent = grandTotal.toFixed(2);
        document.getElementById('totalAmount').value = grandTotal;
    }

    // Function to renumber rows
    function renumberRows() {
        const rows = entriesTable.querySelectorAll('tr');
        rows.forEach((row, index) => {
            row.cells[0].textContent = index + 1;
            
            const hiddenInputs = row.querySelectorAll('input[type="hidden"]');
            hiddenInputs.forEach(input => {
                if (input.name.includes('[v_no]') || input.name.includes('[sequence_no]')) {
                    input.value = index + 1;
                }
            });
        });
        
        invoiceCounter = rows.length + 1;
    }

    // Event delegation for delete buttons
    entriesTable.addEventListener('click', function(e) {
        if (e.target.classList.contains('delete-entry')) {
            const row = e.target.closest('tr');
            if (row) {
                entriesTable.removeChild(row);
                updateGrandTotals();
                renumberRows();
                
                if (entriesTable.children.length === 0) {
                    entryDateInput.disabled = false;
                }
            }
        }
    });

    addEntryButton.addEventListener('click', function() {
        const date = entryDateInput.value;
        const box = parseFloat(boxInput.value);
        const freight = parseFloat(freightInput.value) || 0;
        const packing = parseFloat(packingInput.value);
        const po_no = po_noInput.value;
        const prepared = document.getElementById('preparedBy').value;
        const item = document.getElementById('itemTitle');
        const product = document.getElementById('productName');
        const productText = product.options[product.selectedIndex]?.text || '';
        const itemText = item.options[item.selectedIndex]?.text || '';
        const itemValue = item.value;
        const supplier = document.getElementById('entryParty');
        const supplierText = supplier.options[supplier.selectedIndex]?.text || '';
        const supplierValue = supplier.value;

        const total = box * packing;
        
        if (!product.value || !supplier.value || !item.value) {
            alert('Please select a Product, Party, and Item Type.');
            return;
        }
    
        if (!date || isNaN(box) || isNaN(packing) || isNaN(total)) {
            alert('Please fill all fields with valid data.');
            return;
        }

        const newRow = document.createElement('tr');
        newRow.innerHTML = `
            <td>${invoiceCounter}</td>
            <td>${date}</td>
            <td>${productText}</td>
            <td>${supplierText}</td>
            <td>${itemText}</td>
            <td>${box}</td>
            <td>${packing}</td>
            <td>${po_no}</td>
            <td>${total.toFixed(2)}</td>
            <td>${freight.toFixed(2)}</td>
            <td>
                <button type="button" class="btn btn-danger delete-entry">Delete</button>
                <input type="hidden" name="entries[${Date.now()}][date]" value="${date}">
                <input type="hidden" name="entries[${Date.now()}][v_no]" value="${invoiceCounter}">
                <input type="hidden" name="entries[${Date.now()}][sequence_no]" value="${invoiceCounter}">
                <input type="hidden" name="entries[${Date.now()}][supplier]" value="${supplierValue}">
                <input type="hidden" name="entries[${Date.now()}][prepared_by]" value="${prepared}">
                <input type="hidden" name="entries[${Date.now()}][product]" value="${product.value}">
                <input type="hidden" name="entries[${Date.now()}][item]" value="${itemValue}">
                <input type="hidden" name="entries[${Date.now()}][box]" value="${box}">
                <input type="hidden" name="entries[${Date.now()}][packing]" value="${packing}">
                <input type="hidden" name="entries[${Date.now()}][po_no]" value="${po_no}">
                <input type="hidden" name="entries[${Date.now()}][freight]" value="${freight}">
                <input type="hidden" name="entries[${Date.now()}][total]" value="${total}">
            </td>
        `;

        entriesTable.appendChild(newRow);
        invoiceCounter++;

        boxInput.value = '';
        packingInput.value = '';
        po_noInput.value = '';
        freightInput.value = '0';
        
        updateGrandTotals();
    });
});
</script>

@endsection
