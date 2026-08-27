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
            return response()->json([
                'success' => false,
                'message' => 'Validation failed.',
                'errors'  => $validator->errors(),
            ], 422);
        }

        try {
            // Build items from posted form data
            $items = [];
            if ($request->has('items') && is_array($request->items)) {
                $items = $request->items;
            }

            $invoice = PurchaseInvoiceFbr::create([
                'user_id'                 => $user->id,
                'cid'                     => $user->cid ?? null,
                'seller_ntn_cnic'         => $request->sellerNTNCNIC,
                'seller_business_name'    => $request->sellerBusinessName,
                'seller_province'         => $request->sellerProvince,
                'seller_address'          => $request->sellerAddress,
                'invoice_type'            => $request->invoiceType,
                'invoice_date'            => $request->invoiceDate,
                'invoice_ref_no'          => $request->invoiceRefNo,
                'buyer_ntn_cnic'          => $request->buyerNTNCNIC,
                'buyer_business_name'     => $request->buyerBusinessName,
                'buyer_province'          => $request->buyerProvince,
                'buyer_registration_type' => $request->buyerRegistrationType,
                'buyer_address'           => $request->buyerAddress,
                'items'                   => $items,
                'expense_col'             => $request->furtherexpense ?? 0,
                'title'                   => 'Purchase Invoice',
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
}
