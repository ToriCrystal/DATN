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
        Schema::table('posts', function($table) {
            $table->softDeletes(); 
        });  
        Schema::table('posts_category', function($table) {
            $table->softDeletes(); 
        });  
        Schema::table('users', function($table) {
            $table->softDeletes(); 
        }); 
        Schema::table('author', function($table) {
            $table->softDeletes(); 
        }); 
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->dropSoftDeletes();
        });
        Schema::table('posts_category', function (Blueprint $table) {
            $table->dropSoftDeletes();
        });
        Schema::table('users', function (Blueprint $table) {
            $table->dropSoftDeletes();
        });
        Schema::table('author', function (Blueprint $table) {
            $table->dropSoftDeletes();
        });
    }
};
