@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <!-- Start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Hyper</a></li>
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                            <li class="breadcrumb-item active">Edit Purchase Invoice</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Edit Pharmaceutical</h4>
                </div>
            </div>
        </div>
        <!-- End page title -->

        <!-- Display any error messages -->
        @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

        <!-- Example for displaying purchase details -->
        {{-- <h1>Edit Purchase - Voucher No: {{ $voucherNo }}</h1> --}}

        {{-- <p>Purchase Detail: {{ $purchaseDetail->some_field }}</p> --}}

        <!-- Display TrnDtl records -->
        {{-- @foreach ($trndtl as $transaction)
<p>Transaction No: {{ $transaction->id }} - {{ $transaction->some_field }}</p>
@endforeach --}}

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="tab-content">
                            <div class="tab-pane show active" id="input-types-preview">
                                <div class="row">
                                    <form id="voucherForm"
                                        action="{{ route('delivery_challan.update', $voucher->first()->v_no) }}"
                                        method="POST">
                                        @csrf
                                        @method('PUT')
                                        <div class="col-6">
                                            <input type="hidden" id="invoice_type" class="form-control" name="v_type"
                                                value="PIN" readonly>
                                            <input type="hidden" id="invoice" class="form-control" name="invoice_number">
                                            <input type="hidden" id="totalAmount" name="total_amount">
                                            <input type="hidden" id="totalWeight" name="total_weight">
                                            {{-- <input type="hidden" id="entryCash" class="form-control" name="cash"
                                                value="{{ $purchaseAccount ? $purchaseAccount->id : '' }}"> --}}
                                                <div class="mb-3">
                                                    <label for="entryDate" class="form-label">Date</label>
                                                    <input type="date" id="entryDate" class="form-control" name="date" >
                                                </div>
                                                <div class="mb-3">
                                                    <label for="preparedBy" class="form-label">Prepared By</label>
                                                    <input type="text" id="preparedBy" class="form-control"
                                                        name="prepared_by" value="{{$loggedInUser->name}}" readonly>
                                                </div>
                                                <!-- Product Name -->
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
                                                    <label for="itemTitle" class="form-label">Item Title</label>
                                                    <select name="item" class="form-control select2" data-toggle="select2" id="itemTitle">
                                                        <option value="">Select</option>
                                                        @foreach ($items as $item)
                                                            <option value="{{ $item->id }}">{{ $item->type_title ?? 'N/A'}}</option>
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
                                <label for="batchNo" class="form-label">Batch No</label>
                                <input type="text" id="batchNo" class="form-control" name="batchNo">
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
                                                        <th>Account Title</th>
                                                        <th>Item Title</th>
                                                        <th>Box</th>
                                                        <th>Pack Qty</th>
                                                        <th>Batch No</th>
                                                        <th>Total</th>
                                                        <th>Freight</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody id="entriesBody">
                                                    @php
                                                        $totalEntries = 0; // Initialize a counter for rows
                                                    @endphp

                                                    {{-- @foreach ($purchaseDetails as $purchase) --}}
                                                    {{-- @php
                                                            // Get all related trndtl records for this purchase detail by matching voucher number (v_no)
                                                            $relatedTrndtls = $trndtls->where('v_no', $purchase->vorcher_no);
                                                        @endphp --}}

                                                    @if ($voucher->isNotEmpty())
                                                        @foreach ($voucher as $trndtl)
                                                            <tr>
                                                                <td>{{ ++$totalEntries }}</td>
                                                                <td>{{ $trndtl->date ?? 'N/A' }}
                                                                    <input type="hidden" name="date[]"
                                                                        value="{{ $trndtl->date }}">
                                                                </td>
                                                                <td>{{ $trndtl->deliverydetails->products->prod_name ?? 'N/A'}}
                                                                    <input type="hidden" name="product[]"
                                                                        value="{{ $trndtl->deliverydetails->products->prod_name ?? 'N/A'}}">
                                                                </td>
                                                                <!-- Show trndtl date -->
                                                                <td>{{ $trndtl->accounts->title ?? 'N/A' }}
                                                                    <input type="hidden" name="supplier[]"
                                                                        value="{{ $trndtl->accounts->title  ?? 'N/A' }}">
                                                                </td>
                                                                <!-- Account title -->
                                                               <td>
    {{ $trndtl->deliverydetails?->itemType?->type_title ?? 'N/A' }}
    <input type="hidden" name="itemType[]" value="{{ $trndtl->deliverydetails?->itemType?->type_title ?? 'N/A' }}">
