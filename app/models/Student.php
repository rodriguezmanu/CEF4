<?php

class Student extends Eloquent {

    protected $table = 'students';
	
	public function getbirthdate() {
		return date('m/d/Y',strtotime($this->birthdate));
	}
}
