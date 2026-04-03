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
        Schema::create('buyers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('ntn_cnic', 20)->index(); // Primary search field
            $table->string('business_name');
            $table->text('address');
            $table->string('registration_type');
            $table->string('province');
            $table->timestamps();

            // Add unique constraint to prevent duplicate buyers for same user
            $table->unique(['user_id', 'ntn_cnic']);

            // Add index for fast autocomplete searches
            $table->index(['user_id', 'ntn_cnic']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('buyers');
    }
};
