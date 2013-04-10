<?php

use Illuminate\Database\Migrations\Migration;

class CreateAdoptionlinkTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('adoptionlink', function($table) {
			$table->increments('id');
			$table->integer('church_id');
			$table->integer('school_id');
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
		Schema::drop('adoptionlink');
	}

}