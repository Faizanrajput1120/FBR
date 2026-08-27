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
        Schema::create('purchase_invoice_fbr', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('title')->nullable();
            $table->text('notes')->nullable();

            // Seller (Supplier) info
            $table->string('seller_ntn_cnic')->nullable();
            $table->string('seller_business_name')->nullable();
            $table->string('seller_province')->nullable();
            $table->string('seller_address')->nullable();

            // Invoice info
            $table->string('invoice_type')->nullable();
            $table->date('invoice_date')->nullable();
            $table->string('invoice_ref_no')->nullable();

            // Buyer (Our Company) info
            $table->string('buyer_ntn_cnic')->nullable();
            $table->string('buyer_business_name')->nullable();
            $table->string('buyer_province')->nullable();
            $table->string('buyer_registration_type')->nullable();
            $table->string('buyer_address')->nullable();

            // Items as JSON
            $table->json('items')->nullable();

            // Extra
            $table->decimal('expense_col', 15, 2)->default(0);
            $table->unsignedBigInteger('cid')->nullable();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('purchase_invoice_fbr');
    }
};
