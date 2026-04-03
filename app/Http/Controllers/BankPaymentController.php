<?php

namespace App\Http\Controllers;

use App\Models\File;
use App\Models\TRNDTL;
use App\Models\ErpParam;
use App\Models\BankPayment;
use Illuminate\Http\Request;
use App\Models\AccountMaster;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
class BankPaymentController extends Controller
{
    public function index()
    {
        $user=Auth::user();
        // $erp_params = ErpParam::all();
        $erpParams = ErpParam::with('level2')->where('c_id',$user->c_id)->get();

        // Initialize accountMasters as an empty collection to avoid errors
        $accountMasters = collect();

        // Check if there is at least one ERP Param and that cash_level is set
        if ($erpParams->isNotEmpty()) {
            // Get the cash_level from the first ERP Param
            $cashLevelId = $erpParams->first()->bank_level;

            // Fetch AccountMasters associated with the cash_level
            $accountMasters = AccountMaster::where('level2_id', $cashLevelId)->where('c_id',$user->c_id)->get();
        }
        $accounts = AccountMaster::where('c_id',$user->c_id)->get();
        return view('bank_payment.list',get_defined_vars());
    }
    public function store(Request $request)
{
    $user=Auth::user();
    $request->validate([
        'v_type' => 'required|string',
        'entries' => 'required|array',
        'entries.*.date' => 'required|date',
        'entries.*.cash' => 'required|string',
        'entries.*.account' => 'required|string',
        'entries.*.description' => 'required|string',
        'file' => 'nullable|file|mimes:jpg,jpeg,png,pdf|max:2048', // Add file validation
    ]);

    DB::beginTransaction();
    try {
        $lastInvoiceNumber = TRNDTL::where('v_type', 'BPV')->where('c_id',$user->c_id)->max('v_no');
        $newInvoiceNumber = $lastInvoiceNumber ? ((int) $lastInvoiceNumber + 1) : 1;

        // Handle file upload
        $filePath = null;
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $fileName = time() . '_' . preg_replace('/\s+/', '_', $file->getClientOriginalName());
            $file->move(public_path('storage/uploads'), $fileName); // Store in public/storage/uploads
            $filePath = 'uploads/' . $fileName; // Save the relative path
        }

        foreach ($request->entries as $index => $entry) {
            TRNDTL::create([
                'v_no' => $newInvoiceNumber,
                'v_type' => 'BPV',
                'date' => $entry['date'],
                'cash_id' => $entry['cash'],
                'account_id' => $entry['account'],
                'description' => $entry['description'],
                'debit' => $entry['debit'],
                'credit' => '0',
                 'preparedby' => auth()->user()->name,
                'status' => 'unofficial',
                'file_id' => $filePath, // Store the file path
                'c_id'=> $user->c_id
            ]);
        }

        DB::commit();
        return redirect()->route('bank_payment.reports')->with('success', 'BPV has been saved successfully.');
    
    } catch (\Exception $e) {
        DB::rollBack();
        return redirect()->back()->with('error', 'An error occurred while saving the voucher: ' . $e->getMessage());
    }
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
    $query = TRNDTL::where('v_type', 'BPV')->with('accounts');

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

    // Sorting by latest date first, then by highest voucher number (v_no)
  $trndtls = $query
    ->orderBy('date', 'desc')
    ->orderByRaw('CAST(v_no AS UNSIGNED) DESC') // Forces numeric sorting
    ->get();


    $accountMasters = AccountMaster::where('c_id',$user->c_id)->get();
       $vNoList = TRNDTL::where('v_type', 'BPV')->pluck('v_no')->where('c_id',$user->c_id)->unique()->toArray();
     $accountIdList = TRNDTL::where('v_type', 'BPV')->pluck('account_id')->where('c_id',$user->c_id)->unique()->toArray();

    return view('bank_reports.index', [
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
                ->where('v_type', 'BPV')
                ->where('c_id',$user->c_id)
                ->get(); 
    $accounts = AccountMaster::where('c_id',$user->c_id)->get();

    // Fetch ERP parameters to get account masters related to cash level
    $erpParams = ErpParam::with('level2')->where('c_id',$user->c_id)->get();

    $accountMasters = collect();

    if ($erpParams->isNotEmpty()) {
        $cashLevelId = $erpParams->first()->bank_level;
        $accountMasters = AccountMaster::where('level2_id', $cashLevelId)->where('c_id',$user->c_id)->get();
    }

    // Pass the voucher and entries to the view
    return view('bank_reports.edit', compact('voucher', 'accountMasters', 'accounts'));
}



// Handle the update
public function update(Request $request, $id)
{
     $entries = $request->input('entries', []);
    $user=Auth::user();
    // Handle file upload if present
    $fileRecord = null;
    if ($request->hasFile('files')) {
        $file = $request->file('files');
        $fileName = time() . '_' . $file->getClientOriginalName();
        $filePath = 'uploads/' . $fileName;
        $file->storeAs('uploads', $fileName, 'public');
        $fileRecord = File::create(['files' => $filePath]);
    }

    // Fetch the TRNDTL entry for the specified ID (if needed)
    $trndtl = TRNDTL::where('v_no', $id) // This is correct
                ->where('v_type', 'BPV') // Assuming CRV type for Cash Receipt Voucher
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

    // Loop through each entry and create new TRNDTL records
    
        TRNDTL::create([
            'v_no' => $trndtl->v_no,
            'v_type' => $request->v_type,
            'date' => $entry['date'],
            'cash_id' => $entry['cash'],
            'account_id' => $entry['account'],
            'description' => $entry['description'],
            'debit' => $entry['debit'],
             'preparedby' => auth()->user()->name,
            'status' => 'unofficial',
            'credit' => '0',
            'file_id' => $filePath,
            'c_id'=>$user->c_id
        ]);
    }

    return redirect()->route('bank_payment.reports')->with('success', 'BPV has been Update successfully.');
    
}





// Handle the delete

public function destroy($id)
{
    // Find the transaction by ID where v_type is BPV and matches r_id
    $trndtl = TRNDTL::where('v_type', 'BPV')
                   ->where('id', $id)
                   ->firstOrFail();

    // Delete the transaction
    $trndtl->delete();

    // Redirect back with a success message
    return redirect()->route('bank_payment.reports')->with('success', 'Transaction deleted successfully!');
}

public function delete($id)
{
    // Find the transaction by ID where v_type is BPV and matches r_id
    $trndtl = TRNDTL::where('v_type', 'BPV')
                   ->where('id', $id)
                   ->firstOrFail();

    // Delete the transaction
    $trndtl->delete();

    // Redirect back with a success message
    return redirect()->route('bank_payment.reports')->with('success', 'Transaction deleted successfully!');
}




}
