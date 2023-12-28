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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name',255);
            $table->string('image', 255)->default('https://cdn.landesa.org/wp-content/uploads/default-user-image.png');
            $table->string('email')->unique();
            $table->string('address',255)->nullable();
            $table->tinyInteger('gender')->default(0);
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->decimal('points')->default(0);
            $table->tinyInteger('status')->default(1);
            $table->string('google_id')->nullable();
            $table->string('facebook_id')->nullable();
            $table->json('wishlist')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
