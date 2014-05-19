<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table("persons",function($table)
		{
			$table->create();

			$table->increments("id");

			$table->string("real_name");
			$table->string("real_lastname");
			$table->string("email");
			$table->string("passwork");

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
		Schema::drop("persons");
	}

}
