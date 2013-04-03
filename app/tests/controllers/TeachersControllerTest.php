<?php

class TeachersControllerTest extends TestCase {
	public function testIndex()
	{
		$response = $this->call('GET', 'teachers');
		$this->assertTrue($response->isOk());
	}

	public function testShow()
	{
		$response = $this->call('GET', 'teachers/1');
		$this->assertTrue($response->isOk());
	}

	public function testCreate()
	{
		$response = $this->call('GET', 'teachers/create');
		$this->assertTrue($response->isOk());
	}

	public function testEdit()
	{
		$response = $this->call('GET', 'teachers/1/edit');
		$this->assertTrue($response->isOk());
	}
}
