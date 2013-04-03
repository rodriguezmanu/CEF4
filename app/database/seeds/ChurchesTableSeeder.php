<?php

class ChurchesTableSeeder extends Seeder {

	public function run()
	{
		DB::table('churches')->delete();

		$churches = array(
            array('name' => 'Western Avenue Baptist Church'),
            array('name' => 'St. Johns Lutheran')

		);

		DB::table('churches')->insert($churches);
	}

}
