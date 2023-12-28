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
        Schema::create('comments_product', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->unsignedBigInteger('admin_id')->nullable();
            $table->unsignedBigInteger('product_id');
            $table->string('user_type')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->constrained()->where('user_type', 'user');
            $table->foreign('admin_id')->references('id')->on('admins')->onDelete('cascade')->constrained()->where('user_type', 'admin');
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
            $table->text('message');
            $table->boolean('isVisible')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comments_product');
    }
};
