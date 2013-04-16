<?php

class Student extends Eloquent {

    protected $table = 'students';
	
	public function getbirthdate() {
        if ($this->birthdate == "0000-00-00" || $this->birthdate == "") {
            return "";
        } else {
            return date('m/d/Y',strtotime($this->birthdate));
        }
	}
}
