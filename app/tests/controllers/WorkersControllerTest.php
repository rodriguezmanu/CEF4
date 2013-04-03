<?php

class WorkersControllerTest extends TestCase {
	public function testIndex()
	{
		$response = $this->call('GET', 'workers');
		$this->assertTrue($response->isOk());
	}

	public function testShow()
	{
		$response = $this->call('GET', 'workers/1');
		$this->assertTrue($response->isOk());
	}

	public function testCreate()
	{
		$response = $this->call('GET', 'workers/create');
		$this->assertTrue($response->isOk());
	}

	public function testEdit()
	{
		$response = $this->call('GET', 'workers/1/edit');
		$this->assertTrue($response->isOk());
	}
}
