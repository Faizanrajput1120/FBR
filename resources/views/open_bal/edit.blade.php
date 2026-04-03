@extends('layouts.app')

@section('content')
<div class="container-fluid">

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <h4 class="page-title">Edit Opening Balance</h4>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    <form action="{{ route('open_bal.update', $voucher->first()->v_no) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label for="entryDate" class="form-label">Opening Date</label>
                            <input type="date" id="entryDate" class="form-control" name="date" required>
                        </div>
                        <input type="hidden" id="invoice_type" class="form-control" name="v_type" value="OB" required readonly>
                         <input type="hidden"  id="descriptionValue" name="description" >


                        <!-- Account Title Dropdown -->
                        <div class="mb-3">
                            <label for="accountTitle" class="form-label">Account Title</label>
                            <select id="accountTitle" class="form-control" data-toggle="select2" name="account_id">
                                <option value="">Select Account</option>
                                @foreach ($accounts as $account)
                                    <option value="{{ $account->id }}">{{ $account->title }}</option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Debit and Credit Amounts -->
                        <div class="mb-3">
                            <label for="debitAmount" class="form-label">Debit Amount</label>
                            <input type="number" id="debitAmount" class="form-control" name="debit" placeholder="Enter Debit">
                        </div>
                        <div class="mb-3">
                            <label for="creditAmount" class="form-label">Credit Amount</label>
                            <input type="number" id="creditAmount" class="form-control" name="credit" placeholder="Enter Credit">
                        </div>
<div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea id="description" class="form-control" name="description[]"></textarea>
                        </div>
                        
                        <!-- Add Entry Button -->
                        <button type="button" id="addEntry" class="btn btn-primary">Add Entry</button>
                        <button type="submit" id="submitVoucher" class="btn btn-success">Submit Voucher</button>

                        <!-- Entry Table -->
                        <table class="table table-bordered mt-4">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Date</th>
                                    <th>Account Title</th>
                                    <th>Debit</th>
                                    <th>Credit</th>
                                    <th>Description</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody id="entryTableBody">
                                @php
                                    $totalDebit = 0;
                                    $totalCredit = 0;
                                @endphp
                                @foreach ($voucher as $entry)
                                <tr id="entryRow{{ $entry->id }}">
                                    <td>{{ $loop->iteration }}</td>
                                    <td>
                                        {{ $entry->date }}
                                        <input type="hidden" name="entry_date[]" value="{{ $entry->date }}">
                                    </td>
                                    <td>
                                        {{ $entry->accounts->title }}
                                        <input type="hidden" name="entry_account_title[]" value="{{ $entry->accounts->id }}">
                                    </td>
                                    <td>
                                        <input type="hidden" name="entry_debit[]" class="entry-debit" value="{{ $entry->debit }}">
                                        {{ $entry->debit }}
                                    </td>
                                    <td>
                                        <input type="hidden" name="entry_credit[]" class="entry-credit" value="{{ $entry->credit }}">
                                        {{ $entry->credit }}
                                    </td>
                                    <td>
                                        <input type="hidden" name="description[]" class="description" value="{{ $entry->description }}">
                                        {{ $entry->description }}
                                    </td>
                                    <td>
                                        <!-- Delete Entry Button -->
                                        <a href="{{ route('open_bal.delete', $entry->id) }}"
                                            class="btn btn-danger btn-sm"
                                            >Delete</a>
                                    </td>
                                </tr>
                                @php
                                    $totalDebit += $entry->debit;
                                    $totalCredit += $entry->credit;
                                @endphp
                                @endforeach
                            </tbody>
                        </table>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Total Debit:</label>
                                <input type="text" id="debitTotal" class="form-control" value="{{ $totalDebit }}" readonly>
                            </div>
                            <div class="col-md-6">
                                <label>Total Credit:</label>
                                <input type="text" id="creditTotal" class="form-control" value="{{ $totalCredit }}" readonly>
                            </div>
                        </div>

                    </form>

                </div> <!-- end card-body -->
            </div> <!-- end card -->
        </div><!-- end col -->
    </div><!-- end row -->

