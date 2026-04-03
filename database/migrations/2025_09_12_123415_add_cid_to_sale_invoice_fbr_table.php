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
        // sale_invoice_fbr
        Schema::table('sale_invoice_fbr', function (Blueprint $table) {
            $table->unsignedBigInteger('cid')->nullable();
            $table->foreign('cid')->references('cid')->on('companies')->onDelete('cascade');
        });

        // draft_invoice
        Schema::table('draft_invoices', function (Blueprint $table) {
            $table->unsignedBigInteger('cid')->nullable();
            $table->foreign('cid')->references('cid')->on('companies')->onDelete('cascade');
        });

        // supplier
        Schema::table('parties', function (Blueprint $table) {
            $table->unsignedBigInteger('cid')->nullable();
            $table->foreign('cid')->references('cid')->on('companies')->onDelete('cascade');
        });

        // customer
        Schema::table('buyers', function (Blueprint $table) {
            $table->unsignedBigInteger('cid')->nullable();
            $table->foreign('cid')->references('cid')->on('companies')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('sale_invoice_fbr', function (Blueprint $table) {
            $table->dropForeign(['cid']);
            $table->dropColumn('cid');
        });

        Schema::table('draft_invoices', function (Blueprint $table) {
            $table->dropForeign(['cid']);
            $table->dropColumn('cid');
        });

        Schema::table('parties', function (Blueprint $table) {
            $table->dropForeign(['cid']);
            $table->dropColumn('cid');
        });

        Schema::table('buyers', function (Blueprint $table) {
            $table->dropForeign(['cid']);
            $table->dropColumn('cid');
        });
    }
};
