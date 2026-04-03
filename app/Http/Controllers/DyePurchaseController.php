<?php

namespace App\Http\Controllers;

use App\Models\ItemMaster;
use App\Models\TRNDTL;
use App\Models\ErpParam;
use Illuminate\Http\Request;
use App\Models\AccountMaster;
use App\Models\DyePurchase;
use App\Models\DeliveryMaster;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class DyePurchaseController extends Controller
{


    public function index()
    {
        $loggedInUser = Auth::user();
        $accounts = AccountMaster::whereIn('level2_id', [4, 23])->get();
        $saleAccounts = AccountMaster::all();
         $items = ItemMaster::all();
        return view('dye_purchase.list', compact('loggedInUser', 'items', 'accounts', 'saleAccounts'));
    }
    
    
public function store(Request $request)
{
    // Validate the request data
    $request->validate([
        'entries' => 'required|array',
        'entries.*.date' => 'required|date',
        'entries.*.account' => 'required|exists:account_masters,id',
        'entries.*.item' => 'required|exists:item_masters,id',
        'entries.*.description' => 'nullable|string',
        'entries.*.amount' => 'required|numeric|min:0',
        'entries.*.qty' => 'required|numeric|min:0',
        'entries.*.file' => 'nullable|file|mimes:jpg,jpeg,png,pdf|max:2048', // Added PDF support
    ]);

    DB::beginTransaction();
    try {
        // Get the last voucher number
        $lastEntry = DyePurchase::orderBy('v_no', 'desc')->first();
        $newInvoiceNumber = $lastEntry ? (int)$lastEntry->v_no + 1 : 1;

        // Get ERP parameters
        $erpParam = ErpParam::first();
        if (!$erpParam || !$erpParam->purchase_account) {
            return redirect()->back()->with('error', 'Cash Account is not configured in ERP Params.');
        }
        $cashAccountId = $erpParam->purchase_account;

        // Create uploads directory if it doesn't exist
        $uploadPath = public_path('storage/uploads');
        if (!file_exists($uploadPath)) {
            mkdir($uploadPath, 0777, true);
        }

        // Process each entry
        foreach ($request->entries as $key => $entry) {
            // Handle file upload if exists
            $filePath = null;
            $fileName = null;
            
            if ($request->hasFile("entries.$key.file")) {
                $file = $request->file("entries.$key.file");
                $fileName = 'voucher_' . $newInvoiceNumber . '_' . time() . '_' . $file->getClientOriginalName();
                
                // Move file to public storage
                $file->move($uploadPath, $fileName);
                
                // Store relative path for database
                $filePath = 'uploads/' . $fileName;
            }

            // Create DyePurchase record
            $dyePurchase = DyePurchase::create([
                'v_no' => $newInvoiceNumber,
                'amount' => $entry['amount'],
                'qty' => $entry['qty'],
                'item_code' => $entry['item'],
                'description' => $entry['description'] ?? null,
                'file_path' => $filePath,
                'file_name' => $fileName, // Store original filename
            ]);

            // Create TRNDTL record
            TRNDTL::create([
                'v_no' => $newInvoiceNumber,
                'date' => $entry['date'],
                'description' => $entry['description'] ?? null,
                'preparedby' => $entry['prepared_by'] ?? auth()->user()->name,
                'account_id' => $entry['account'],
                'cash_id' => $cashAccountId,
                'credit' => $entry['amount'],
                'debit' => 0,
                'status' => 'unofficial',
                'v_type' => 'DPN',
                'r_id' => $dyePurchase->id,
            ]);
        }

        DB::commit();
        return redirect()->route('dye_purchases.reports')->with([
            'success' => 'Voucher No. ' . $newInvoiceNumber . ' has been saved successfully.',
            'voucher_no' => $newInvoiceNumber // Pass voucher number for reference
        ]);
    } catch (\Exception $e) {
        DB::rollBack();
        // Log the error for debugging
        \Log::error('Dye Purchase Store Error: ' . $e->getMessage());
        return redirect()->back()->with('error', 'An error occurred while saving the voucher: ' . $e->getMessage());
    }
}


   public function reports(Request $request)
    {
        $startDate = $request->input('start_date');
        $endDate = $request->input('end_date');
        $status = $request->input('status'); // New status filter
        
          $v_no = $request->input('v_no');
    $account_id = $request->input('account_id');

        // Build the query with date range and status filters
        $query = TRNDTL::where('v_type', 'DPN')->where('debit', 0)->where('account_id', '!=', 35)->with('dyepurchases');

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
    

        $trndtl = $query
                ->orderBy('date', 'desc')
                ->orderBy('id', 'desc')
                ->orderBy('v_no', 'desc')
                ->get();

    $accountMasters = AccountMaster::all();
    $vNo = TRNDTL::where('v_type', 'DPN')->pluck('v_no')->unique()->toArray();
    $accountId = AccountMaster::whereIn('id', TRNDTL::where('v_type', 'DPN')->pluck('account_id'))
    ->where('title', '!=', 'Purchase Freight') 
    ->pluck('title', 'id');
    
        return view('dye_purchase.index', [
            'trndtl' => $trndtl,
            'startDate' => $startDate,
            'endDate' => $endDate,
            'status' => $status, // Pass status to view
            'accountMasters' => $accountMasters,
            'vNo' => $vNo,
        'accountId' => $accountId,
        ]);
    }
    
     public function edit($v_no)
{
    
    $loggedInUser = Auth::user();
    $voucher = TRNDTL::where('v_no', $v_no)
                ->where('v_type', 'DPN') 
                ->where('debit', 0)
                ->where('account_id', '!=', 35)
                ->get(); 

   $accounts = AccountMaster::whereIn('level2_id', [4, 23])->get();
        $saleAccounts = AccountMaster::all();
 $items = ItemMaster::all();
    return view('dye_purchase.edit', compact('loggedInUser', 'voucher', 'items', 'accounts', 'saleAccounts'));
}



public function update(Request $request, $v_no)
{
     // Validate the request data
    $request->validate([
        'entries' => 'required|array',
        'entries.*.date' => 'required|date',
        'entries.*.account' => 'required|exists:account_masters,id',
        'entries.*.item' => 'required|exists:item_masters,id',
        'entries.*.description' => 'nullable|string',
        'entries.*.amount' => 'required|numeric|min:0',
        'entries.*.qty' => 'required|numeric|min:0',
        'entries.*.file' => 'nullable|file|mimes:jpg,jpeg,png,pdf|max:2048', // Added PDF support
    ]);

    DB::beginTransaction();
    try {
        // Get the last voucher number
        $lastEntry = DyePurchase::orderBy('v_no', 'desc')->first();
        $newInvoiceNumber = $lastEntry ? (int)$lastEntry->v_no + 1 : 1;

        // Get ERP parameters
        $erpParam = ErpParam::first();
        if (!$erpParam || !$erpParam->purchase_account) {
            return redirect()->back()->with('error', 'Cash Account is not configured in ERP Params.');
        }
        $cashAccountId = $erpParam->purchase_account;

        // Create uploads directory if it doesn't exist
        $uploadPath = public_path('storage/uploads');
        if (!file_exists($uploadPath)) {
            mkdir($uploadPath, 0777, true);
        }

        // Process each entry
        foreach ($request->entries as $key => $entry) {
            // Handle file upload if exists
            $filePath = null;
            $fileName = null;
            
            if ($request->hasFile("entries.$key.file")) {
                $file = $request->file("entries.$key.file");
                $fileName = 'voucher_' . $newInvoiceNumber . '_' . time() . '_' . $file->getClientOriginalName();
                
                // Move file to public storage
                $file->move($uploadPath, $fileName);
                
                // Store relative path for database
                $filePath = 'uploads/' . $fileName;
            }

            // Create DyePurchase record
            $dyePurchase = DyePurchase::create([
                'v_no' => $v_no,
                'amount' => $entry['amount'],
                'item_code' => $entry['item'],
                'qty' => $entry['qty'],
                'description' => $entry['description'] ?? null,
                'file_path' => $filePath,
                'file_name' => $fileName, // Store original filename
            ]);

            // Create TRNDTL record
            TRNDTL::create([
                'v_no' => $v_no,
                'date' => $entry['date'],
                'description' => $entry['description'] ?? null,
                'preparedby' => $entry['prepared_by'] ?? auth()->user()->name,
                'account_id' => $entry['account'],
                'cash_id' => $cashAccountId,
                'credit' => $entry['amount'],
                'debit' => 0,
                'status' => 'unofficial',
                'v_type' => 'DPN',
                'r_id' => $dyePurchase->id,
            ]);
        }

        DB::commit();
        return redirect()->route('dye_purchases.reports')->with([
            'success' => 'Voucher No. ' . $v_no . ' has been update successfully.',
            'voucher_no' => $v_no // Pass voucher number for reference
        ]);
    } catch (\Exception $e) {
        DB::rollBack();
        // Log the error for debugging
        \Log::error('Dye Purchase Store Error: ' . $e->getMessage());
        return redirect()->back()->with('error', 'An error occurred while saving the voucher: ' . $e->getMessage());
    }
}



public function destroy($id)
{
    $trndtl = TRNDTL::find($id);

    if (!$trndtl) {
        return redirect()->back()->with('error', 'Record not found.');
    }

    if ($trndtl->v_type === 'DPN') {
        // Delete all related TRNDTL records where r_id matches
        TRNDTL::where('r_id', $trndtl->r_id)->where('v_type', 'DPN')->delete();

        // Delete the related ShipperPurchases record if it exists
        $dyeDetail = DyePurchase::find($trndtl->r_id);
        if ($dyeDetail) {
            $dyeDetail->delete();
        }
    } else {
        // Delete only the individual TRNDTL record
        $trndtl->delete();
    }

    return redirect()->back()->with('success', 'Record deleted successfully.');
}



public function delete($id)
{
    
    return $this->destroy($id);
}


public function editDye($v_no)
{
    // Query the TRNDTL model to find freight data
    $freightData = TRNDTL::where('v_no', $v_no)
                         ->where('v_type', 'DPN')
                         ->where('description', 'freight')
                         ->first();

    // Set the freight value to 0 if no matching record is found
    $freight = $freightData ? $freightData->credit : 0;

    // Fetch the freight_type from the PurchaseDetail table
    $purchaseDetail = DyePurchase::where('v_no', $v_no)->first();
    $freight_type = $purchaseDetail ? $purchaseDetail->freight_type : null;

    // Sum the qty from purchase_details for the same voucher_no
    $totalQty = DyePurchase::where('v_no', $v_no)->sum('amount');

    // Pass $freight, $v_no, $totalQty, and $freight_type to the view
    return view('dye_purchase.editDye', compact('freight', 'v_no', 'totalQty', 'freight_type'));
}


public function updateDye(Request $request, $id)
{
    // Validate the request
    $validatedData = $request->validate([
        'total_freight' => 'required|numeric|min:0',
        'freight_type' => 'required|string', // Add validation for freight_type
    ]);

    try {
        // Fetch ERP parameters
        $erpParam = ErpParam::first();
        if (!$erpParam) {
            throw new \Exception('ERP parameters not found.');
        }

        $cashAccId = $erpParam->cash_acc;
        $Purfreight = $erpParam->pur_freight;
        $PurfreightExp = $erpParam->pur_freight_exp;

        // Check if a record with v_type == 'BPN' and description == 'Freight' exists in TRNDTL
        $existingFreight = TRNDTL::where('v_no', $id)
                                 ->where('v_type', 'DPN')
                                 ->where('description', 'Freight')
                                 ->first();

        // Check if a record with vorcher_no == $id exists in PurchaseDetail
        $existingPurchaseDetail = DyePurchase::where('v_no', $id)->first();

        // If total_freight is greater than 0
        if ($validatedData['total_freight'] > 0) {
            // Update or create PurchaseDetail record
            if ($existingPurchaseDetail) {
                // Update the existing PurchaseDetail record
                $existingPurchaseDetail->update([
                    'freight' => $validatedData['total_freight'],
                    'freight_type' => $validatedData['freight_type'], // Add this line
                ]);

                // Get the id of the updated PurchaseDetail record
                $purchaseDetailId = $existingPurchaseDetail->id;
            } else {
                // Create a new PurchaseDetail record
                $purchaseDetail = DyePurchase::create([
                    'vorcher_no' => $id,
                    'freight' => $validatedData['total_freight'],
                    'freight_type' => $validatedData['freight_type'], // Add this line
                    // Add other necessary fields here
                ]);

                // Get the id of the newly created PurchaseDetail record
                $purchaseDetailId = $purchaseDetail->id;
            }

            // Update or create TRNDTL record
            if ($existingFreight) {
                // Update the existing TRNDTL record
                $existingFreight->update([
                    'credit' => $validatedData['total_freight'],
                    'preparedby' => Auth::user()->name ?? null,
                    'date' => Carbon::now(),
                    'r_id' => $purchaseDetailId, // Set r_id to the PurchaseDetail id
                ]);
            } else {
                // Create a new TRNDTL record
                TRNDTL::create([
                    'v_no' => $id,
                    'date' => Carbon::now(),
                    'account_id' => $PurfreightExp,
                    'cash_id' => $Purfreight,
                    'preparedby' => Auth::user()->name ?? null,
                    'credit' => $validatedData['total_freight'],
                    'debit' => '0',
                    'status' => 'unofficial',
                    'v_type' => 'DPN',
                    'description' => 'Freight',
                    'r_id' => $purchaseDetailId, // Set r_id to the PurchaseDetail id
                ]);
            }
        } else {
            // If total_freight is 0, delete the existing TRNDTL record (if any)
            if ($existingFreight) {
                $existingFreight->delete();
            }

            // If total_freight is 0, update the PurchaseDetail record (if any)
            if ($existingPurchaseDetail) {
                $existingPurchaseDetail->update([
                    'freight' => 0,
                ]);
            }
        }

       return redirect()->route('dye_purchases.reports')->with('success', 'Freight updated successfully for DPN-' . $id);

    } catch (\Exception $e) {
        // Handle any exceptions and return an error message
        return redirect()->route('dye_purchases.reports')->with('error', 'An error occurred: ' . $e->getMessage());
    }
}

    
}
