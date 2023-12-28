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
            $table->timestamps();
            $table->string('product_name');
            $table->string('author')->default('Không xác định');
            $table->string('product_slug')->unique();
            $table->decimal('price');
            $table->decimal('discount_price')->nullable();
            $table->boolean('weekly_discount')->default(0); 
            $table->string('product_image');
            $table->integer('views')->default(0);
            $table->integer('likes')->default(0);
            $table->integer('remaining')->default(0);
            $table->boolean('isHot')->default(0);
            $table->boolean('isVisible')->default(1);
            $table->json('attributes');
            $table->text('product_description');
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
