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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('userId');
            $table->foreignId('shippingId')->constrained('addresses');
            $table->foreignId('billingId')->constrained('addresses');
            $table->string('orderNumber');
            $table->integer('total');
            $table->integer('discount')->default(0);
            $table->integer('deliveryCharges')->default(0);
            $table->enum('status', ['Cancelled', 'Accepted', 'Processed', 'Delivered']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
