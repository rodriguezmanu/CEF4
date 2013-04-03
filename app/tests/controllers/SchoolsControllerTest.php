<?php

class SchoolsControllerTest extends TestCase {
	public function testIndex()
	{
		$response = $this->call('GET', 'schools');
		$this->assertTrue($response->isOk());
	}

	public function testShow()
	{
		$response = $this->call('GET', 'schools/1');
		$this->assertTrue($response->isOk());
	}

	public function testCreate()
	{
		$response = $this->call('GET', 'schools/create');
		$this->assertTrue($response->isOk());
	}

	public function testEdit()
	{
		$response = $this->call('GET', 'schools/1/edit');
		$this->assertTrue($response->isOk());
	}
}
