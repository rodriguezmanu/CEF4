<?php

class SchoolsTableSeeder extends Seeder {

	public function run()
	{
		DB::table('schools')->delete();

		$schools = array(
            array('name' => 'East Iredell'),
            array('name' => 'North Iredell')

		);

		DB::table('schools')->insert($schools);
	}

}
