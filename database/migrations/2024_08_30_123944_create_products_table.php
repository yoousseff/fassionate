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
            $table->string('product_name');
            $table->decimal('product_price', 8, 2);
            $table->boolean('sale')->default(false);
            $table->boolean('new_arrival')->default(false);
            $table->boolean('best_seller')->default(false);
            $table->enum('gender', ['male', 'female', 'unisex'])->nullable();
            $table->text('product_description')->nullable();
            $table->string('product_category');
            $table->string('product_img')->nullable();
            $table->string('product_color')->nullable();
            $table->string('season')->nullable();
            $table->integer('quantity')->default(0);
            $table->string('product_size')->nullable();
            $table->decimal('discount', 5, 2)->nullable();
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
