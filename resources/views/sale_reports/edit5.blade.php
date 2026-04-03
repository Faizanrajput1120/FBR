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
                            <li class="breadcrumb-item active">Edit Confectionery</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Edit Confectionery</h4>
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
                                        action="{{ route('confectionery.update', $voucher->first()->v_no) }}"
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
                                                    <input type="date" id="entryDate" class="form-control" name="date">
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
                                                        <th>Account Title</th>
                                                        <th>Item Title</th>
                                                        <th>Box</th>
                                                        <th>Pack Qty</th>
                                                        <th>PO No</th>
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
                                                                <td>{{ $trndtl->confectionerydetails->products->prod_name ?? 'N/A' }}
                                                                    <input type="hidden" name="product[]"
                                                                        value="{{ $trndtl->confectionerydetails->products->prod_name ?? 'N/A' }}">
                                                                </td>
                                                                <!-- Show trndtl date -->
                                                                <td>{{ $trndtl->accounts->title ?? 'N/A' }}
                                                                    <input type="hidden" name="supplier[]"
                                                                        value="{{ $trndtl->accounts->title ?? 'N/A' }}">
                                                                </td>
                                                                <!-- Account title -->
                                                                <td>{{ $trndtl->confectionerydetails->itemType->type_title }}
                                                                    <input type="hidden" name="itemType[]"
                                                                        value="{{ $trndtl->confectionerydetails->itemType->type_title }}">
                                                                </td>
                                                                <td>{{ $trndtl->confectionerydetails->box }}
                                                                    <input type="hidden" name="box[]"
                                                                        value="{{ $trndtl->confectionerydetails->box }}">
                                                                </td>
                                                                <td>{{ $trndtl->confectionerydetails->pack_qty }}
                                                                    <input type="hidden" name="packing[]"
                                                                        value="{{ $trndtl->confectionerydetails->pack_qty }}">
                                                                </td>
                                                                <td>{{ $trndtl->confectionerydetails->po_no }}
                                                                    <input type="hidden" name="batchNo[]"
                                                                        value="{{ $trndtl->confectionerydetails->po_no }}">
                                                                </td>
                                                                <td>{{ $trndtl->confectionerydetails->total }}
                                                                    <input type="hidden" name="total[]"
                                                                        value="{{ $trndtl->confectionerydetails->total }}">
                                                                </td>
                                                                <td>{{ $trndtl->confectionerydetails->freight }}
                                                                    <input type="hidden" name="freight[]"
                                                                        value="{{ $trndtl->confectionerydetails->freight }}">
                                                                </td>
                                                                <td>
                                                                    <!-- Delete Entry Button -->
                                                                    <a href="{{ route('confectionery.destroy', $trndtl->id) }}"
                                                                        class="btn btn-danger btn-sm"
                                                                        onclick="event.preventDefault();
                                                                            if(confirm('Are you sure you want to delete this transaction?')) {
                                                                                window.location.href='{{ route('confectionery.destroy', $trndtl->id) }}';
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
    const po_noInput = document.getElementById('po_no');
    
    // Set date to today by default
    if (entryDateInput) {
        entryDateInput.value = new Date().toISOString().split('T')[0];
    }

    // Initialize variables
    let invoiceCounter = 1;
    let availableInvoiceNumbers = new Set();

    // Function to safely parse numbers from table cells
    function parseCellValue(cell) {
        if (!cell) return 0;
        const value = parseFloat(cell.textContent.replace(/[^\d.-]/g, ''));
        return isNaN(value) ? 0 : value;
    }

    // Function to update grand totals
    function updateGrandTotals() {
        let grandTotal = 0;
        let totalFreight = 0;
        
        const rows = entriesTable.querySelectorAll('tr');
        rows.forEach(row => {
            const cells = row.cells;
            if (cells.length >= 10) { // Ensure row has enough cells
                grandTotal += parseCellValue(cells[8]); // Total column
                totalFreight += parseCellValue(cells[9]); // Freight column
            }
        });
        
        // Update the footer display
        const grandTotalElement = document.getElementById('grandTotal');
        const totalFreightElement = document.getElementById('totalFreight');
        if (grandTotalElement) grandTotalElement.textContent = grandTotal.toFixed(2);
        if (totalFreightElement) totalFreightElement.textContent = totalFreight.toFixed(2);
        
        // Update hidden totalAmount input if it exists
        const totalAmountInput = document.getElementById('totalAmount');
        if (totalAmountInput) {
            totalAmountInput.value = grandTotal.toFixed(2);
        }
    }

    // Initialize invoice numbers from existing entries
    function initializeInvoiceNumbers() {
        const existingRows = entriesTable.querySelectorAll('tr');
        if (existingRows.length === 0) return;

        const existingNumbers = Array.from(existingRows).map(row => {
            const firstCell = row.cells[0];
            return firstCell ? parseInt(firstCell.textContent) : NaN;
        }).filter(num => !isNaN(num));

        if (existingNumbers.length > 0) {
            invoiceCounter = Math.max(...existingNumbers) + 1;
            
            // Find gaps in numbering for reuse
            const maxNumber = Math.max(...existingNumbers);
            const allNumbers = new Set(existingNumbers);
            for (let i = 1; i < maxNumber; i++) {
                if (!allNumbers.has(i)) {
                    availableInvoiceNumbers.add(i);
                }
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
                    const firstCell = row.cells[0];
                    if (firstCell) {
                        const invoiceNumber = parseInt(firstCell.textContent);
                        if (!isNaN(invoiceNumber)) {
                            availableInvoiceNumbers.add(invoiceNumber);
                        }
                    }
                    entriesTable.removeChild(row);
                    updateGrandTotals();
                }
            });
        });
    }

    // Main add entry function
    function addNewEntry() {
        if (!boxInput || !packingInput || !freightInput || !po_noInput) return;

        const date = entryDateInput ? entryDateInput.value : '';
        const box = parseFloat(boxInput.value);
        const freight = parseFloat(freightInput.value) || 0;
        const packing = parseFloat(packingInput.value);
        const po_no = po_noInput.value;

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

        const total = box * packing;

        if (!date || isNaN(box) || isNaN(packing) || isNaN(total)) {
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
            <td>${po_no}</td>
            <td>${total.toFixed(2)}</td>
            <td>${freight.toFixed(2)}</td>
            <td>
                <button type="button" class="btn btn-danger delete-entry">Delete</button>
                <input type="hidden" name="entries[${Date.now()}][date]" value="${date}">
                <input type="hidden" name="entries[${Date.now()}][v_no]" value="${invoiceNumberToUse}">
                <input type="hidden" name="entries[${Date.now()}][sequence_no]" value="${invoiceCounter}">
                <input type="hidden" name="entries[${Date.now()}][supplier]" value="${supplierValue}">
                <input type="hidden" name="entries[${Date.now()}][prepared_by]" value="${prepared}">
                <input type="hidden" name="entries[${Date.now()}][item]" value="${itemValue}">
                <input type="hidden" name="entries[${Date.now()}][product]" value="${product.value}">
                <input type="hidden" name="entries[${Date.now()}][box]" value="${box}">
                <input type="hidden" name="entries[${Date.now()}][freight]" value="${freight}">
                <input type="hidden" name="entries[${Date.now()}][packing]" value="${packing}">
                <input type="hidden" name="entries[${Date.now()}][po_no]" value="${po_no}">
                <input type="hidden" name="entries[${Date.now()}][total]" value="${total}">
            </td>
        `;

        if (entriesTable) {
            entriesTable.appendChild(newRow);
            
            // Add delete functionality
            newRow.querySelector('.delete-entry').addEventListener('click', function() {
                entriesTable.removeChild(newRow);
                availableInvoiceNumbers.add(invoiceNumberToUse);
                updateGrandTotals();
            });
        }

        // Update totals and reset form
        updateGrandTotals();
        boxInput.value = '';
        packingInput.value = '';
        po_noInput.value = '';
        freightInput.value = '0';
    }

    // Initialize the page
    if (entriesTable) {
        initializeInvoiceNumbers();
        initializeExistingRows();
        updateGrandTotals();
    }

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
