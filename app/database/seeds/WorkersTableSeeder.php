<?php

class WorkersTableSeeder extends Seeder {

	public function run()
	{
		DB::table('workers')->delete();

		$workers = array(
            array('lastname' => 'Pemberton', 'firstname' => 'Luke'),
            array('lastname' => 'Pemberton', 'firstname' => 'Paul')
		);

		DB::table('workers')->insert($workers);
	}

}
