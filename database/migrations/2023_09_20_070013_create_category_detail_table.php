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
        Schema::create('category_detail', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50);
            $table->string('item', 50);
            $table->string('category_slug', 50);
            $table->tinyInteger('status')->default(0); // Assuming default status is 0
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('category_detail');
    }
};
