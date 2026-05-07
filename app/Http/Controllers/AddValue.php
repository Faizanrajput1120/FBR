<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
class AddValue extends Controller{
    public function updateCompanyIdForAllTables($companyId)
{
    // Get all tables in the current database
    $tables = DB::select('SHOW TABLES');

    // Database name from config
    $connection = config('database.default');
    $dbName = config("database.connections.$connection.database");

    foreach ($tables as $tableObj) {
        $tableName = array_values((array)$tableObj)[0];

        // Skip tables you don't want to update, like migrations, companies, etc.
        if (in_array($tableName, ['migrations', 'companies'])) {
            continue;
        }

        // Check if table has column c_id
        if (Schema::hasColumn($tableName, 'c_id')) {
            try {
                // Update c_id for all rows where c_id is null (optional)
                DB::table($tableName)
                  ->whereNull('c_id')
                  ->update(['c_id' => $companyId]);

                echo "Updated c_id in table: $tableName\n";
            } catch (\Exception $e) {
                echo "Failed to update table $tableName: " . $e->getMessage() . "\n";
            }
        }
    }
}
}
