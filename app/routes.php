<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', array('before' => 'auth', function()
{
    if (! Auth::check()) {
        return Redirect::to('/login');
    }
    return View::make('home.index');
}));

Route::get('forgot-password', function() {
        return View::make('forgot-password');
});

Route::get('login', array('as' => 'login', function() {
        return View::make('login');
}));

Route::post('login', function() {
    // get POST data
    $username = Input::get('username');
    $password = Input::get('password');
    if (Auth::attempt(array('username' => $username, 'password' => $password))) {
        // we are now logged in, go to home
        return Redirect::to('/');
    } else {
        // auth failure! lets go back to the login with errors
        return Redirect::to('login')->with('login_errors', true);
    }
});

Route::get('logout', function() {
    Auth::logout();
    return Redirect::to('/');
});
/*
Route::get('/', function()
{
    //$user = User::find(1);
    $user = User::with('roles')->where('username','=','admin')->get();
    echo $user;
    echo "<br />";
    echo $user->roles;
    return;
	return View::make('hello');
});
*/

// Before the user tries to access these resources, authenticate them
Route::group(['before' => 'auth'], function() {
    Route::resource('schools', 'SchoolsController');
    Route::resource('churches', 'ChurchesController');
    Route::resource('students', 'StudentsController');
    Route::resource('workers', 'WorkersController');
    Route::resource('teachers', 'TeachersController');
    Route::resource('reports', 'ReportsController');
    Route::get('report1', 'ReportsController@pdf');
});
