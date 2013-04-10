<?php

class HomeController extends BaseController {

	//protected $layout = 'layouts.master';

	public function index()
	{
		$schools = array();
		if (Auth::user()->level(7, '<=')) {
			$schools = array('1','2');
		}
        return View::make('home.index')->with('schools', $schools);
	}

}
