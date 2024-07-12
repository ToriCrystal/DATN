<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('topic', function(Blueprint $table)
		{
			$table->engine = 'InnoDB';
			$table->unsignedTinyInteger('topic_id')->autoIncrement()->comment('id chủ đề');
			$table->string('topic_code', 50)->comment('mã chủ đề');
			$table->string('topic_name', 250)->comment('tên chủ đề (không dấu)');
			$table->string('topic_name_vn', 250)->comment('tên chủ đề');
			$table->string('topic_name_en')->nullable()->comment('tên chủ đề tiếng anh');
			$table->timestamp('topic_create')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->timestamp('topic_update')->default(DB::raw('CURRENT_TIMESTAMP'));
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('topic');
	}

};