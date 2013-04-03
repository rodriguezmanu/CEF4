<?php

use Illuminate\Database\Migrations\Migration;

class CreateSchoolsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('schools', function($table) {
			$table->increments('id');
			$table->string('name', 200);
			$table->string('address1', 50);
			$table->string('address2', 50);
			$table->string('city', 50);
			$table->string('state', 3);
			$table->string('zip', 10);
			$table->string('phone', 15);
			$table->string('fax', 15);
			$table->string('principal_first_name', 50);
			$table->string('principal_last_name', 50);
			$table->string('principal_email', 200);
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
		Schema::drop('schools');
	}

}