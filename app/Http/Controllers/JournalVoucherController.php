<?php

namespace App\Http\Controllers;

use App\Models\TRNDTL;
use App\Models\ItemMaster;
use Illuminate\Http\Request;
use App\Models\AccountMaster;
use App\Models\JournalVoucher;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
class JournalVoucherController extends Controller
{
    public function index()
    {
        $user=Auth::user();
        $accounts = AccountMaster::where('c_id',$user->c_id)->get();

        return view('journal_voucher.list', get_defined_vars());
    }
    public function store(Request $request)
{
    $user=Auth::user();
    $request->validate([
            'entry_account_title_id.*' => 'required|exists:accounts,id',
            'entry_debit' => 'required|array',
            'entry_credit' => 'required|array',
            'entry_date' => 'required|array', 
            'description' => 'nullable|array', // Ensure it's an array
            
        ]);

    if ($request->total_debit != $request->total_credit) {
        return redirect()->back()->with('error', 'Total debit and credit amounts must be equal.');
    }

    $lastEntry = TRNDTL::where('v_type', 'JV')
        ->orderBy('id', 'desc')
        ->where('c_id',$user->c_id)
        ->first();

    $lastInvoiceNumber = $lastEntry && is_numeric($lastEntry->v_no) ? (int) $lastEntry->v_no : 0;

    $newInvoiceNumber = $lastInvoiceNumber + 1; // Move outside the loop

    foreach ($request->entry_account_title as $index => $accountTitle) {
    TRNDTL::create([
        'v_no' => $newInvoiceNumber,
        'account_id' => $accountTitle,
        'status' => 'unofficial',
        'debit' => $request->entry_debit[$index] ?? 0,
        'credit' => $request->entry_credit[$index] ?? 0,
        'date' => $request->entry_date[$index],
        'v_type' => 'JV',
        'preparedby' => auth()->user()->name,
        'description' =>$request->entry_description[$index] ?? '', // Ensure correct value
        'c_id'=>$user->c_id
    ]);
}


    return redirect()->route('journal_voucher.reports')->with('success', $request->v_type . '-' . $newInvoiceNumber . ' has been saved successfully.');
}

    public function reports(Request $request)
{
    $user=Auth::user();
    $startDate = $request->input('start_date');
    $endDate = $request->input('end_date');
    $status = $request->input('status'); // New status filter
    $v_no = $request->input('v_no');
    $description = $request->input('description'); // Changed from v_no to description
    

    // Build the query with date range and status filters
    $query = TRNDTL::where('v_type', 'JV')->with('accounts')->where('c_id',$user->c_id);

    if ($startDate && $endDate) {
        $query->whereBetween('date', [$startDate, $endDate]);
    }

    // Apply status filter if it is selected
    if ($status) {
        $query->where('status', $status);
    }

    // Apply v_no filter if provided
    if ($v_no) {
        $query->where('v_no', $v_no);
    }
if ($description) {
        $query->where('description', 'LIKE', "%$description%");
    }
    
    // Get results
    $trndtls = $query->orderBy('date', 'desc')  // Newest dates first
                ->orderBy('v_no', 'desc')   // Highest v_no on top
                ->orderBy('id', 'asc')      // Then by ID (ascending)
                ->get();

    // Corrected v_no list retrieval
    $vNoList = TRNDTL::where('v_type', 'JV')->pluck('v_no')->where('c_id',$user->c_id)->unique()->toArray();
     $descriptionList = TRNDTL::where('v_type', 'JV')->where('c_id',$user->c_id)->pluck('description')->unique()->toArray();

    // Get all account masters
    $accountMasters = AccountMaster::where('c_id',$user->c_id);

    return view('journal_voucher_reports.index', [
        'trndtls' => $trndtls,
        'startDate' => $startDate,
        'endDate' => $endDate,
        'status' => $status, // Pass status to view
        'accountMasters' => $accountMasters,
        'vNoList' => $vNoList, // Fixed extra space issue
         'descriptionList' => $descriptionList, // Changed from vNoList
    ]);
}


