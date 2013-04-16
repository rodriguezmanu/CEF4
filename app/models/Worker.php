<?php

class Worker extends Eloquent {

    protected $table = 'workers';
    
	public function getbackgroundcheckdate() {
        if ($this->backgroundcheckdate == "0000-00-00" || $this->backgroundcheckdate == "") {
            return "";
        } else {
            return date('m/d/Y',strtotime($this->backgroundcheckdate));
        }
	}
}