</div>
<script>
    const today = new Date().toISOString().split('T')[0];
    document.getElementById('entryDate').value = today;

    document.addEventListener('DOMContentLoaded', function() {
        let entryTableBody = document.getElementById('entryTableBody');
        let debitTotalField = document.getElementById('debitTotal');
        let creditTotalField = document.getElementById('creditTotal');
        let accountTitle = document.getElementById('accountTitle');
        let debitAmountField = document.getElementById('debitAmount');
        let creditAmountField = document.getElementById('creditAmount');
        let entryDate = document.getElementById('entryDate');
        let addEntryButton = document.getElementById('addEntry');
        let submitVoucher = document.getElementById('submitVoucher');

        let entryCount = entryTableBody.children.length; // Initialize with the current count of entries

        // Function to calculate the total amounts for debit and credit
        function calculateTotal() {
            let debitTotal = 0;
            let creditTotal = 0;

            // Sum up existing entries from the table
            document.querySelectorAll('#entryTableBody tr').forEach(function(row) {
                let debitValue = parseFloat(row.querySelector('.entry-debit').value) || 0;
                let creditValue = parseFloat(row.querySelector('.entry-credit').value) || 0;
                debitTotal += debitValue;
                creditTotal += creditValue;
            });

            // Update totals displayed on the form
            debitTotalField.value = debitTotal;
            creditTotalField.value = creditTotal;
        }

        // Event listener to add a new entry to the table
       addEntryButton.addEventListener('click', function() {
    let selectedOption = accountTitle.options[accountTitle.selectedIndex];
    let accountTitleValue = selectedOption.text; // Account title text
    let accountIdValue = selectedOption.value; // Account ID

    let debitAmount = parseFloat(debitAmountField.value);
    let creditAmount = parseFloat(creditAmountField.value);
    let entryDateValue = entryDate.value; // Get the value of the entry date
    let descriptionValue = document.getElementById('description').value; // Get the description

    // Check for validation
    if (!entryDateValue) {
        alert('Please select a date.');
        return;
    }
    if (!accountTitle.value) {
        alert('Please select an Account Title.');
        return;
    }
    if (!descriptionValue) {
        alert('Please enter a description.');
        return;
    }
    if (!accountTitleValue || (debitAmount <= 0 && creditAmount <= 0)) {
        alert('Please fill all fields and enter a valid amount for debit or credit.');
        return;
    }

    // Ensure at least one of debit or credit is provided
    if (isNaN(debitAmount) && isNaN(creditAmount)) {
        alert('Please enter a valid amount for either Debit or Credit.');
        return;
    }

    // Only one of debit or credit should have a value
    if (debitAmount > 0 && creditAmount > 0) {
        alert('You can only enter an amount in either Debit or Credit, not both.');
        return;
    }

    // Add new entry row for debit or credit
    entryCount++;
    let debitValue = debitAmount > 0 ? debitAmount : '';
    let creditValue = creditAmount > 0 ? creditAmount : '';

    let html = `
    <tr id="entryRow${entryCount}">
        <td>${entryCount}</td>
        <td>
            <input type="hidden" name="entry_date[]" value="${entryDateValue}">
            <span>${entryDateValue}</span>
        </td>
        <td>
            <input type="hidden" name="entry_account_title[]" value="${accountIdValue}">
            <span>${accountTitleValue}</span>
        </td>
        <td>
            <input type="hidden" name="entry_debit[]" class="entry-debit" value="${debitValue}">
            <span>${debitValue}</span>
        </td>
        <td>
            <input type="hidden" name="entry_credit[]" class="entry-credit" value="${creditValue}">
            <span>${creditValue}</span>
        </td>
        <td>
            <input type="hidden" name="description[]" class="description" value="${descriptionValue}">
            <span>${descriptionValue}</span>
        </td>
        
             <td>
                        <button type="button" class="btn btn-danger btn-sm" onclick="deleteRow(this)">Delete</button>
                    </td>
     
    </tr>
`;


    entryTableBody.insertAdjacentHTML('beforeend', html);

    // Disable the date field after the first entry is added
    if (entryCount === 1) {
        entryDate.disabled = true;
    }

    debitAmountField.value = '';
    creditAmountField.value = '';
    document.getElementById('description').value = ''; // Clear description field
    debitAmountField.disabled = false;
    creditAmountField.disabled = false;

    calculateTotal();
});


        // Function to delete a row from the table
        window.deleteRow = function(button) {
            let row = button.closest('tr');
            entryTableBody.removeChild(row);
            entryCount--; // Decrement entryCount
            calculateTotal(); // Recalculate totals
        };

        calculateTotal(); // Initial total calculation on load
    });
</script>
@endsection