    // Show the edit form
    public function edit($v_no)
    {
        $user=Auth::user();
        $accounts = AccountMaster::where('c_id',$user->c_id)->get();

        
        $voucher = TRNDTL::where('v_no', $v_no)->where('v_type', 'JV')->where('c_id',$user->c_id)->get();

        // Pass the transaction, entries, and account masters to the view
        return view('journal_voucher_reports.edit', [
            'voucher' => $voucher,
            'accounts' => $accounts,
        ]);
    }

    public function update(Request $request, $v_no)
    {
        $user=Auth::user();
        // Validate the overall request
        $request->validate([
            'entry_account_title_id.*' => 'required|exists:accounts,id',
            'entry_debit' => 'required|array',
            'entry_credit' => 'required|array',
            'entry_date' => 'required|array', // Validate dates as an array
              'description' => 'nullable|array', // Ensure it's an array
        ]);

        // Ensure total debit and credit match
        if ($request->total_debit != $request->total_credit) {
            return redirect()->back()->with('error', 'Total debit and credit amounts must be equal.');
        }

        // Fetch existing TRNDTL records for the specified v_no
        $existingEntries = TRNDTL::where('v_no', $v_no)
            ->where('v_type', 'JV')
            ->where('c_id',$user->c_id)
            ->get();

        // Create an array of existing entry account IDs for easy lookup
        $existingAccountIds = $existingEntries->pluck('account_id')->toArray();

        // Loop through each entry to update or create new TRNDTL records
        foreach ($request->entry_account_title as $index => $accountTitle) {
            // Get the corresponding debit and credit entries
            $debitEntry = $request->entry_debit[$index] ?? 0;
            $creditEntry = $request->entry_credit[$index] ?? 0;
            $entryDate = $request->entry_date[$index]; 
             $descriptionEntry  = $request->description[$index] ?? '';

            // Check if this account title already exists in the existing entries
            if (in_array($accountTitle, $existingAccountIds)) {
                // Update existing entry
                $existingEntry = $existingEntries->where('account_id', $accountTitle)->where('c_id',$user->c_id)->first();
                if ($existingEntry) {
                    $existingEntry->update([
                        'debit' => $debitEntry,
                        'credit' => $creditEntry,
                        'date' => $entryDate, // Update the date in the database
                    ]);
                }
            } else {
                // Create a new entry if it does not exist
                TRNDTL::create([
                    'v_no' => $v_no, // Use the existing v_no
                    'account_id' => $accountTitle,
                    'debit' => $debitEntry,
                    'status' => 'unofficial',
                    'credit' => $creditEntry,
                    'date' => $entryDate, // Save the date in the database
                    'v_type' => 'JV',
                    'preparedby' => auth()->user()->name,
                    'description' => $descriptionEntry,
                    'c_id'=>$user->c_id
                ]);
            }
        }

        return redirect()
            ->route('journal_voucher.reports')
            ->with('success', '' . $request->v_type . '-' . $v_no . ' has been updated successfully.');
    }


  public function destroy($id)
    {
        // Find the transaction by ID
        $trndtl = TRNDTL::where('v_type', 'JV')
                    ->where('id', $id)
                    ->firstOrFail();

        // Delete the transaction
        $trndtl->delete();

        // Redirect back with a success message
        return redirect()->route('journal_voucher.reports')->with('success', 'The JV transaction has been deleted successfully!');
    }
    
     public function delete($id)
    {
        // Find the transaction by ID
        $trndtl = TRNDTL::where('v_type', 'JV')
                    ->where('id', $id)
                    ->firstOrFail();

        // Delete the transaction
        $trndtl->delete();

        // Redirect back with a success message
        return redirect()->route('journal_voucher.reports')->with('success', 'The JV transaction has been deleted successfully!');
    }
    
}
