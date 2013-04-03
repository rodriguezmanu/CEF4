<?php

class StudentsTableSeeder extends Seeder {

	public function run()
	{
		DB::table('students')->delete();

		$students = array(
            array('lastname' => 'Williams', 'firstname' => 'Paul'),
            array('lastname' => 'Jones', 'firstname' => 'Michael')
		);

		DB::table('students')->insert($students);
	}

}
