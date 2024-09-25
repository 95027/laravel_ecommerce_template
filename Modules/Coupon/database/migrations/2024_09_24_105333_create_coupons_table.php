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
        Schema::create('coupons', function (Blueprint $table) {
            $table->id();
            $table->string('coupon_code');
            $table->decimal('discount_value', 8, 2);
            $table->enum('discount_type', ['fixed', 'percentage']);
            $table->date('expiresAt');
            $table->decimal('minimum_purchase', 8, 2);
            $table->decimal('max_discount', 8, 2);
            $table->foreignId('categoryId')->nullable();
            $table->foreignId('subCategoryId')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('coupons');
    }
};
