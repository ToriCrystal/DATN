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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('post_title');
            $table->string('post_slug');
            $table->string('post_excerpt');
            $table->string('post_thumbnail');
            $table->text('post_content');
            $table->boolean('isHot')->default(0);
            $table->tinyInteger('status')->default(0);
            $table->dateTime('published_at');
            $table->unsignedBigInteger('admin_id');
            $table->unsignedBigInteger('post_category_id');
            $table->foreign('admin_id')->references('id')->on('admins')->onDelete('cascade');            
            $table->foreign('post_category_id')->references('id')->on('posts_category')->onDelete('cascade');
            $table->string('meta_title')->nullable();
            $table->string('meta_description')->nullable();
            $table->integer('views')->default(0);
            $table->integer('likes')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
