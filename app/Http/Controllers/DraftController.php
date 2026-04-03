<?php

namespace App\Http\Controllers;

use App\Models\DraftInvoice;
use App\Models\Buyer;
use Illuminate\Http\Request;
use App\Services\FbrApiService;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
class DraftController extends Controller
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

    public function index(Request $request)
    {
        $user = Auth::user();
        $search = $request->input('search');
        $query = DraftInvoice::where('user_id', $user->id)->where( 'cid',$user->c_id);
        if ($search) {
            $query->where(function($q) use ($search) {
                $q->where('title', 'like', "%$search%")
                  ->orWhere('buyer_business_name', 'like', "%$search%")
                  ->orWhere('buyer_ntn_cnic', 'like', "%$search%")
                  ->orWhere('invoice_ref_no', 'like', "%$search%")
                ;
            });
        }
        $drafts = $query->orderByDesc('created_at')->paginate(12)->appends(['search' => $search]);
        return view('draftinvoicing.index', compact('drafts', 'user', 'search'));
    }


public function saveDraft(Request $request)
{
    $user = Auth::user();

    // Validate request
    $validated = $request->validate([
        'sellerNTNCNIC' => 'nullable|string|max:50',
        'sellerBusinessName' => 'required|string|max:255',
        'sellerProvince' => 'required|string|max:100',
        'sellerAddress' => 'nullable|string|max:500',
        'invoiceType' => 'required|string|max:100',
        'invoiceDate' => 'required|date',
        'invoiceRefNo' => 'nullable|string|max:100',
        'buyerNTNCNIC' => 'nullable|string|max:50',
        'buyerBusinessName' => 'required|string|max:255',
        'buyerProvince' => 'required|string|max:100',
        'buyerRegistrationType' => 'required|string|max:100',
        'buyerAddress' => 'nullable|string|max:500',
        'items' => 'required|array|min:1',
        'items.*.hsCode' => 'nullable|string|max:50',
        'items.*.productDescription' => 'nullable|string|max:500',
        'items.*.rate' => 'nullable|string|max:20',
        'items.*.saleType' => 'nullable|string|max:100',
        'items.*.uoM' => 'nullable|string|max:50',
        'items.*.quantity' => 'nullable|string|max:50',
        'items.*.totalValues' => 'nullable|string|max:50',
        'items.*.valueSalesExcludingST' => 'nullable|string|max:50',
        'items.*.furtherTax' => 'nullable',
        'items.*.salesTaxApplicable' => 'nullable|string|max:50',
        'items.*.sroScheduleNo' => 'nullable|string|max:255',
    ]);

    // Update or create buyer if NTN/CNIC is provided
//  if (!empty($validated['buyerNTNCNIC'])) {
//     $exist = Buyer::where('ntn_cnic', $validated['buyerNTNCNIC'])->first();

//     if (!$exist) {
//         $data = [
//             'cid' => $user->c_id,
//             'user_id'=> $user->id,
//             'ntn_cnic' => $validated['buyerNTNCNIC'],
//             'business_name' => $validated['buyerBusinessName'],
//             'address' => $validated['buyerAddress'] ?? null,
//             'registration_type' => $validated['buyerRegistrationType'],
//             'province' => $validated['buyerProvince'],
//         ];
//         Buyer::create($data);
//     }
// }


    // Prepare draft data
    $draftData = [
        'user_id' => $user->id,
        'cid' => $user->c_id,
        'title' => 'Draft Invoice - ' . now()->format('Y-m-d H:i:s'),
        'notes' => null,
        'seller_ntn_cnic' => $validated['sellerNTNCNIC'] ?? null,
        'seller_business_name' => $validated['sellerBusinessName'],
        'seller_province' => $validated['sellerProvince'],
        'seller_address' => $validated['sellerAddress'] ?? null,
        'invoice_type' => $validated['invoiceType'],
        'invoice_date' => $validated['invoiceDate'],
        'invoice_ref_no' => $validated['invoiceRefNo'] ?? null,
        'buyer_ntn_cnic' => $validated['buyerNTNCNIC'] ?? null,
        'buyer_business_name' => $validated['buyerBusinessName'],
        'buyer_province' => $validated['buyerProvince'],
        'buyer_registration_type' => $validated['buyerRegistrationType'],
        'buyer_address' => $validated['buyerAddress'] ?? null,
        'items' => $validated['items'], // Make sure DraftInvoice model casts 'items' as array
        'status' => 0, // 0 = incomplete draft
     'expense_col'=>$request->input('furtherexpense'),
    ];

    // Create draft invoice
    $draft = DraftInvoice::create($draftData);

    return response()->json([
        'success' => true,
        'message' => 'Draft saved successfully.',
        'draft' => $draft->fresh(),
    ]);
}


    // Show the edit form for a draft invoice
    public function edit($id)
    {
        $draftInvoice = DraftInvoice::where('user_id', Auth::id())->findOrFail($id);
        $user = Auth::user();

         // dd("WORKING");
        // Load data from FBR API
        $provinces = [];
        $hsCodes = [];
        $uoMs = [];
        $transactionTypes = [];
        try {
            $fbrService = $this->getFbrApiService();

            // Load provinces
            $provincesResult = $fbrService->getProvinceCodes($user->fbr_access_token);
            if ($provincesResult['success']) {
                $provinces = $provincesResult['data'] ?? [];
            }

            // Load HS codes (Item Description Codes)
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
            Log::error('Error loading FBR data', [
                'user_id' => $user->id,
                'error' => $e->getMessage()
            ]);
        }

        return view('draftinvoicing.edit', compact(
            'draftInvoice',
            'user',
            'provinces',
            'hsCodes',
            'uoMs',
            'transactionTypes'
        ));
    }

    // Update the draft invoice
    public function update(Request $request, $id)
    {
        $draftInvoice = DraftInvoice::where('user_id', Auth::id())->findOrFail($id);
        // dd($request->items);
        $data = $request->all();
        // Map form fields to DB columns
        $draftInvoice->title = $data['title'] ?? null;
        $draftInvoice->notes = $data['notes'] ?? null;
        $draftInvoice->seller_ntn_cnic = $data['sellerNTNCNIC'] ?? null;
        $draftInvoice->seller_business_name = $data['sellerBusinessName'] ?? null;
        $draftInvoice->seller_province = $data['sellerProvince'] ?? null;
        $draftInvoice->seller_address = $data['sellerAddress'] ?? null;
        $draftInvoice->invoice_type = $data['invoiceType'] ?? null;
        $draftInvoice->invoice_date = $data['invoiceDate'] ?? null;
        $draftInvoice->invoice_ref_no = $data['invoiceRefNo'] ?? null;
        $draftInvoice->scenario_id = $data['scenarioId'] ?? null;
        $draftInvoice->buyer_ntn_cnic = $data['buyerNTNCNIC'] ?? null;
        $draftInvoice->buyer_business_name = $data['buyerBusinessName'] ?? null;
        $draftInvoice->buyer_province = $data['buyerProvince'] ?? null;
        $draftInvoice->buyer_registration_type = $data['buyerRegistrationType'] ?? null;
        $draftInvoice->buyer_address = $data['buyerAddress'] ?? null;
        $draftInvoice->items = $request->items;
        $draftInvoice->expense_col=$request->furtherexpense;
        $draftInvoice->save();

        return response()->json(['success' => true, 'message' => 'Draft updated successfully']);
    }

    // Submit the draft as a final invoice (stub)
    public function submit($id)
    {
        // Implement your logic to submit the draft as a final invoice
        // For now, just return a success response
        return response()->json(['success' => true, 'message' => 'Invoice submitted']);
    }
  public function destroy($id)
{
    // Find the draft invoice for the logged-in user
    // dd("WORKING");
    $draftInvoice = DraftInvoice::where('user_id', Auth::id())
        ->where('id', $id)
        ->firstOrFail();

    // Delete the draft
    $draftInvoice->delete();

    // If API request, return JSON response
    if (request()->wantsJson()) {
        return response()->json([
            'success' => true,
            'message' => 'Draft invoice deleted successfully'
        ]);
    }

    // Otherwise, redirect for web requests
    return redirect()
        ->route('drafts.index')
        ->with('success', 'Draft invoice deleted successfully.');
}

}