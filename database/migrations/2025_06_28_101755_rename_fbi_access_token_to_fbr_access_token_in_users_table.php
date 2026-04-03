<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        if (Schema::hasColumn('users', 'fbi_access_token')) {
            DB::statement('ALTER TABLE users CHANGE fbi_access_token fbr_access_token VARCHAR(255)');
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        if (Schema::hasColumn('users', 'fbr_access_token')) {
            DB::statement('ALTER TABLE users CHANGE fbr_access_token fbi_access_token VARCHAR(255)');
        }
    }
};