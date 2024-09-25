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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('brandId');
            $table->foreignId('categoryId');
            $table->foreignId('subCategoryId')->nullable()->constrained('categories');
            $table->string('title');
            $table->string('short_description');
            $table->string('description')->nullable();
            $table->string('sku');
            $table->integer('mrp');
            $table->integer('price')->nullable();
            $table->integer('quantity')->default(1);
            $table->integer('status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
