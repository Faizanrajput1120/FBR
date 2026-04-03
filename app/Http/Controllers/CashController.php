<?php

namespace App\Http\Controllers;

use App\Models\Cash;
use App\Models\File;
use App\Models\TRNDTL;
use App\Models\ErpParam;
use Illuminate\Http\Request;
use App\Models\AccountMaster;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
class CashController extends Controller
{
    public function index()
    {
        $user=Auth::user();
        $accounts = AccountMaster::where('c_id',$user->c_id)->get();
        // $accounts = AccountMaster::with('level2s')
        // ->orderBy('created_at', 'desc') // Or 'id', depending on your needs
        // ->take(1)
        // ->get();
        // $accountings = AccountMaster::with('level2s')
        // ->whereHas('level2s', function($query) {
        //     $query->where('title', 'mn');
        // })
        // ->get();
        // $level2Id = 1;
        // $accounts = ErpParam::whereHas('cashes.erpParams_cash', function($query) {
        //     $query->whereColumn('erp_params.cash_level', 'account_masters.level2_id');
        // })->with('cashes.erpParams_cash')->get();
        // Fetch all ERP Params with their related Level2 data
        $erpParams = ErpParam::with('level2')->where('c_id',$user->c_id)->get();

        // Initialize accountMasters as an empty collection to avoid errors
        $accountMasters = collect();

        // Check if there is at least one ERP Param and that cash_level is set
        if ($erpParams->isNotEmpty()) {
            // Get the cash_level from the first ERP Param
            $cashLevelId = $erpParams->first()->cash_level;

            // Fetch AccountMasters associated with the cash_level
            $accountMasters = AccountMaster::where('level2_id', $cashLevelId)->where('c_id',$user->c_id)->get();
        }

        // If you also need to fetch all Er
        return view('cash.list',get_defined_vars());
    }
    public function generateVoucherType($baseType)
{
    // Fetch the latest entry for the given voucher type from the database
    $latestVoucher = TRNDTL::where('v_type', 'like', "{$baseType}%")
                            ->orderBy('id', 'desc') // or another field to determine the latest
                            ->first();

    // If no entries exist, start with 1
    if (!$latestVoucher) {
        return "{$baseType}1";
    }

    // Extract the numeric part from the latest voucher type
    preg_match('/(\d+)$/', $latestVoucher->v_type, $matches);
    $nextNumber = isset($matches[1]) ? (int)$matches[1] + 1 : 1; // Increment the number

    return "{$baseType}{$nextNumber}";
}

public function store(Request $request)
{
           $user=Auth::user();
    // Validate the overall request, including file upload validation for any file type
    $request->validate([
        'v_type' => 'required|string',
        'entries' => 'required|array',
        'entries.*.date' => 'required|date',
        'entries.*.cash' => 'required|string',
        'entries.*.account' => 'required|string',
        'entries.*.description' => 'required|string',
    ]);

    // Handle file upload if present
    $filePath = null;
    $fileId=null;
    if ($request->hasFile('file')) {
        $file = $request->file('file');
        $fileName = time() . '_' . preg_replace('/\s+/', '_', $file->getClientOriginalName());
        $filePath = $file->storeAs('uploads', $fileName, 'public');
        
    // Save in files table and get the ID
    $fileRecord = File::create([
        'files' => $filePath // or store original name as well
    ]);

    $fileId = $fileRecord->id;
    }
    
    
    $lastEntry = TRNDTL::where('v_type',$request->v_type)
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
        // Create the voucher entry and include the file path if a file was uploaded
        TRNDTL::create([
            'v_no' => $newInvoiceNumber, // All entries share the same v_no
            'v_type' => 'CRV',
            'date' => $entry['date'],
            'cash_id' => $entry['cash'],
            'account_id' => $entry['account'],
            'description' => $entry['description'],
            'credit' => $entry['credit'],
            'preparedby' => auth()->user()->name,
            'debit' => '0',
            'status' => 'unofficial',
            'file_id' => $fileId,
            'c_id'=>$user->c_id
        ]);
    }

    // Redirect back with success message
    return redirect()->route('cash.reports')->with('success', '' . $request->v_type . '-' . $newInvoiceNumber . ' has been saved successfully.');
}




