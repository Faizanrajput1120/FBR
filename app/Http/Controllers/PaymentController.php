<?php

namespace App\Http\Controllers;

use App\Models\File;
use App\Models\TRNDTL;
use App\Models\Payment;
use App\Models\ErpParam;
use Illuminate\Http\Request;
use App\Models\AccountMaster;

use Illuminate\Support\Facades\Auth;
class PaymentController extends Controller
{
    public function index()
    {
        $user=Auth::user();
        $erpParams = ErpParam::with('level2')->where('c_id',$user->c_id)->get();

        // Initialize accountMasters as an empty collection to avoid errors
        $accountMasters = collect();

        // Check if there is at least one ERP Param and that cash_level is set
        if ($erpParams->isNotEmpty()) {
            // Get the cash_level from the first ERP Param
            $cashLevelId = $erpParams->first()->cash_level;
            // dd($cashLevelId);
            // Fetch AccountMasters associated with the cash_level
            $accountMasters = AccountMaster::where('level2_id', $cashLevelId)->where('c_id',$user->c_id)->get();
            // dd($accountMasters);
        }
        $accounts = AccountMaster::where('c_id',$user->c_id)->get();
        // dd($accounts);
        return view('payment.list', get_defined_vars());
    }

    public function store(Request $request)
    {
        $user=Auth::user();
        // Validate the overall request, including file upload validation
        $request->validate([
            'v_type' => 'required|string',
            'entries' => 'required|array',
            'entries.*.date' => 'required|date',
            'entries.*.cash' => 'required|string',
            'entries.*.account' => 'required|string',
            'entries.*.description' => 'required|string',
        ]);

        $filePath = null;
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $fileName = time() . '_' . preg_replace('/\s+/', '_', $file->getClientOriginalName());
            $filePath = $file->storeAs('uploads', $fileName, 'public');
        }

       

$lastEntry = TRNDTL::where('v_type',$request->v_type)->where('c_id',$user->c_id)
        ->orderBy('id', 'desc')
        ->first();

    // If there are no previous records for this v_type, start from 1
    if ($lastEntry && is_numeric($lastEntry->v_no)) {
        $lastInvoiceNumber = (int) $lastEntry->v_no; // Extract the numeric part of the v_no
    } else {
        $lastInvoiceNumber = 0; // Start from 0 if no previous invoice exists for this v_type
    }

    // Increment the invoice number by 1 for this batch of entries
    $newInvoiceNumber = $lastInvoiceNumber + 1;
        // Loop through each entry and assign the same v_no to all entries in this request
        foreach ($request->entries as $entry) {
            // Create the voucher entry and include file_id if a file was uploaded
            TRNDTL::create([
                'v_no' => $newInvoiceNumber, // All entries share the same v_no
                'v_type' => $request->v_type,
                'date' => $entry['date'],
                'cash_id' => $entry['cash'],
                'account_id' => $entry['account'],
                'description' => $entry['description'],
                'debit' => $entry['debit'],
                'credit' => '0',
                'preparedby' => auth()->user()->name,
                'status' => 'unofficial',
                'file_id' => $filePath,
                'c_id'=>$user->c_id
            ]);
        }

