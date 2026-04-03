<?php

namespace App\Http\Controllers\account;

use App\Models\Group;
use App\Models\Level1;
use App\Models\Level2;
use App\Models\Level3;
use Illuminate\Http\Request;
use App\Models\AccountMaster;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Auth;


class AccountMasterController extends Controller
{
public function index(Request $request)
{
    $user = Auth::user();

    // Fetch Level2s filtered by c_id
    $level2s = \App\Models\Level2::where('c_id', $user->c_id)->get();

    // Build query for AccountMaster filtered by c_id
    $query = AccountMaster::with('level2s')->where('c_id', $user->c_id);

    // Apply filters if any
    if ($request->filled('title')) {
        $query->where('title', 'like', '%' . $request->title . '%');
    }

    if ($request->filled('level2_id')) {
        $query->where('level2_id', $request->level2_id);
    }

    $account_masters = $query->get();

    // Fetch groups without c_id filter (fetch all)
    $groups = Group::with([
    'level1s' => function ($q) use ($user) {
        $q->where('c_id', $user->c_id)
          ->with([
              'level2s' => function ($q2) use ($user) {
                  $q2->where('c_id', $user->c_id)
                      ->with([
                          'accountMasters' => function ($q3) use ($user) {
                              $q3->where('c_id', $user->c_id);
                          }
                      ]);
              }
          ]);
    }
])->get();
    // dd($groups);
    // Fetch distinct titles and level2_ids filtered by c_id
    $titles = AccountMaster::where('c_id', $user->c_id)->distinct()->pluck('title');
    $level2_ids = AccountMaster::where('c_id', $user->c_id)->distinct()->pluck('level2_id');

    return view('accounts.account_master.list', compact(
        'account_masters',
        'groups',
        'titles',
        'level2_ids',
        'level2s'
    ));
}



    public function create()
    {
        
        $user=Auth::user();
        $level2s = Level2::where('c_id',$user->c_id)->get();
        return view('accounts.account_master.create', compact('level2s'));
    }

    public function store(Request $request)
    {
        $user=Auth::user();
        $request->validate([
            'title' => 'required|string|max:255',
            'level2_id' => 'required|exists:level2s,id',
            'opening_date' => 'required|date',
        ]);

        $lastLevel = AccountMaster::where('level2_id', $request->level2_id)
            ->orderBy('id', 'desc')
            ->first();

        $newCode = $lastLevel ? str_pad((int)$lastLevel->account_code + 1, 4, '0', STR_PAD_LEFT) : '0001';

        if ($newCode === null) {
            return back()->withErrors(['level1_code' => 'Failed to generate a valid level1_code']);
        }

        AccountMaster::create([
            'title' => $request->title,
            'level2_id' => $request->level2_id,
            'opening_date' => $request->opening_date,
            'account_code' => $newCode,
            'c_id'=>$user->c_id
        ]);

        return redirect()->route('amaster.list')->with('success', 'Account created successfully.');
    }

    public function edit($id)
    {
        $account_masters = AccountMaster::findOrFail($id);
        $level2s = Level2::all();
        $selectedGroup = $account_masters->level2_id;
        return view('accounts.account_master.edit', compact('account_masters', 'level2s', 'selectedGroup'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'opening_date' => 'required|date',
            'level2_id' => 'required|exists:level2s,id',
        ]);

        try {
            $level2 = AccountMaster::findOrFail($id);
            $level2->title = $request->input('title');
            $level2->opening_date = $request->input('opening_date');
            $level2->level2_id = $request->input('level2_id');
            $level2->save();

            return redirect()->route('amaster.list')->with('success', 'Account updated successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error updating account: ' . $e->getMessage());
        }
    }

    public function destroy($id)
{
    // Find the account master record
    $account_master = AccountMaster::findOrFail($id);

    // Check if the account is used in ERP parameters
    $isUsedInPurchaseAccount = DB::table('erp_params')->where('purchase_account', $id)->exists();
    $isUsedInSaleAccount = DB::table('erp_params')->where('sale_ac', $id)->exists();

    // If the account is used, prevent deletion and return a message
    if ($isUsedInPurchaseAccount || $isUsedInSaleAccount) {
        return redirect()->route('amaster.list')->with('error', 'The "' . $account_master->title . '" is used in ERP parameters. To delete, you must first remove it from ERP parameters.');
    }

    // Proceed with deletion
    $account_master->delete();

    return redirect()->route('amaster.list')->with('success', 'Account Master deleted successfully');
}


    public function reports()
    {
        $groups = Group::with('level1s.level2s.AccountMasters')->get(); // Fetch groups data
        return view('account_reports.account', compact('groups'));
    }
}
