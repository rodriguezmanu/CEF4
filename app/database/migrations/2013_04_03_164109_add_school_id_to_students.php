<?php

use Illuminate\Database\Migrations\Migration;

class AddSchoolIdToStudents extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('students', function($table) {
			$table->integer('school_id');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('students', function($table) {
			$table->dropColumn('school_id');
		});
	}

}