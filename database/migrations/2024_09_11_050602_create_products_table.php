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
            $table->unsignedBigInteger('brandId');
            $table->foreign('brandId')->references('id')->on('brands');
            $table->unsignedBigInteger('categoryId');
            $table->foreign('categoryId')->references('id')->on('categories');
            $table->unsignedBigInteger('subCategoryId')->nullable();
            $table->foreign('subCategoryId')->references('id')->on('categories');
            $table->string('title');
            $table->string('description');
            $table->string('sku');
            $table->integer('mrp');
            $table->integer('price');
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
