<?php

namespace App\Http\Controllers;

use App\Models\PurchaseInvoiceFbr;
use App\Services\FbrApiService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class PurchaseInvoicingController extends Controller
{
    private $fbrApiService;

    public function __construct(FbrApiService $fbrApiService)
    {
        $this->middleware('auth');
        $this->fbrApiService = $fbrApiService;
    }

    /**
     * Get FBR API service with user context
     */
    private function getFbrApiService()
    {
        $user = Auth::user();
        return $this->fbrApiService->setUser($user);
    }

    /**
     * Display the purchase invoicing form.
     */
    public function index()
    {
        $user = Auth::user();

        $provinces = [];
        $hsCodes = [];
        $uoMs = [];
        $transactionTypes = [];

        // Fetch FBR data using the helper service if token is available
        if ($user->fbr_access_token) {
            try {
                $fbrService = $this->getFbrApiService();

                // Load provinces
                $provincesResult = $fbrService->getProvinceCodes($user->fbr_access_token);
                if ($provincesResult['success']) {
                    $provinces = $provincesResult['data'] ?? [];
                }

                // Load HS codes
                $hsCodesResult = $fbrService->getItemDescriptionCodes($user->fbr_access_token);
                if ($hsCodesResult['success']) {
                    $hsCodes = $hsCodesResult['data'] ?? [];
                }

                // Load Units of Measurement
                $uoMsResult = $fbrService->getUnitsOfMeasurement($user->fbr_access_token);
                if ($uoMsResult['success']) {
                    $uoMs = $uoMsResult['data'] ?? [];
                }

                // Load Transaction Types
                $transactionTypesResult = $fbrService->getTransactionTypeCodes($user->fbr_access_token);
                if ($transactionTypesResult['success']) {
                    $transactionTypes = $transactionTypesResult['data'] ?? [];
                }
            } catch (\Exception $e) {
                Log::error('Error loading FBR data for purchase invoicing', [
                    'user_id' => $user->id,
                    'error' => $e->getMessage()
                ]);
            }
        }

        return view('purchase-invoicing.index', compact('provinces', 'hsCodes', 'uoMs', 'transactionTypes', 'user'));
    }

    /**
     * Store a new purchase invoice to the database.
     */
    public function store(Request $request)
    {
        $user = Auth::user();

        Log::info('Purchase Invoice store called', [
            'user_id'    => $user->id,
            'input_keys' => array_keys($request->all()),
            'invoice_date' => $request->input('invoiceDate'),
            'invoice_type' => $request->input('invoiceType'),
            'items_count' => count($request->input('items', [])),
        ]);

        $validator = Validator::make($request->all(), [
            'sellerNTNCNIC'           => 'required|string',
            'sellerBusinessName'      => 'required|string',
            'sellerProvince'          => 'required|string',
            'sellerAddress'           => 'required|string',
            'invoiceType'             => 'required|string',
            'invoiceDate'             => 'required|date',
            'buyerNTNCNIC'            => 'required|string',
            'buyerBusinessName'       => 'required|string',
            'buyerProvince'           => 'required|string',
            'buyerRegistrationType'   => 'required|string',
            'buyerAddress'            => 'required|string',
        ]);

        if ($validator->fails()) {
            Log::warning('Purchase Invoice validation failed', [
                'user_id' => $user->id,
                'errors'  => $validator->errors()->toArray(),
                'input'   => $request->except(['items']),
            ]);

            // Build a readable error message listing all failed fields
            $errorMessages = [];
            foreach ($validator->errors()->toArray() as $field => $messages) {
                $errorMessages[] = implode(', ', $messages);
            }

            return response()->json([
                'success' => false,
                'message' => implode(' | ', $errorMessages),
                'errors'  => $validator->errors(),
            ], 422);
        }

        try {
            // Build items from posted form data
            $items = $request->input('items', []);
            if (!is_array($items)) {
                $items = [];
            }

            $invoice = PurchaseInvoiceFbr::create([
                'user_id'                 => $user->id,
                'cid'                     => $user->c_id ?? null,
                'seller_ntn_cnic'         => $request->input('sellerNTNCNIC'),
                'seller_business_name'    => $request->input('sellerBusinessName'),
                'seller_province'         => $request->input('sellerProvince'),
                'seller_address'          => $request->input('sellerAddress'),
                'invoice_type'            => $request->input('invoiceType'),
                'invoice_date'            => $request->input('invoiceDate'),
                'invoice_ref_no'          => $request->input('invoiceRefNo'),
                'buyer_ntn_cnic'          => $request->input('buyerNTNCNIC'),
                'buyer_business_name'     => $request->input('buyerBusinessName'),
                'buyer_province'          => $request->input('buyerProvince'),
                'buyer_registration_type' => $request->input('buyerRegistrationType'),
                'buyer_address'           => $request->input('buyerAddress'),
                'items'                   => $items,
                'expense_col'             => $request->input('furtherexpense', 0) ?: 0,
                'title'                   => 'Purchase Invoice',
            ]);

            Log::info('Purchase Invoice saved', [
                'user_id'    => $user->id,
                'invoice_id' => $invoice->id,
                'items_count' => count($items),
            ]);

            return response()->json([
                'success' => true,
                'message' => 'Purchase Invoice saved successfully.',
                'id'      => $invoice->id,
            ]);

        } catch (\Exception $e) {
            Log::error('Purchase Invoice save failed', [
                'user_id' => $user->id,
                'error'   => $e->getMessage(),
                'trace'   => $e->getTraceAsString(),
            ]);

            return response()->json([
                'success' => false,
                'message' => 'Failed to save purchase invoice: ' . $e->getMessage(),
            ], 500);
        }
    }

    /**
     * List all purchase invoices for current user.
     */
    public function list(Request $request)
    {
        $user = Auth::user();
        $invoices = PurchaseInvoiceFbr::where('user_id', $user->id)
            ->orderBy('created_at', 'desc')
            ->get();

        return response()->json([
            'success'  => true,
            'invoices' => $invoices,
        ]);
    }

    /**
     * Get a single purchase invoice.
     */
    public function show($id)
    {
        $user    = Auth::user();
        $invoice = PurchaseInvoiceFbr::where('id', $id)
            ->where('user_id', $user->id)
            ->firstOrFail();

        return response()->json([
            'success' => true,
            'invoice' => $invoice,
        ]);
    }

    /**
     * Delete a purchase invoice.
     */
    public function destroy($id)
    {
        $user    = Auth::user();
        $invoice = PurchaseInvoiceFbr::where('id', $id)
            ->where('user_id', $user->id)
            ->firstOrFail();

        $invoice->delete();

        return response()->json([
            'success' => true,
            'message' => 'Purchase Invoice deleted successfully.',
        ]);
    }

    /**
     * Display the purchase invoicing form for editing an existing invoice.
     */
    public function edit($id)
    {
        $user = Auth::user();
        $editInvoice = PurchaseInvoiceFbr::where('id', $id)
            ->where('user_id', $user->id)
            ->firstOrFail();

        $provinces = [];
        $hsCodes = [];
        $uoMs = [];
        $transactionTypes = [];

        if ($user->fbr_access_token) {
            try {
                $fbrService = $this->getFbrApiService();

                $provincesResult = $fbrService->getProvinceCodes($user->fbr_access_token);
                if ($provincesResult['success']) {
                    $provinces = $provincesResult['data'] ?? [];
                }

                $hsCodesResult = $fbrService->getItemDescriptionCodes($user->fbr_access_token);
                if ($hsCodesResult['success']) {
                    $hsCodes = $hsCodesResult['data'] ?? [];
                }

                $uoMsResult = $fbrService->getUnitsOfMeasurement($user->fbr_access_token);
                if ($uoMsResult['success']) {
                    $uoMs = $uoMsResult['data'] ?? [];
                }

                $transactionTypesResult = $fbrService->getTransactionTypeCodes($user->fbr_access_token);
                if ($transactionTypesResult['success']) {
                    $transactionTypes = $transactionTypesResult['data'] ?? [];
                }
            } catch (\Exception $e) {
                Log::error('Error loading FBR data for purchase invoicing edit', [
                    'user_id' => $user->id,
                    'error' => $e->getMessage()
                ]);
            }
        }

        return view('purchase-invoicing.index', compact('provinces', 'hsCodes', 'uoMs', 'transactionTypes', 'user', 'editInvoice'));
    }

    /**
     * Update an existing purchase invoice in the database.
     */
    public function update(Request $request, $id)
    {
        $user = Auth::user();

        $invoice = PurchaseInvoiceFbr::where('id', $id)
            ->where('user_id', $user->id)
            ->firstOrFail();

        $validator = Validator::make($request->all(), [
            'sellerNTNCNIC'           => 'required|string',
            'sellerBusinessName'      => 'required|string',
            'sellerProvince'          => 'required|string',
            'sellerAddress'           => 'required|string',
            'invoiceType'             => 'required|string',
            'invoiceDate'             => 'required|date',
            'buyerNTNCNIC'            => 'required|string',
            'buyerBusinessName'       => 'required|string',
            'buyerProvince'           => 'required|string',
            'buyerRegistrationType'   => 'required|string',
            'buyerAddress'            => 'required|string',
        ]);

        if ($validator->fails()) {
            $errorMessages = [];
            foreach ($validator->errors()->toArray() as $field => $messages) {
                $errorMessages[] = implode(', ', $messages);
            }

            return response()->json([
                'success' => false,
                'message' => implode(' | ', $errorMessages),
                'errors'  => $validator->errors(),
            ], 422);
        }

        try {
            $items = $request->input('items', []);
            if (!is_array($items)) {
                $items = [];
            }

            $invoice->update([
                'seller_ntn_cnic'         => $request->input('sellerNTNCNIC'),
                'seller_business_name'    => $request->input('sellerBusinessName'),
                'seller_province'         => $request->input('sellerProvince'),
                'seller_address'          => $request->input('sellerAddress'),
                'invoice_type'            => $request->input('invoiceType'),
                'invoice_date'            => $request->input('invoiceDate'),
                'invoice_ref_no'          => $request->input('invoiceRefNo'),
                'buyer_ntn_cnic'          => $request->input('buyerNTNCNIC'),
                'buyer_business_name'     => $request->input('buyerBusinessName'),
                'buyer_province'          => $request->input('buyerProvince'),
                'buyer_registration_type' => $request->input('buyerRegistrationType'),
                'buyer_address'           => $request->input('buyerAddress'),
                'items'                   => $items,
                'expense_col'             => $request->input('furtherexpense', 0) ?: 0,
            ]);

            return response()->json([
                'success' => true,
                'message' => 'Purchase Invoice updated successfully.',
                'id'      => $invoice->id,
            ]);

        } catch (\Exception $e) {
            Log::error('Purchase Invoice update failed', [
                'user_id' => $user->id,
                'error'   => $e->getMessage(),
            ]);

            return response()->json([
                'success' => false,
                'message' => 'Failed to update purchase invoice: ' . $e->getMessage(),
            ], 500);
        }
    }
}
