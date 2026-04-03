<?php

namespace App\Http\Controllers;

use App\Models\ItemType;
use Illuminate\Http\Request;
use App\Models\AccountMaster;
use App\Models\SaleInvoice;
use App\Models\DeliveryDetail;
use App\Models\DeliveryMaster;
use App\Models\ProductMaster;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Models\ErpParam;
use App\Models\TRNDTL;

use Carbon\Carbon;

class DeliveryChallanController extends Controller
{
    public function index()
    {
        $loggedInUser = Auth::user();
        $accounts = AccountMaster::all();
        $items = ItemType::all();
        $product = ProductMaster::all();
        return view('sales.delivery_challan.list',get_defined_vars());
    }
    
    
public function getProducts($partyId)
{
    $products = ProductMaster::where('aid', $partyId)->get();
    return response()->json($products);
}

public function store(Request $request)
{
    $maxVno = DeliveryMaster::where('v_type', 'PDC')
        ->max('v_no');

if (is_numeric($maxVno)) {
    $newInvoiceNumber = (int) $maxVno + 1;
} else {
    $newInvoiceNumber = 1; 
}
        
  
    foreach ($request->entries as $index => $entry) {
        $deliveryDetail = DeliveryDetail::create([
            'v_no' => $newInvoiceNumber,
            'item_code' => $entry['item'] ?? null,
            'product_name' => $entry['product'] ?? null,
            'batch_no' => $entry['batch_no'] ?? 0,
            'box' => $entry['box'] ?? 0,
            'pack_qty' => $entry['packing'] ?? 0,
            'total' => $entry['total'] ?? 0,
            'freight' => $entry['freight'] ?? 0,
        ]);

        DeliveryMaster::create([
            'v_no' => $newInvoiceNumber,
            'date' => Carbon::now(),
            'account_id' => $entry['supplier'] ?? null,
            'preparedby' => $entry['prepared_by'] ?? null,
            'status' => 'unofficial',
            'v_type' => 'PDC',
            'delivery_detail_id' => $deliveryDetail->id,
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
        'v_type' => 'PDC',
        'r_id' => $deliveryDetail->id,
        'description' => 'Freight',
    ]);
}

    }

    return redirect()->route('delivery_challan.reports')->with('success', "Voucher No. $newInvoiceNumber has been created successfully.");
}




public function reports(Request $request)
{
    $products = ProductMaster::all();

    // Get unique item codes from the DeliveryDetail table
    $itemCodes = DeliveryDetail::distinct()->pluck('item_code');
    $account = DeliveryMaster::distinct()->pluck('account_id');

    // Fetch only ItemType entries that are referenced in the DeliveryDetail table
    $items = ItemType::whereIn('id', $itemCodes)->get();
    $accounts = AccountMaster::whereIn('id', $account)->get();

    $startDate = $request->input('start_date');
    $endDate = $request->input('end_date');
    $status = $request->input('status');
    $itemId = $request->input('item'); // New item filter
    $accountId = $request->input('account'); // New item filter
    $po = $request->input('batch_no'); // New PO filter
    $v_no = $request->input('v_no');

    // Get unique P.O numbers
    $poNumbers = DeliveryDetail::distinct()->pluck('batch_no');

    // Build the query with date range, status, item, and PO filters
    $query = DeliveryMaster::with('deliveryDetails');

    if ($startDate && $endDate) {
        $query->whereBetween('date', [$startDate, $endDate]);
    }

    if ($status) {
        $query->where('status', $status);
    }

    if ($itemId) {
        $query->whereHas('deliveryDetails', function ($q) use ($itemId) {
            $q->where('item_code', $itemId); // Match item_code instead of type_title
        });
    }
    
    if ($accountId) {
        $query->whereHas('deliveryDetails', function ($q) use ($accountId) {
            $q->where('account_id', $accountId); // Match item_code instead of type_title
        });
    }

    if ($po) {
        $query->whereHas('deliveryDetails', function ($q) use ($po) {
            $q->where('batch_no', $po);
        });
    }

    if ($v_no) {
        $query->whereHas('deliveryDetails', function ($q) use ($v_no) {
            $q->where('v_no', $v_no);
        });
    }

    
    
    $trndtl = $query->orderByRaw('CAST(date AS DATE) DESC')
        ->orderByRaw('CAST(v_no AS SIGNED) DESC')
        ->orderBy('id', 'desc')
        ->get();

    $accountMasters = AccountMaster::all();
    $vNoList = DeliveryMaster::pluck('v_no')->unique()->toArray();

    return view('sale_reports.index', [
        'trndtl' => $trndtl,
        'startDate' => $startDate,
        'endDate' => $endDate,
        'status' => $status,
        'accountMasters' => $accountMasters,
        'items' => $items,
        'accounts' => $accounts,
        'products' => $products,
        'itemId' => $itemId, 
        'po' => $po,
        'vNoList' => $vNoList,
        'poNumbers' => $poNumbers,
    ]);
}