public function reports(Request $request)
{
    $user = Auth::user();
    $startDate = $request->input('start_date');
    $endDate = $request->input('end_date');
    $status = $request->input('status');
    $v_no = $request->input('v_no');
    $account_id = $request->input('account_id');

    // Base query with filters
    $query = TRNDTL::with('accounts')
        ->where('v_type', 'CRV')
        ->where('c_id', $user->c_id);

    if ($startDate && $endDate) {
        $query->whereBetween('date', [$startDate, $endDate]);
    }

    if ($status) {
        $query->where('status', $status);
    }

    if ($v_no) {
        $query->where('v_no', $v_no);
    }

    if ($account_id) {
        $query->where('account_id', $account_id);
    }

    $trndtls = $query->orderBy('date', 'desc')
                     ->orderBy('v_no', 'desc')
                     ->take(10)
                     ->get();

    // Filtered dropdowns (company-specific)
    $accountMasters = AccountMaster::where('c_id', $user->c_id)->get();

    $vNoList = TRNDTL::where('v_type', 'CRV')
                     ->where('c_id', $user->c_id)
                     ->pluck('v_no')
                     ->unique()
                     ->toArray();

    $accountIdList = TRNDTL::where('v_type', 'CRV')
                           ->where('c_id', $user->c_id)
                           ->pluck('account_id')
                           ->unique()
                           ->toArray();

    return view('cash_reports.index', [
        'trndtls'        => $trndtls,
        'startDate'      => $startDate,
        'endDate'        => $endDate,
        'status'         => $status,
        'accountMasters' => $accountMasters,
        'vNoList'        => $vNoList,
        'accountIdList'  => $accountIdList,
    ]);
}




// Show the edit form
public function edit($v_no)
{
    // dd($v_no);
           $user=Auth::user();
    // Find the voucher and its entries by voucher number (v_no)
    $voucher = TRNDTL::where('v_no', $v_no)
                ->where('v_type', 'CRV')
                ->where('c_id', $user->c_id)
                // Assuming CRV type for Cash Receipt Voucher
                ->get(); // Fetch all entries for this voucher
    // dd($voucher);
                // $voucher2 = TRNDTL::where('v_no', $v_no)
                // ->where('v_type', 'CRV') // Assuming CRV type for Cash Receipt Voucher
                // ->find(); // Fetch all entries for this voucher

    // Fetch account master data for dropdowns
    $accounts = AccountMaster::all();

    // Fetch ERP parameters to get account masters related to cash level
    $erpParams = ErpParam::with('level2')->where('c_id',$user->c_id)->get();

    $accountMasters = collect();

    if ($erpParams->isNotEmpty()) {
        $cashLevelId = $erpParams->first()->cash_level;
        $accountMasters = AccountMaster::where('level2_id', $cashLevelId)->where('c_id',$user->c_id)->get();
    }

    // Pass the voucher and entries to the view
    return view('cash_reports.edit', get_defined_vars());
}



// Handle the update
public function update(Request $request, $id)
{
    $user=Auth::user();
    // If entries are not passed, default to an empty array to avoid foreach errors
    $entries = $request->input('entries', []);

    // Check if entries are an array
    if (!is_array($entries)) {
        return back()->withErrors(['entries' => 'Entries must be an array.']);
    }

    // Fetch the transaction details using the provided v_no
    $trndtl = TRNDTL::where('v_no', $id)
                    ->where('v_type', 'CRV')
                    ->firstOrFail();

    // Loop through the entries and save each one
    foreach ($entries as $entry) {
        $filePath = null;

        // Handle file upload for the entry, if provided
        if ($request->hasFile('file')) { // check for the 'file' key in the request
            $file = $request->file('file'); // get the uploaded file
            $fileName = time() . '_' . preg_replace('/\s+/', '_', $file->getClientOriginalName());
            $filePath = $file->storeAs('uploads', $fileName, 'public');
        }

        // Create the voucher entry and include the file path if uploaded
        TRNDTL::create([
            'v_no' => $trndtl->v_no,
            'v_type' => $request->v_type,
            'date' => $entry['date'],
            'cash_id' => $entry['cash'],
            'account_id' => $entry['account'],
            'description' => $entry['description'],
            'preparedby' => auth()->user()->name,
            'credit' => $entry['credit'],
            'debit' => '0',
            'status' => 'unofficial',
            'file_id' => $filePath, // Store the file path if a file was uploaded
            'c_id'=>$user->c_id
        ]);
    }

    return redirect()->route('cash.reports')->with('success', 'Entries updated successfully.');
}







public function destroy($id)
{
    // Find the transaction by ID where v_type is CRV and r_id matches
    $trndtl = TRNDTL::where('v_type', 'CRV')
                    ->where('id', $id)
                    ->firstOrFail();

    // Delete the transaction
    $trndtl->delete();

    // Redirect back with a success message
    return redirect()->route('cash.reports')->with('success', 'Transaction deleted successfully!');
}

public function delete($id)
{
    // Find the transaction by ID where v_type is CRV and r_id matches
    $trndtl = TRNDTL::where('v_type', 'CRV')
                    ->where('id', $id)
                    ->firstOrFail();

    // Delete the transaction
    $trndtl->delete();

    // Redirect back with a success message
    return redirect()->back()->with('success', 'Transaction deleted successfully!');
}
public function updateStatus(Request $request, $id)
{
    $transaction = TRNDTL::findOrFail($id);
    $transaction->status = $request->status;
    $transaction->save();

    return response()->json(['success' => true]);
}


}
