<?php

use Illuminate\Database\Migrations\Migration;

class CreateWorkersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('workers', function($table) {
			$table->increments('id');
			$table->string('lastname');
			$table->string('firstname');
			$table->integer('status');
			$table->string('address1', 50);
			$table->string('address2', 50);
			$table->string('city', 50);
			$table->string('state', 3);
			$table->string('zip', 10);
			$table->string('homephone', 15);
			$table->string('cellphone', 15);
			$table->string('workphone', 15);
			$table->string('email', 100);
			$table->string('tagname');
			$table->date('backgroundcheckdate');
			$table->integer('attendschurch_id');
			$table->integer('church_id');
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
		Schema::drop('workers');
	}

}