<?php

namespace App\Http\Controllers;

use App\Models\File;
use App\Models\TRNDTL;
use App\Models\ErpParam;
use App\Models\BankRecipt;
use Illuminate\Http\Request;
use App\Models\AccountMaster;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Auth;
class BankReciptController extends Controller
{
    public function index()
    {
        $user=Auth::user();
        // $erp_params = ErpParam::all();
        $accounts = AccountMaster::where('c_id',$user->c_id)->get();
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
        return view('bank_recipt.list',get_defined_vars());
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
        'file' => 'nullable|file|mimes:jpg,jpeg,png,pdf|max:2048', // Changed to match reference
    ]);

    DB::beginTransaction();
    try {
        $filePath = null;
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $fileName = time() . '_' . preg_replace('/\s+/', '_', $file->getClientOriginalName());
            $file->move(public_path('storage/uploads'), $fileName); // Store in public/storage/uploads
            $filePath = 'uploads/' . $fileName; // Save the relative path
        }
        
        $lastInvoiceNumber = TRNDTL::where('v_type', 'BRV')->where('c_id',$user->c_id)->max('v_no');
        $newInvoiceNumber = $lastInvoiceNumber ? ((int) $lastInvoiceNumber + 1) : 1;

        foreach ($request->entries as $entry) {
            TRNDTL::create([
                'v_no' => $newInvoiceNumber,
                'v_type' => 'BRV',
                'date' => $entry['date'],
                'cash_id' => $entry['cash'],
                'account_id' => $entry['account'],
                'description' => $entry['description'],
                'credit' => $entry['credit'],
                'debit' => '0',
                'status' => 'unofficial',
                'preparedby' => auth()->user()->name,
                'file_id' => $filePath,
                'c_id'=> $user->c_id
            ]);
        }

        DB::commit();
        return redirect()->route('bank_recipt.reports')->with('success', '' . $request->v_type . '-' . $newInvoiceNumber . ' has been saved successfully.');
    
    } catch (\Exception $e) {
        DB::rollBack();
        return redirect()->back()->with('error', 'An error occurred while saving the voucher: ' . $e->getMessage());
    }
}
    
   public function reports(Request $request)
{
    $user=Auth::user();
    // Get the filter parameters from the request
    $startDate = $request->input('start_date');
    $endDate = $request->input('end_date');
    $status = $request->input('status');
    $v_no = $request->input('v_no');
    $account_id = $request->input('account_id');

    // Start building the query
    $query = TRNDTL::with('accounts') // Eager load the account relation
                   ->where('v_type', 'BRV')->where('c_id',$user->c_id);

    // Apply filters
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
    
    // Apply sorting only once at the end
    $trndtls = $query->orderBy('date', 'desc')
                     ->orderBy('v_no', 'desc')
                     ->get();

    // Fetch additional data for filters
    $accountMasters = AccountMaster::where('c_id',$user->c_id)->get();
    $vNoList = TRNDTL::where('v_type', 'BRV')->pluck('v_no')->where('c_id',$user->c_id)->unique()->toArray();
    $accountIdList = TRNDTL::where('v_type', 'BRV')->pluck('account_id')->where('c_id',$user->c_id)->unique()->toArray();
    
    return view('bank_reports.index2', [
        'trndtls' => $trndtls,
        'startDate' => $startDate,
        'status' => $status, 
        'endDate' => $endDate,
        'accountMasters' => $accountMasters,
        'vNoList' => $vNoList,
        'accountIdList' => $accountIdList,
    ]);
}

    public function edit($v_no)
{
    $user=Auth::user();
    // Find the voucher and its entries by voucher number (v_no)
    $voucher = TRNDTL::where('v_no', $v_no)
    ->where('c_id',$user->c_id)
                ->where('v_type', 'BRV') // Assuming CRV type for Cash Receipt Voucher
                ->get(); // Fetch all entries for this voucher
                // $voucher2 = TRNDTL::where('v_no', $v_no)
                // ->where('v_type', 'CRV') // Assuming CRV type for Cash Receipt Voucher
                // ->find(); // Fetch all entries for this voucher

    // Fetch account master data for dropdowns
    $accounts = AccountMaster::where('c_id',$user->c_id)->get();

    // Fetch ERP parameters to get account masters related to cash level
    $erpParams = ErpParam::with('level2')->where('c_id',$user->c_id)->get();

    $accountMasters = collect();

    if ($erpParams->isNotEmpty()) {
        $cashLevelId = $erpParams->first()->bank_level;
        $accountMasters = AccountMaster::where('level2_id', $cashLevelId)->where('c_id',$user->c_id)->get();
    }

    // Pass the voucher and entries to the view
    return view('bank_reports.edit2', compact('voucher', 'accountMasters', 'accounts'));
}



// Handle the update
public function update(Request $request, $id)
{
    

   $entries = $request->input('entries', []);
    // Fetch the TRNDTL entry for the specified ID (if needed)
    $trndtl = TRNDTL::where('v_no', $id) // This is correct
                ->where('v_type', 'BRV') // Assuming CRV type for Cash Receipt Voucher
                ->firstOrFail(); // Use firstOrFail() here

    // Optionally, clear existing entries if necessary:
    // TRNDTL::where('v_no', $trndtl->v_no)->delete();
foreach ($entries as $entry) {
            $filePath = null;

            // Handle file upload for the entry, if provided
            if ($request->hasFile('file')) {
                // check for the 'file' key in the request
                $file = $request->file('file'); // get the uploaded file
                $fileName = time() . '_' . preg_replace('/\s+/', '_', $file->getClientOriginalName());
                $filePath = $file->storeAs('uploads', $fileName, 'public');
            }
   
        TRNDTL::create([
            'v_no' => $trndtl->v_no,
            'v_type' => $request->v_type,
            'date' => $entry['date'],
            'cash_id' => $entry['cash'],
            'account_id' => $entry['account'],
            'description' => $entry['description'],
            'credit' => $entry['credit'],
            'debit' => '0',
            'status' => 'unofficial',
            'preparedby' => auth()->user()->name,
            'file_id' => $filePath,
            'c_id'=>auth()->user()->c_id
        ]);
    }

     return redirect()->route('bank_recipt.reports')->with('success', 'BRV has been saved successfully.');
}



// Handle the delete
public function destroy($id)
{
    // Find the transaction by ID where v_type is 'BRV' and r_id matches the id
    $trndtl = TRNDTL::where('v_type', 'BRV')
                    ->where('id', $id)
                    ->firstOrFail();

    // Delete the transaction
    $trndtl->delete();

    // Redirect back with a success message
    return redirect()->route('bank_recipt.reports')->with('success', 'Transaction deleted successfully!');
}

public function delete($id)
{
    // Find the transaction by ID where v_type is 'BRV' and r_id matches the id
    $trndtl = TRNDTL::where('v_type', 'BRV')
                    ->where('id', $id)
                    ->firstOrFail();

    // Delete the transaction
    $trndtl->delete();

    // Redirect back with a success message
    return redirect()->route('bank_recipt.reports')->with('success', 'Transaction deleted successfully!');
}

}
