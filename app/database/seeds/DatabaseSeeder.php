<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		// $this->call('UserTableSeeder');
		$this->call('SchoolsTableSeeder');
		$this->call('ChurchesTableSeeder');
		$this->call('StudentsTableSeeder');
		$this->call('WorkersTableSeeder');
		$this->call('TeachersTableSeeder');
		$this->call('UsersTableSeeder');
		$this->call('RolesTableSeeder');
	}

}