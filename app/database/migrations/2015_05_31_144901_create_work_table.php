<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWorkTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('work', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('title')->unique();
			$table->string('slug')->unique();
			$table->string('client');
			$table->string('role');
			$table->text('description');
			$table->string('thumbnail');
			$table->string('img_1')->nullable();
			$table->string('img_2')->nullable();
			$table->string('img_3')->nullable();
			$table->string('external_link')->nullable();
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('work');
	}

}
