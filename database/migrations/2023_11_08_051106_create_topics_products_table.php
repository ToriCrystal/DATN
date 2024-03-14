<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTopicProductTable extends Migration
{
    public function up()
    {
        Schema::create('topic_product', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('product_id');
            $table->unsignedTinyInteger('topic_id');
            $table->timestamps();

            // Tạo các khóa ngoại (foreign keys)
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
            $table->foreign('topic_id')->references('topic_id')->on('topic')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('chude_product');
    }
}
