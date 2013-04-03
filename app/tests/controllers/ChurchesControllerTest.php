<?php

class ChurchesControllerTest extends TestCase {
	public function testIndex()
	{
		$response = $this->call('GET', 'churches');
		$this->assertTrue($response->isOk());
	}

	public function testShow()
	{
		$response = $this->call('GET', 'churches/1');
		$this->assertTrue($response->isOk());
	}

	public function testCreate()
	{
		$response = $this->call('GET', 'churches/create');
		$this->assertTrue($response->isOk());
	}

	public function testEdit()
	{
		$response = $this->call('GET', 'churches/1/edit');
		$this->assertTrue($response->isOk());
	}
}
