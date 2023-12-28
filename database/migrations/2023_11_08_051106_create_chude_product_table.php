<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChudeProductTable extends Migration
{
    public function up()
    {
        Schema::create('chude_product', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('product_id');
            $table->unsignedTinyInteger('chu_de_id');
            $table->timestamps();

            // Tạo các khóa ngoại (foreign keys)
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
            $table->foreign('chu_de_id')->references('chu_de_id')->on('chu_de')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('chude_product');
    }
}
