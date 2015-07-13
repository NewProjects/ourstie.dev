<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showHome()
	{
		return View::make('home');
	}
	public function showPrice()
	{
		return View::make('price');
	}
	public function showWebsite()
	{
		return View::make('website-order');
	}
	public function showLogo()
	{
		return View::make('logo-order');
	}
}
