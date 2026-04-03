<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        $tables = DB::select('SHOW TABLES');
        $columnName = 'c_id';
        $connection = config('database.default');
        $dbName = config("database.connections.$connection.database");

        foreach ($tables as $tableObj) {
            $table = array_values((array)$tableObj)[0];

            if (in_array($table, ['migrations', 'companies'])) continue;

            if (!Schema::hasColumn($table, $columnName)) {
                Schema::table($table, function (Blueprint $tableBlueprint) use ($columnName) {
                    $tableBlueprint->unsignedBigInteger($columnName)->nullable();
                });
            }

            $hasForeign = DB::select("
                SELECT *
                FROM information_schema.KEY_COLUMN_USAGE
                WHERE TABLE_SCHEMA = ? AND TABLE_NAME = ? AND COLUMN_NAME = ? AND REFERENCED_TABLE_NAME IS NOT NULL
            ", [$dbName, $table, $columnName]);

            if (empty($hasForeign)) {
                Schema::table($table, function (Blueprint $tableBlueprint) use ($columnName) {
                    $tableBlueprint->foreign($columnName)->references('cid')->on('companies')->onDelete('cascade');
                });
            }
        }
    }

    public function down()
    {
        // Optional: rollback logic here
    }
};
