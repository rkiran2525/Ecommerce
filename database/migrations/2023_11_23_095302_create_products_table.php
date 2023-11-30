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
            $table->string('name');
            $table->unsignedBigInteger('categorie_id');
            $table->unsignedBigInteger('brand_id');
            $table->integer('mrp')->nullable();
            $table->string('sale_price')->nullable();
            $table->string('discription')->nullable();
            $table->integer('quantity')->nullable();
            $table->integer('min_quantiy')->nullable();
            $table->integer('max_quantiy')->nullable();
            $table->string('size')->nullable();
            $table->foreign('categorie_id')->references('id')->on('categories');
            $table->foreign('brand_id')->references('id')->on('brands');
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
