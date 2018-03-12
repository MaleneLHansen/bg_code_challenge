<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('comments', function(Blueprint $table){
			$table->increments('id');
			$table->string('title');
			$table->string('name');
			// $table->integer('user_id')->unsigned();
			$table->string('body');
			$table->integer('movie_id')->unsigned();
			$table->boolean('active')->default(1);
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('comments');
	}

}