public function edit($v_no)
{
    // Check if any records in confect_billings have the same old_vno as v_no
    $relatedBilling = SaleInvoice::where('old_vno', $v_no)->exists();

    if ($relatedBilling) {
        // Redirect back with an error message if related billing records exist
        return redirect()->back()->with('error', 'Cannot edit the record. Please delete related billing entries first.');
    }

    // Find the voucher and its entries by voucher number (v_no)
    $loggedInUser = Auth::user();
    $voucher = DeliveryMaster::where('v_no', $v_no)->get(); // Fetch all entries for this voucher

    // Fetch account master data for dropdowns
    $accounts = AccountMaster::all();

    $items = ItemType::all();
    $product = ProductMaster::all();

    // Pass the voucher and entries to the view
    return view('sale_reports.edit', get_defined_vars());
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
            $deliveryDetail = DeliveryDetail::find($entry['id']);
            $deliveryMaster = DeliveryMaster::where('delivery_detail_id', $entry['id'])
                                            ->where('v_no', $id)
                                            ->first();
                                            
             $trndtl = TRNDTL::where('v_no', $id)
                            ->where('v_type', 'PDC')
                            ->where('debit', 0)
                            ->first();

            // Update the existing DeliveryDetail record
            if ($deliveryDetail) {
                $deliveryDetail->update([
                    'v_no' => $id,
                    'item_code' => $entry['item'] ?? null,
                    'product_name' => $entry['product'] ?? null,
                    'batch_no' => $entry['batchNo'] ?? 0,
                    'box' => $entry['box'] ?? 0,
                    'pack_qty' => $entry['packing'] ?? 0,
                    'total' => $entry['total'] ?? 0,
                    'freight' => $entry['freight'] ?? 0,
                    
                ]);
            }

            // Update the existing DeliveryMaster record
            if ($deliveryMaster) {
                $deliveryMaster->update([
                    'v_no' => $id,
                    'date' => $entry['date'] ?? null,
                    'account_id' => $entry['supplier'] ?? null,
                    'preparedby' => $entry['prepared_by'] ?? null,
                     'status' => 'unofficial',
                      'v_type' => 'PDC',
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
                    'v_type' => 'PDC',
                    'description' => 'Freight',
                    'r_id' => $id
                ]);
            }
        } else {
            // Create a new DeliveryDetail record if 'id' is not set (new entry)
            $newDeliveryDetail = DeliveryDetail::create([
                'sr' => $entry['sr_no'] ?? 0,
                'item_code' => $entry['item'] ?? null,
                'product_name' => $entry['product'] ?? null,
                'po_no' => $entry['po'] ?? 0,
                'box' => $entry['box'] ?? 0,
                'pack_qty' => $entry['packing'] ?? 0,
                'batch_no' => $entry['batchNo'] ?? 0,
                'total' => $entry['total'] ?? 0,
                'v_no' => $id,
                'freight' => $entry['freight'] ?? 0,
            ]);

            // Create a new DeliveryMaster record for the new DeliveryDetail
            DeliveryMaster::create([
                'v_no' => $id,
                'sr' => $entry['sr_no'] ?? 0,
                'date' => $entry['date'],
                'account_id' => $entry['supplier'] ?? null,
                'preparedby' => $entry['prepared_by'] ?? null,
                'status' => 'unofficial',
                'v_type' => 'PDC',
                'delivery_detail_id' => $newDeliveryDetail->id,
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
                    'v_type' => 'PDC',
                    'description' => 'Freight',
                    'r_id' => $id,
                    
                    
                ]);
            }
        }
    }

    return redirect()->route('delivery_challan.reports')->with('success', 'Voucher updated successfully.');
}


public function destroy($id)
{
    // Find the ConfectioneryMaster record by ID
    $confectioneryMaster = deliveryMaster::findOrFail($id);
    
    // Get the v_no and confectionery_detail_id from the master record
    $vNo = $confectioneryMaster->v_no;
    $detailId = $confectioneryMaster->delivery_detail_id;

    // Check billing records first
    if (SaleInvoice::where('old_vno', $vNo)->exists()) {
        return redirect()->back()->with('error', 'Cannot delete record. Delete related billing entries first.');
    }

    // Delete related records
    $confectioneryMaster->deliveryDetails()->delete();
    
    // Delete TRNDTL records using the detail_id as r_id
    $trndtlDeleted = TRNDTL::where('r_id', $detailId)  // Changed from $id to $detailId
                         ->where('v_no', $vNo)
                         ->where('v_type', 'PDC')
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
        ->where('v_type', 'PDC')
        ->where('description', 'freight')
        ->first();
    $freight = $freightData ? $freightData->credit : 0;

    // 2. Get freight_type and sum boxes (FIXED: Use correct model)
    $confectBilling = DeliveryDetail::where('v_no', $v_no)->first();
    $freight_type = $confectBilling ? $confectBilling->freight_type : null;

    // 3. Sum boxes (FIXED: Ensure correct model and column)
    $totalbox = DeliveryDetail::where('v_no', (string)$v_no)->sum('box');

    return view('sale_reports.editDelDc', compact('freight', 'v_no', 'totalbox', 'freight_type'));
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
                                 ->where('v_type', 'PDC')
                                 ->where('description', 'Freight')
                                 ->first();

        // Check if a record with vorcher_no == $id exists in PurchaseDetail
        $existingPurchaseDetail = DeliveryDetail::where('v_no', $id)->first();

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
                $purchaseDetail = DeliveryDetail::create([
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
                    'v_type' => 'PDC',
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

       return redirect()->route('delivery_challan.reports')->with('success', 'Freight updated successfully for PDC-' . $id);

    } catch (\Exception $e) {
        // Handle any exceptions and return an error message
        return redirect()->route('delivery_challan.reports')->with('error', 'An error occurred: ' . $e->getMessage());
    }
}





}
