<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PayableController extends Controller 
{
    public function index(Request $request)
    {
        // Get the end date input value
        $endDate = $request->get('end_date');

        // Base query
        $balancesQuery = "
            SELECT title, SUM(debit) - SUM(credit) AS bal
            FROM account_masters, transactions
            WHERE id = aid
            and level2_id not in (select cash_level from erp_params union all select bank_level from erp_params)
        ";

        // Initialize an empty bindings array
        $bindings = [];

        // Apply end date filtering on opening_date if provided
        if ($endDate) {
            $balancesQuery .= " AND opening_date <= :endDate";
            $bindings['endDate'] = $endDate;
        }

        // Add the GROUP BY and HAVING clauses
        $balancesQuery .= "
            GROUP BY title
            HAVING SUM(debit) - SUM(credit) < 0
        ";

        // Fetch the balances using DB::select with the prepared bindings
        $balances = DB::select($balancesQuery, $bindings);

        // Pass the data to the view
        return view('payables.list', [
            'balances' => $balances,
            'endDate' => $endDate,
        ]);
    }
}
