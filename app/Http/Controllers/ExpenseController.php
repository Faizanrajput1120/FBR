<?php

namespace App\Http\Controllers;

use App\Models\TRNDTL;
use App\Models\ChequeMaster;
use Illuminate\Http\Request;
use App\Models\AccountMaster;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Auth;
class ExpenseController extends Controller
{


public function reports(Request $request)
{
    $user=Auth::user();
      $firstDayOfMonth = Carbon::now()->firstOfMonth()->format('Y-m-d');
    $latestDate = DB::table('t_r_n_d_t_l_s')->max('date');

    $query = DB::table('t_r_n_d_t_l_s as t')
        ->join('account_masters as a', 't.account_id', '=', 'a.id')
        ->join('level2s as c', 'a.level2_id', '=', 'c.id')
        ->join('level1s as g', 'c.level1_id', '=', 'g.id')
        ->whereIn('g.group_id', [2, 5]) // Filter expense group
        ->select(
            DB::raw('MAX(t.date) as latest_date'),
            'c.title',
            'a.title as account_title',
            DB::raw('SUM(t.debit) as total_amount')
        )
        ->where('t.c_id',$user->c_id)
        ->groupBy('c.title', 'a.title', 'a.id')
        ->orderByDesc('latest_date');
    
    // Filter by date range
    if ($request->filled('start_date') && $request->filled('end_date')) {
        $query->whereBetween('t.date', [
            Carbon::parse($request->start_date)->format('Y-m-d'),
            Carbon::parse($request->end_date)->format('Y-m-d')
        ]);
    } else {
        $query->whereBetween('t.date', [$firstDayOfMonth, $latestDate]);
    }

    // Filter by status
    if ($request->filled('status')) {
        $query->where('t.status', $request->status);
    }

    // Filter by Level 2 title
    if ($request->filled('level2_title')) {
        $query->where('c.title', $request->level2_title);
    }
    
    $result = $query->get();
    // dd($result);
    $level2Titles = DB::table('level2s')->pluck('title')->unique();

    return view('expense.index', compact('result', 'level2Titles'));
}


}
