<?php

namespace App\Http\Controllers;

use App\Models\ItemType;
use Illuminate\Http\Request;
use App\Models\AccountMaster;
use App\Models\ConfectioneryDetail;
use App\Models\ConfectioneryMaster;
use App\Models\ProductMaster;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Models\ConfectBilling;
use App\Models\ErpParam;
use App\Models\TRNDTL;

use Carbon\Carbon;

class ConfectioneryController extends Controller
{
    public function index()
    {
        $loggedInUser = Auth::user();
        $accounts = AccountMaster::all();
        $items = ItemType::all();
        $product = ProductMaster::all();
        return view('sales.confectionery.list',get_defined_vars());
    }
    
    public function getAid($accountId)
    {
        $product = ProductMaster::where('aid', $accountId)->first();
        if ($product) {
            return response()->json(['aid' => $product->aid, 'hasAid' => true]);
        } else {
            return response()->json(['aid' => null, 'hasAid' => false]);
        }
    }

    
    public function store(Request $request)
{
    $lastInvoiceNumber = ConfectioneryMaster::max('v_no');

$newInvoiceNumber = $lastInvoiceNumber ? ((int) $lastInvoiceNumber + 1) : 1;


    foreach ($request->entries as $index => $entry) {
        $confectioneryDetail = ConfectioneryDetail::create([
            'v_no' => $newInvoiceNumber,
            'sequence_no' => $entry['sequence_no'] ?? $index,
            'item_code' => $entry['item'] ?? null,
            'product_name' => $entry['product'] ?? null,
           'po_no' => $entry['po_no'] ?? 0,
            'box' => $entry['box'] ?? 0,
            'pack_qty' => $entry['packing'] ?? 0,
            'total' => $entry['total'] ?? 0,
            'freight' => $entry['freight'] ?? 0,
        ]);

        ConfectioneryMaster::create([
            'v_no' => $newInvoiceNumber,
            'sequence_no' => $entry['sequence_no'] ?? $index,
            'date' => Carbon::now(),
            'account_id' => $entry['supplier'] ?? null,
            'preparedby' => $entry['prepared_by'] ?? null,
            'status' => 'unofficial',
            'v_type' => 'CDC',
            'confectionery_detail_id' => $confectioneryDetail->id,
        ]);
        
         $erpParam = ErpParam::first(); 
   $Salefreight = $erpParam ? $erpParam->sale_freight : null;
    $SalefreightExp = $erpParam ? $erpParam->sale_freight_exp : null;
    
        if (($entry['freight'] ?? 0) > 0) {
            TRNDTL::create([
        'v_no' => $newInvoiceNumber,
        'date' => Carbon::now(),
        'account_id' => $SalefreightExp,
        'cash_id' => $Salefreight,
        'preparedby' => $entry['prepared_by'] ?? null,
        'credit' => '0',
        'debit' => $entry['freight'] ?? null,
        'status' => 'unofficial',
        'v_type' => 'CDC',
        'r_id' => $confectioneryDetail->id,
        'description'=> 'Freight',
    ]);}
    }

    return redirect()->route('confectionery.reports')->with('success', "Voucher No. $newInvoiceNumber has been created successfully.");
}



public function reports(Request $request)
{
    $products = ProductMaster::all();

    // Get unique item codes from the ConfectioneryDetail table
    $itemCodes = ConfectioneryDetail::distinct()->pluck('item_code');
    $account = ConfectioneryMaster::distinct()->pluck('account_id'); 
    // Fetch only ItemType entries that are referenced in the ConfectioneryDetail table
    $items = ItemType::whereIn('id', $itemCodes)->get();
    $accounts = AccountMaster::whereIn('id', $account)->get();

    $startDate = $request->input('start_date');
    $endDate = $request->input('end_date');
    $status = $request->input('status');
    $itemId = $request->input('item'); // New item filter
    $accountId = $request->input('account'); // New item filter
    $po = $request->input('po_no'); // New PO filter
    $v_no = $request->input('v_no');

    // Get unique P.O numbers
    $poNumbers = ConfectioneryDetail::distinct()->pluck('po_no');

    // Build the query with date range, status, item, and PO filters
    $query = ConfectioneryMaster::with('confectioneryDetails');

    if ($startDate && $endDate) {
        $query->whereBetween('date', [$startDate, $endDate]);
    }

    if ($status) {
        $query->where('status', $status);
    }

    if ($itemId) {
        $query->whereHas('confectioneryDetails', function ($q) use ($itemId) {
            $q->where('item_code', $itemId);
        });
    }

    if ($po) {
        $query->whereHas('confectioneryDetails', function ($q) use ($po) {
            $q->where('po_no', $po);
        });
    }

    if ($v_no) {
        $query->whereHas('confectioneryDetails', function ($q) use ($v_no) {
            $q->where('v_no', $v_no);
        });
    }
    
     if ($accountId) {
        $query->whereHas('confectioneryDetails', function ($q) use ($accountId) {
            $q->where('account_id', $accountId); // Match item_code instead of type_title
        });
    }

    // Fetch all records sorted by date, v_no (highest), and id (highest)
  

 $trndtl = $query->orderBy('date', 'desc')
    ->orderBy('v_no', 'desc')
    ->orderBy('sequence_no', 'asc') // Add this line for ascending order
    ->get();
    
    
    $accountMasters = AccountMaster::all();
    $vNoList = ConfectioneryMaster::pluck('v_no')->unique()->toArray();

    return view('sale_reports.index5', [
        'trndtl' => $trndtl,
        'startDate' => $startDate,
        'endDate' => $endDate,
        'status' => $status,
        'accountMasters' => $accountMasters,
        'items' => $items,
        'products' => $products,
        'itemId' => $itemId, 
        'po' => $po,
        'vNoList' => $vNoList,
        'poNumbers' => $poNumbers,
        'accounts' => $accounts,
    ]);
}


public function edit($v_no)
{
    // Check if there are any records in confect_billings with the same old_vno as v_no in ConfectioneryMaster
    $relatedBilling = ConfectBilling::where('old_vno', $v_no)->exists();

    if ($relatedBilling) {
        // If related billing records exist, redirect with an error message
        return redirect()->back()->with('error', 'Cannot edit the voucher. Please delete related billing entries first.');
    }

    // Find the voucher and its entries by voucher number (v_no)
    $loggedInUser = Auth::user();
    $voucher = ConfectioneryMaster::where('v_no', $v_no)->get(); // Fetch all entries for this voucher

    $accounts = AccountMaster::all();
    $items = ItemType::all();
    $product = ProductMaster::all();

    // Return the view with the data
    return view('sale_reports.edit5', get_defined_vars());
}

public function update(Request $request, $id)
{
    // If entries is not passed, default to an empty array to avoid foreach errors
    $entries = $request->input('entries', []);

    // Check if entries is an array
    if (!is_array($entries)) {
        return back()->withErrors(['entries' => 'Entries must be an array.']);
    }

    // Loop through each entry in the entries array
    foreach ($entries as $entry) {
        // Check if the entry has an 'id' (existing entry)
        if (!empty($entry['id'])) {
            // Find the existing DeliveryDetail and DeliveryMaster records by ID
            $confectioneryDetail = ConfectioneryDetail::find($entry['id']);
            $confectioneryMaster = ConfectioneryMaster::where('confectionery_detail_id', $entry['id'])
                                            ->where('v_no', $id)
                                            ->first();

            // Update the existing DeliveryDetail record
            if ($confectioneryDetail) {
                $confectioneryDetail->update([
                    'v_no' => $id,
                    
                    'item_code' => $entry['item'] ?? null,
                    'product_name' => $entry['product'] ?? null,
                    'po_no' => $entry['po_no'] ?? 0,
                    'box' => $entry['box'] ?? 0,
                    'pack_qty' => $entry['packing'] ?? 0,
                    'total' => $entry['total'] ?? 0,
                    'freight' => $entry['freight'] ?? 0,
                ]);
            }

            // Update the existing DeliveryMaster record
            if ($confectioneryMaster) {
                $confectioneryMaster->update([
                    'v_no' => $id,
                    'date' => $entry['date'] ?? null,
                    'account_id' => $entry['supplier'] ?? null,
                    'preparedby' => $entry['prepared_by'] ?? null,
                     'status' => 'unofficial',
                ]);
            }
            $erpParam = ErpParam::first();
            $cashAccId = $erpParam ? $erpParam->cash_acc : null;
            $Salefreight = $erpParam ? $erpParam->sale_freight : null;
            $SalefreightExp = $erpParam ? $erpParam->sale_freight_exp : null;


            if ($entry['freight'] > 0) {
                TRNDTL::update([
                    'v_no' => $id,
                    'date' => $entry['date'] ?? now(),
                    'account_id' => $SalefreightExp,
                    'cash_id' => $Salefreight,
                    'preparedby' => $entry['prepared_by'] ?? null,
                    'credit' => 0,
                    'debit' => $entry['freight'],
                    'status' => 'unofficial',
                    'v_type' => 'CDC',
                    'description' => 'Freight',
                    'r_id' => $id,
                ]);
            }
        } else {
            // Create a new DeliveryDetail record if 'id' is not set (new entry)
            $newConfectioneryDetail = ConfectioneryDetail::create([
                'sequence_no' => $entry['sequence_no'] ?? $index,
                'item_code' => $entry['item'] ?? null,
                'product_name' => $entry['product'] ?? null,
                'po_no' => $entry['po_no'] ?? 0,
                'box' => $entry['box'] ?? 0,
                'pack_qty' => $entry['packing'] ?? 0,
                'total' => $entry['total'] ?? 0,
                'v_no' => $id,
                'freight' => $entry['freight'] ?? 0,
            ]);

            // Create a new DeliveryMaster record for the new DeliveryDetail
            ConfectioneryMaster::create([
                'v_no' => $id,
                'sequence_no' => $entry['sequence_no'] ?? $index,
                'date' =>  Carbon::now(),
                'account_id' => $entry['supplier'] ?? null,
                'preparedby' => $entry['prepared_by'] ?? null,
                 'status' => 'unofficial',
                'confectionery_detail_id' => $newConfectioneryDetail->id,
                'v_type' => 'CDC',
            ]);
            $erpParam = ErpParam::first();
            $cashAccId = $erpParam ? $erpParam->cash_acc : null;
            $Salefreight = $erpParam ? $erpParam->sale_freight : null;
            $SalefreightExp = $erpParam ? $erpParam->sale_freight_exp : null;


            if ($entry['freight'] > 0) {
                TRNDTL::create([
                    'v_no' => $id,
                    'date' => $entry['date'] ?? now(),
                    'account_id' => $SalefreightExp,
                    'cash_id' => $Salefreight,
                    'preparedby' => $entry['prepared_by'] ?? null,
                    'credit' => 0,
                    'debit' => $entry['freight'],
                    'status' => 'unofficial',
                    'v_type' => 'CDC',
                    'description' => 'Freight',
                    'r_id' => $id,
                ]);
            }
        }
    }

    return redirect()->route('confectionery.reports')->with('success', "Voucher No. $id has been Updated successfully.");
}


public function destroy($id)
{
    // Find the ConfectioneryMaster record by ID
    $confectioneryMaster = ConfectioneryMaster::findOrFail($id);
    
    // Get the v_no and confectionery_detail_id from the master record
    $vNo = $confectioneryMaster->v_no;
    $detailId = $confectioneryMaster->confectionery_detail_id;

    // Check billing records first
    if (ConfectBilling::where('old_vno', $vNo)->exists()) {
        return redirect()->back()->with('error', 'Cannot delete record. Delete related billing entries first.');
    }

    // Delete related records
    $confectioneryMaster->confectioneryDetails()->delete();
    
    // Delete TRNDTL records using the detail_id as r_id
    $trndtlDeleted = TRNDTL::where('r_id', $detailId)  // Changed from $id to $detailId
                         ->where('v_no', $vNo)
                         ->where('v_type', 'CDC')
                         ->where('description', 'freight')
                         ->delete();
    
    // Debug output (remove after testing)
    if ($trndtlDeleted === 0) {
        \Log::warning('No TRNDTL records deleted', [
            'detail_id' => $detailId,
            'v_no' => $vNo,
            'exists' => TRNDTL::where('r_id', $detailId)
                           ->where('v_no', $vNo)
                           ->exists()
        ]);
    }

    $confectioneryMaster->delete();

    return redirect()->back()->with('success', 'Record deleted successfully from all tables.');
}

public function delete($id)
{
    
    return $this->destroy($id);
}




public function editCon($v_no)
{
    // 1. Get freight data from TRNDTL
    $freightData = TRNDTL::where('v_no', $v_no)
        ->where('v_type', 'CDC')
        ->where('description', 'freight')
        ->first();
    $freight = $freightData ? $freightData->credit : 0;

    // 2. Get freight_type and sum boxes (FIXED: Use correct model)
    $confectBilling = ConfectioneryDetail::where('v_no', $v_no)->first();
    $freight_type = $confectBilling ? $confectBilling->freight_type : null;

    // 3. Sum boxes (FIXED: Ensure correct model and column)
    $totalbox = ConfectioneryDetail::where('v_no', (string)$v_no)->sum('box');

    return view('sale_reports.editConDc', compact('freight', 'v_no', 'totalbox', 'freight_type'));
}

public function updateCon(Request $request, $id)
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
        $Purfreight = $erpParam->sale_freight;
        $PurfreightExp = $erpParam->sale_freight_exp;
        
