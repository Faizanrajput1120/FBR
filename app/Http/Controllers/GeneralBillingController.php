<?php

namespace App\Http\Controllers;

use App\Models\ItemMaster;
use App\Models\ItemType;
use App\Models\ProductMaster;
use App\Models\TRNDTL;
use App\Models\ErpParam;
use Illuminate\Http\Request;
use App\Models\AccountMaster;
use App\Models\GeneralBilling;
use App\Models\GeneralDeliveryChallen;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class GeneralBillingController extends Controller
{
    public function index()
    {
        $loggedInUser = Auth::user();
        $accounts = AccountMaster::whereIn('level2_id', [2, 7])->get();
        $items = ItemType::all();
        $products = ProductMaster::all();

        return view('general_billing.list', compact('loggedInUser', 'accounts', 'items', 'products'));
    }

    public function getVoucherNumbers($partyId)
    {
        try {
            $vouchers = GeneralDeliveryChallen::where('party_id', $partyId)
                ->select('v_no')
                ->distinct()
                ->orderBy('v_no', 'asc')
                ->get()
                ->pluck('v_no');
                
            return response()->json($vouchers);
        } catch (\Exception $e) {
            return response()->json([], 500);
        }
    }

    public function getVoucherDetails($voucherNo)
    {
        try {
            $voucherDetails = GeneralDeliveryChallen::where('v_no', $voucherNo)
                ->select('v_no', 'updated_at', 'party_name', 'gjs_no', 'product_type', 'item_name', 'qty', 'rate', 'freight')
                ->get();
                
            return response()->json([
                'success' => true,
                'data' => $voucherDetails
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Error fetching voucher details'
            ], 500);
        }
    }

    public function checkExistingBillings(Request $request)
    {
        $query = DB::table('general_billings')
            ->where('v_type', 'GB');
        
        if ($request->has('account_id')) {
            $query->where('account_id', $request->account_id);
        }
        
        if ($request->has('v_no')) {
            $query->where('v_no', $request->v_no);
        }
        
        if ($request->has('v_nos')) {
            $query->whereIn('v_no', (array)$request->v_nos);
        }
        
        return response()->json($query->get(['v_no']));
    }

    public function store(Request $request)
    {
        $validated = $this->validateRequest($request);
        
        DB::beginTransaction();

        try {
            $billingNo = $this->getNextBillingNumber();
            $accountId = $validated['account'];
            $initialBalance = $this->getAccountBalance($accountId);
            $generalBilling = null;

            foreach ($validated['entries'] as $entry) {
                $generalBilling = $this->createBillingEntry(
                    $validated, $entry, $billingNo, $accountId, $initialBalance
                );
            }

            $this->createTransactionRecord(
                $validated, $accountId, $generalBilling, $initialBalance
            );
            
            DB::commit();

            return redirect()->route('general_billing.report')->with([
                'success' => 'General Billing created successfully!',
                'billing_no' => $billingNo
            ]);
        } catch (\Exception $e) {
            DB::rollBack();
            return back()->with('error', 'Failed to create General Billing: ' . $e->getMessage());
        }
    }

    protected function validateRequest(Request $request): array
    {
        return $request->validate([
            'date' => 'required|date',
            'prepared_by' => 'required|string',
            'account' => 'required|exists:account_masters,id',
            'v_type' => 'required|string',
            'total_amount' => 'required|numeric',
            'entries' => 'required|array',
            'entries.*.date' => 'required|date',
            'entries.*.product_type' => 'required|string',
            'entries.*.item_name' => 'required|string',
            'entries.*.qty' => 'required|numeric',
            'entries.*.rate' => 'required|numeric',
            'entries.*.amount' => 'required|numeric',
        ]);
    }

    protected function getNextBillingNumber(): int
    {
        $lastBilling = GeneralBilling::orderByDesc('billing_no')->first();
        return $lastBilling ? $lastBilling->billing_no + 1 : 1;
    }

    protected function createBillingEntry(array $validated, array $entry, int $billingNo, int $accountId, float $preBal): GeneralBilling
    {
        $initials = $this->generatePartyTypeInitials($validated['prepared_by']);
        $partyNo = $this->getNextPartyNumber($accountId, $validated['prepared_by']);
        $maxId = GeneralBilling::max('id');
$nextId = $maxId ? $maxId + 1 : 1;
        return GeneralBilling::create([
            'id'=>$nextId,
            'billing_no' => $billingNo,
            'date' => $validated['date'],
            'v_no' => $entry['v_no'] ?? null,
            'v_type' => 'GB',
            'party_name' => $validated['prepared_by'],
            'party_type' => $initials,
            'party_no' => $partyNo,
            'gjs_no' => $entry['gjs_no'] ?? null,
            'product_type' => $entry['product_type'],
            'item_name' => $entry['item_name'],
            'qty' => $entry['qty'],
            'rate' => $entry['rate'],
            'freight' => $entry['freight'] ?? 0,
            'amount' => $entry['amount'],
            'total_amount' => $validated['total_amount'],
            'prepared_by' => auth()->user()->name ?? null,
            'account_id' => $accountId,
            'pre_bal' => $preBal,
        ]);
    }

    protected function generatePartyTypeInitials(string $partyName): string
    {
        $initials = '';
        $words = preg_split('/\s+/', $partyName);
        
        foreach ($words as $word) {
            if (!empty($word)) {
                $initials .= strtoupper(substr($word, 0, 1));
            }
        }
        
        return $initials;
    }

    protected function getNextPartyNumber(int $accountId, string $partyName): int
    {
        static $partyNumbersCache = [];
        
        $cacheKey = $accountId . '_' . $partyName;
        
        if (!isset($partyNumbersCache[$cacheKey])) {
            $lastParty = GeneralBilling::where('account_id', $accountId)
                ->where('party_name', $partyName)
                ->orderByDesc('party_no')
                ->first();
                
            $partyNumbersCache[$cacheKey] = $lastParty ? $lastParty->party_no + 1 : 1;
        }
        
        return $partyNumbersCache[$cacheKey];
    }

    protected function createTransactionRecord(array $validated, int $accountId, GeneralBilling $generalBilling, float $preBal): void
    {
        $saleAccountId = optional(ErpParam::first())->sale_ac;

        TRNDTL::create([
            'v_no' => $generalBilling->party_no,
            'date' => now(),
            'description' => 'General-Bill',
            'account_id' => $accountId,
            'cash_id' => $saleAccountId,
            'preparedby' => auth()->user()->name,
            'credit' => 0,
            'debit' => $validated['total_amount'],
            'status' => 'unofficial',
            'v_type' => 'GB',
            'r_id' => $generalBilling->id,
            'pre_bal' => $preBal,
        ]);
    }

    protected function getAccountBalance(int $accountId): float
    {
        return DB::table('t_r_n_d_t_l_s')
            ->selectRaw('IFNULL(SUM(debit), 0) - IFNULL(SUM(credit), 0) as pre_bal')
            ->where('account_id', $accountId)
            ->value('pre_bal') ?? 0;
    }

    public function report(Request $request)
    {
        $query = GeneralBilling::with('account');
        
        if ($request->has('start_date') && $request->start_date != '') {
            $query->whereDate('created_at', '>=', $request->start_date);
        }
        
        if ($request->has('end_date') && $request->end_date != '') {
            $query->whereDate('created_at', '<=', $request->end_date);
        }
        
        if ($request->has('status') && $request->status != '') {
            $query->where('status', $request->status);
        }
        
        if ($request->has('billing_no') && $request->billing_no != '') {
            $query->where('party_no', $request->billing_no);
        }
        
        if ($request->has('product_type') && $request->product_type != '') {
            $query->where('product_type', $request->product_type);
        }
        
        if ($request->has('party_name') && $request->party_name != '') {
            $query->where('party_name', $request->party_name);
        }
        
        $generalBillings = $query->get();
        
        return view('general_billing.index', compact('generalBillings'));
    }

    public function destroy($id)
    {
        DB::beginTransaction();

        try {
            $billing = GeneralBilling::findOrFail($id);
            
            TRNDTL::where('v_type', 'GB')
                  ->where('r_id', $billing->id)
                  ->delete();
            
            $billing->delete();
            
            DB::commit();

            return redirect()->route('general_billing.report')->with([
                'success' => 'General Billing entry deleted successfully!',
                'billing_no' => $billing->billing_no
            ]);
        } catch (\Exception $e) {
            DB::rollBack();
            return back()->with('error', 'Failed to delete General Billing: ' . $e->getMessage());
        }
    }
}
