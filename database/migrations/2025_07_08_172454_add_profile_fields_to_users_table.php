<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('cinc_ntn')->nullable()->after('fbr_access_token');
            $table->text('address')->nullable()->after('cinc_ntn');
            $table->string('business_name')->nullable()->after('address');
            $table->string('province')->nullable()->after('business_name');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['cinc_ntn', 'address', 'business_name', 'province']);
        });
    }
};
