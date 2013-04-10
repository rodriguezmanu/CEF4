<?php

class RolesControllerTest extends TestCase {
	public function testIndex()
	{
		$response = $this->call('GET', 'roles');
		$this->assertTrue($response->isOk());
	}

	public function testShow()
	{
		$response = $this->call('GET', 'roles/1');
		$this->assertTrue($response->isOk());
	}

	public function testCreate()
	{
		$response = $this->call('GET', 'roles/create');
		$this->assertTrue($response->isOk());
	}

	public function testEdit()
	{
		$response = $this->call('GET', 'roles/1/edit');
		$this->assertTrue($response->isOk());
	}
}
