<?php

class HomeController extends BaseController {

	//protected $layout = 'layouts.master';

	public function index()
	{
        return View::make('home.index');
	}

}