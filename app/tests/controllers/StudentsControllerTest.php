<?php

class StudentsControllerTest extends TestCase {
	public function testIndex()
	{
		$response = $this->call('GET', 'students');
		$this->assertTrue($response->isOk());
	}

	public function testShow()
	{
		$response = $this->call('GET', 'students/1');
		$this->assertTrue($response->isOk());
	}

	public function testCreate()
	{
		$response = $this->call('GET', 'students/create');
		$this->assertTrue($response->isOk());
	}

	public function testEdit()
	{
		$response = $this->call('GET', 'students/1/edit');
		$this->assertTrue($response->isOk());
	}
}