        $Salefreight = $erpParam ? $erpParam->sale_freight : null;
        $SalefreightExp = $erpParam ? $erpParam->sale_freight_exp : null;

        // Check if a record with v_type == 'BPN' and description == 'Freight' exists in TRNDTL
        $existingFreight = TRNDTL::where('v_no', $id)
                                 ->where('v_type', 'CDC')
                                 ->where('description', 'Freight')
                                 ->first();

        // Check if a record with vorcher_no == $id exists in PurchaseDetail
        $existingPurchaseDetail = ConfectioneryDetail::where('v_no', $id)->first();

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
                $purchaseDetail = ConfectioneryDetail::create([
                    'v_no' => $id,
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
                    'account_id' => $SalefreightExp,
        'cash_id' => $Salefreight,
                    'preparedby' => Auth::user()->name ?? null,
                    'credit' => $validatedData['total_freight'],
                    'debit' => '0',
                    'status' => 'unofficial',
                    'v_type' => 'CDC',
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

       return redirect()->route('confectionery.reports')->with('success', 'Freight updated successfully for CDC-' . $id);

    } catch (\Exception $e) {
        // Handle any exceptions and return an error message
        return redirect()->route('confectionery.reports')->with('error', 'An error occurred: ' . $e->getMessage());
    }
}



    
        
}