        // Redirect back with success message
        return redirect()
            ->route('payment.reports')
            ->with('success', '' . $request->v_type . '-' . $newInvoiceNumber . ' has been saved successfully.');
    }

    public function reports(Request $request)
    {
        $user=Auth::user();
        $startDate = $request->input('start_date');
        $endDate = $request->input('end_date');
        $status = $request->input('status'); // New status filter
        $v_no = $request->input('v_no');
    $account_id = $request->input('account_id');

        // Build the query with date range and status filters
        $query = TRNDTL::where('v_type', 'CPV')->with('accounts')->where('c_id',$user->c_id);

        if ($startDate && $endDate) {
            $query->whereBetween('date', [$startDate, $endDate]);
        }

        // Apply status filter if it is selected
        if ($status) {
            $query->where('status', $status);
        }
        if ($v_no) {
        $query->where('v_no', $v_no);
    }
    if ($account_id) {
        $query->where('account_id', $account_id);
    }

        // Sort by latest date and then by highest v_no
        $trndtls = $query
            ->orderBy('date', 'desc')
            ->orderBy('v_no', 'desc') // Added sorting by v_no
            ->get();

        $accountMasters = AccountMaster::where('c_id',$user->c_id)->get();
        $vNoList = TRNDTL::where('v_type', 'CPV')->pluck('v_no')->where('c_id',$user->c_id)->unique()->toArray();
     $accountIdList = TRNDTL::where('v_type', 'CPV')->pluck('account_id')->where('c_id',$user->c_id)->unique()->toArray();

        return view('cash_reports.index2', [
            'trndtls' => $trndtls,
            'startDate' => $startDate,
            'endDate' => $endDate,
            'status' => $status, // Pass status to view
            'accountMasters' => $accountMasters,
            'vNoList' => $vNoList,
        'accountIdList' => $accountIdList,
        ]);
    }

    // Show the edit form
    public function edit($v_no)
    {
        $user=Auth::user();
        // Find the voucher and its entries by voucher number (v_no)
        $voucher = TRNDTL::where('v_no', $v_no)
            ->where('v_type', 'CPV')
            ->where('c_id',$user->c_id)// Assuming CRV type for Cash Receipt Voucher
            ->get(); // Fetch all entries for this voucher
        // $voucher2 = TRNDTL::where('v_no', $v_no)
        // ->where('v_type', 'CRV') // Assuming CRV type for Cash Receipt Voucher
        // ->find(); // Fetch all entries for this voucher
        // dd($voucher);
        // Fetch account master data for dropdowns
        $accounts = AccountMaster::where('c_id',$user->c_id)->get();

        // Fetch ERP parameters to get account masters related to cash level
        $erpParams = ErpParam::with('level2')->where('c_id',$user->c_id)->get();

        $accountMasters = collect();

        if ($erpParams->isNotEmpty()) {
            $cashLevelId = $erpParams->first()->cash_level;
            $accountMasters = AccountMaster::where('level2_id', $cashLevelId)->where('c_id',$user->c_id)->get();
        }

        // Pass the voucher and entries to the view
        return view('cash_reports.edit2', compact('voucher', 'accountMasters', 'accounts'));
    }

    // Handle the update
    public function update(Request $request, $id)
    {
        $user=Auth::user();
           $entries = $request->input('entries', []);
        // Fetch the TRNDTL entry for the specified ID (if needed)
        $trndtl = TRNDTL::where('v_no', $id) // This is correct
            ->where('v_type', 'CPV') // Assuming CRV type for Cash Receipt Voucher
            ->firstOrFail(); // Use firstOrFail() here

        foreach ($entries as $entry) {
            $filePath = null;

            // Handle file upload for the entry, if provided
            if ($request->hasFile('file')) {
                // check for the 'file' key in the request
                $file = $request->file('file'); // get the uploaded file
                $fileName = time() . '_' . preg_replace('/\s+/', '_', $file->getClientOriginalName());
                $filePath = $file->storeAs('uploads', $fileName, 'public');
            }
            foreach ($request->entries as $entry) {
                TRNDTL::create([
                    'v_no' => $trndtl->v_no,
                    'v_type' => $request->v_type,
                    'date' => $entry['date'],
                    'cash_id' => $entry['cash'],
                    'account_id' => $entry['account'],
                    'description' => $entry['description'],
                    'debit' => $entry['debit'],
                    'credit' => '0',
                    'preparedby' => auth()->user()->name,
                    'status' => 'unofficial',
                    'file_id' => $filePath,
                    'c_id'=>$user->c_id
                ]);
            }
        }
       return redirect()
            ->route('payment.reports')
            ->with('success', ' CPV has been saved successfully.');
    }

    // Handle the delete
    public function destroy($id)
    {
        // Find the transaction by ID
        $trndtl = TRNDTL::where('v_type', 'CPV')
                    ->where('id', $id)
                    ->firstOrFail();

        // Delete the transaction
        $trndtl->delete();

        // Redirect back with a success message
        return redirect()->route('payment.reports')->with('success', 'Transaction deleted successfully!');
    }
    public function delete($id)
    {
        // Find the transaction by ID
        $trndtl = TRNDTL::where('v_type', 'CPV')
                    ->where('id', $id)
                    ->firstOrFail();

        // Delete the transaction
        $trndtl->delete();

        // Redirect back with a success message
        return redirect()->route('payment.reports')->with('success', 'Transaction deleted successfully!');
    }
}