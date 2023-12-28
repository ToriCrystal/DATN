<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('statistics', function (Blueprint $table) {
            $table->id();
            $table->integer('doanhSo');
            $table->integer('donHang');
            $table->integer('tyLeChuyenDoi')->default(0);

            $table->integer('luotTruyCap')->default(0);
            $table->integer('luotXemTrang')->default(0);
            $table->integer('doanhSoMoiDonHang');
            $table->string('thoiGian');
            // Thêm các trường khác nếu cần

            // Timestamps nếu bạn muốn sử dụng
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('statistics');
    }
};