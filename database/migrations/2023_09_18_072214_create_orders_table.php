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
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->decimal('total_price');
            $table->string('recipient_name')->nullable();
            $table->string('recipient_phone', 11)->nullable();
            $table->string('recipient_address', 255)->nullable();
            $table->tinyInteger('status')->default(0);
            $table->tinyInteger('type_payment')->default(0);
            $table->boolean('viewed')->default(false);

            $table->string('order_code')->unique();  // Thêm trường mã đơn hàng và đảm bảo duy nhất
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
