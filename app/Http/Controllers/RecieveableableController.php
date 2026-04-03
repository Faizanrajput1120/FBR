<?php
namespace App\Http\Controllers;

use App\Models\TRNDTL;
use Illuminate\Http\Request;
use App\Models\AccountMaster;
use Illuminate\Support\Facades\DB;

class RecieveableableController extends Controller
{
    public function index(Request $request)
    {
        // Get the end date and account title filter
        $endDate = $request->get('end_date');
        $accountId = $request->get('account_title');

        // Base query for receivables
        $balancesQuery = "
            SELECT title, SUM(debit) - SUM(credit) AS bal
            FROM account_masters, transactions
            WHERE id = aid
            and level2_id not in (select cash_level from erp_params union all select bank_level from erp_params)
          
        ";

        // Initialize bindings array
        $bindings = [];

        // Apply the end date filter if provided
        if ($endDate) {
            $balancesQuery .= " AND opening_date <= :endDate";
            $bindings['endDate'] = $endDate;
        }

        // Apply account filter if provided
        if ($accountId) {
            $balancesQuery .= " AND id = :accountId";
            $bindings['accountId'] = $accountId;
        }

        // Group and filter to show only negative balances (receivables)
        $balancesQuery .= "
            GROUP BY title
            HAVING SUM(debit) - SUM(credit) > 0
        ";

        // Execute the query with bindings
        $balances = DB::select($balancesQuery, $bindings);

        // Pass data to the view
        return view('recieveables.list', [
            'balances' => $balances,
            'accounts' => AccountMaster::all(),
            'accountTitle' => $accountId ? AccountMaster::find($accountId)->title : 'All Accounts',
            'endDate' => $endDate,
        ]);
    }
}
