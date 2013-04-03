<?php

use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('students', function($table) {
			$table->increments('id');
			$table->string('lastname');
			$table->string('firstname');
			$table->integer('status');
			$table->integer('photorelease');
			$table->string('sex', 1);
			$table->string('address1', 50);
			$table->string('address2', 50);
			$table->string('city', 50);
			$table->string('state', 3);
			$table->string('zip', 10);
			$table->date('birthdate');
			$table->integer('grade_id');
			$table->integer('dismissal_id');
			$table->string('allergies', 255);
			$table->string('homephone', 15);
			$table->integer('homeroom_teacher_id');
			$table->string('dadname', 100);
			$table->string('dadphone', 15);
			$table->string('dademail', 100);
			$table->string('momname', 100);
			$table->string('momphone', 15);
			$table->string('momemail', 100);
			$table->integer('attendschurch_id');
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
		Schema::drop('students');
	}

}