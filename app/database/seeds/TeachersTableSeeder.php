<?php

class TeachersTableSeeder extends Seeder {

	public function run()
	{
		DB::table('teachers')->delete();

		$teachers = array(
            array('lastname' => 'Reep', 'firstname' => 'Gail'),
            array('lastname' => 'McAuley', 'firstname' => 'Paul')
		);

		DB::table('teachers')->insert($teachers);
	}

}