</td>

                                                                <td>{{ $trndtl->deliverydetails->box }}
                                                                    <input type="hidden" name="box[]"
                                                                        value="{{ $trndtl->deliverydetails->box  ?? 'N/A'}}">
                                                                </td>
                                                                <td>{{ $trndtl->deliverydetails->pack_qty }}
                                                                    <input type="hidden" name="packing[]"
                                                                        value="{{ $trndtl->deliverydetails->pack_qty  ?? 'N/A'}}">
                                                                </td>
                                                                <td>{{ $trndtl->deliverydetails->batch_no }}
                                                                    <input type="hidden" name="batchNo[]"
                                                                        value="{{ $trndtl->deliverydetails->batch_no ?? 'N/A' }}">
                                                                </td>
                                                                <td>{{ $trndtl->deliverydetails->total }}
                                                                    <input type="hidden" name="total[]"
                                                                        value="{{ $trndtl->deliverydetails->total  ?? 'N/A'}}">
                                                                </td>
                                                                <td>{{ $trndtl->deliverydetails->freight }}
                                                                    <input type="hidden" name="freight[]"
                                                                        value="{{ $trndtl->deliverydetails->freight  ?? 'N/A'}}">
                                                                </td>
                                                                <td>
                                                                    <!-- Delete Entry Button -->
                                                                    <a href="{{ route('delivery_challan.destroy', $trndtl->id) }}"
                                                                        class="btn btn-danger btn-sm"
                                                                        onclick="event.preventDefault();
                                                                            if(confirm('Are you sure you want to delete this transaction?')) {
                                                                                window.location.href='{{ route('delivery_challan.destroy', $trndtl->id) }}';
                                                                            }">Delete</a>
                                                                </td>
                                                            </tr>
                                                        @endforeach
                                                    @else
                                                        <tr>
                                                            <td colspan="13">No transaction details available for this
                                                                purchase.</td>
                                                        </tr>
                                                    @endif
                                                    {{-- @endforeach --}}
                                                </tbody>
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
                                <!-- End row-->
                            </div> <!-- End preview-->
                        </div> <!-- End tab-content-->
                    </div> <!-- End card-body -->
                </div> <!-- End card -->
            </div><!-- End col -->
        </div><!-- End row -->
    </div> <!-- End container -->
        <!-- jQuery (Required for Select2) -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Select2 JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
    const entriesTable = document.getElementById('entriesBody');
    const addEntryButton = document.getElementById('addEntry');
    const entryDateInput = document.getElementById('entryDate');
    const boxInput = document.getElementById('box');
    const freightInput = document.getElementById('freight');
    const packingInput = document.getElementById('packing');
    const batchNoInput = document.getElementById('batchNo');
    
    // Initialize variables
    let invoiceCounter = 1;
    let availableInvoiceNumbers = new Set();
    let firstEntryAdded = entriesTable.children.length > 0;

    // Set date to today by default
    if (entryDateInput) {
        entryDateInput.value = new Date().toISOString().split('T')[0];
    }

    // Function to get highest invoice number from existing entries
    function getHighestInvoiceNumber() {
        const existingNumbers = [...entriesTable.querySelectorAll('tr td:first-child')]
            .map(td => parseInt(td.textContent))
            .filter(num => !isNaN(num));
        return existingNumbers.length > 0 ? Math.max(...existingNumbers) : 0;
    }

    // Function to update grand totals
    function updateGrandTotals() {
        let grandTotal = 0;
        let totalFreight = 0;
        
        const rows = entriesTable.querySelectorAll('tr');
        rows.forEach(row => {
            const cells = row.cells;
            if (cells.length >= 10) { // Ensure row has enough cells
                grandTotal += parseInt(cells[8].textContent) || 0; // Total column
                totalFreight += parseInt(cells[9].textContent) || 0; // Freight column
            }
        });
        
        // Update the footer display
        const grandTotalElement = document.getElementById('grandTotal');
        const totalFreightElement = document.getElementById('totalFreight');
        if (grandTotalElement) grandTotalElement.textContent = grandTotal;
        if (totalFreightElement) totalFreightElement.textContent = totalFreight;
        
        // Update hidden totalAmount input if it exists
        const totalAmountInput = document.getElementById('totalAmount');
        if (totalAmountInput) {
            totalAmountInput.value = grandTotal;
        }
    }

    // Initialize invoice numbers from existing entries
    function initializeInvoiceNumbers() {
        invoiceCounter = getHighestInvoiceNumber() + 1;
        
        // Find gaps in numbering for reuse
        const existingNumbers = [...entriesTable.querySelectorAll('tr td:first-child')]
            .map(td => parseInt(td.textContent))
            .filter(num => !isNaN(num));
        
        const maxNumber = Math.max(...existingNumbers, 0);
        for (let i = 1; i < maxNumber; i++) {
            if (!existingNumbers.includes(i)) {
                availableInvoiceNumbers.add(i);
            }
        }
    }

    // Add delete functionality to existing rows
    function initializeExistingRows() {
        const deleteButtons = entriesTable.querySelectorAll('.delete-entry');
        deleteButtons.forEach(button => {
            button.addEventListener('click', function() {
                const row = this.closest('tr');
                if (row) {
                    const invoiceNumber = parseInt(row.cells[0].textContent);
                    if (!isNaN(invoiceNumber)) {
                        availableInvoiceNumbers.add(invoiceNumber);
                    }
                    entriesTable.removeChild(row);
                    updateGrandTotals();
                    
                    if (entriesTable.children.length === 0) {
                        if (entryDateInput) entryDateInput.disabled = false;
                        firstEntryAdded = false;
                    }
                }
            });
        });
    }

    // Main function to add new entry
    function addNewEntry() {
        const date = entryDateInput.value;
        const box = parseFloat(boxInput.value);
        const freight = parseFloat(freightInput.value) || 0;
        const packing = parseFloat(packingInput.value);
        const batchNo = batchNoInput.value;
        const prepared = document.getElementById('preparedBy')?.value || '';
        const item = document.getElementById('itemTitle');
        const supplier = document.getElementById('entryParty');
        const product = document.getElementById('productName');

        if (!product || !supplier || !item) {
            alert('Required fields are missing.');
            return;
        }

        const itemText = item.options[item.selectedIndex]?.text || '';
        const itemValue = item.value;
        const supplierText = supplier.options[supplier.selectedIndex]?.text || '';
        const supplierValue = supplier.value;
        const productText = product.options[product.selectedIndex]?.text || '';

        const total = Math.round(box * packing);

        if (!date || isNaN(box) || isNaN(packing) || !batchNo) {
            alert('Please fill all fields with valid data.');
            return;
        }

        // Determine invoice number to use
        let invoiceNumberToUse;
        if (availableInvoiceNumbers.size > 0) {
            invoiceNumberToUse = Math.min(...availableInvoiceNumbers);
            availableInvoiceNumbers.delete(invoiceNumberToUse);
        } else {
            invoiceNumberToUse = invoiceCounter++;
        }

        // Create new row
        const newRow = document.createElement('tr');
        newRow.innerHTML = `
            <td>${invoiceNumberToUse}</td>
            <td>${date}</td>
            <td>${productText}</td>
            <td>${supplierText}</td>
            <td>${itemText}</td>
            <td>${box}</td>
            <td>${packing}</td>
            <td>${batchNo}</td>
            <td>${total}</td>
            <td>${freight}</td>
            <td>
                <button type="button" class="btn btn-danger delete-entry">Delete</button>
                <input type="hidden" name="entries[${Date.now()}][date]" value="${date}">
                <input type="hidden" name="entries[${Date.now()}][sr_no]" value="${invoiceNumberToUse}">
                <input type="hidden" name="entries[${Date.now()}][supplier]" value="${supplierValue}">
                <input type="hidden" name="entries[${Date.now()}][prepared_by]" value="${prepared}">
                <input type="hidden" name="entries[${Date.now()}][item]" value="${itemValue}">
                <input type="hidden" name="entries[${Date.now()}][product]" value="${product.value}">
                <input type="hidden" name="entries[${Date.now()}][box]" value="${box}">
                <input type="hidden" name="entries[${Date.now()}][packing]" value="${packing}">
                <input type="hidden" name="entries[${Date.now()}][freight]" value="${freight}">
                <input type="hidden" name="entries[${Date.now()}][batchNo]" value="${batchNo}">
                <input type="hidden" name="entries[${Date.now()}][total]" value="${total}">
            </td>
        `;

        entriesTable.appendChild(newRow);
        firstEntryAdded = true;

        // Update all totals
        updateGrandTotals();

        // Reset input fields
        boxInput.value = '';
        packingInput.value = '';
        batchNoInput.value = '';
        freightInput.value = '0';

        // Add delete functionality
        newRow.querySelector('.delete-entry').addEventListener('click', function() {
            entriesTable.removeChild(newRow);
            availableInvoiceNumbers.add(invoiceNumberToUse);
            updateGrandTotals();
            
            if (entriesTable.children.length === 0) {
                if (entryDateInput) entryDateInput.disabled = false;
                firstEntryAdded = false;
            }
        });
    }

    // Initialize the page
    initializeInvoiceNumbers();
    initializeExistingRows();
    updateGrandTotals();

    if (addEntryButton) {
        addEntryButton.addEventListener('click', addNewEntry);
    }
});
        
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
    </script>



@endsection
