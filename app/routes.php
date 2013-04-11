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

Route::get('/', array('before' => 'auth', function() {
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

// Before the user tries to access these resources, authenticate them
Route::group(['before' => 'auth'], function() {

	$user = Auth::user();

    Route::resource('schools', 'SchoolsController');
    Route::resource('churches', 'ChurchesController');
    Route::resource('students', 'StudentsController');
    Route::resource('workers', 'WorkersController');
    Route::resource('teachers', 'TeachersController');
    Route::resource('reports', 'ReportsController');

    Route::get('report1', 'ReportsController@pdf');
	Route::get('profile', 'UsersController@profile');
	Route::get('studentlist/{school_id}', 'StudentsController@studentlist');
	Route::get('workerlist', 'WorkersController@workerlist');
	
	Route::group(array('prefix' => 'admin'), function() {
		Route::resource('users', 'UsersController');
		Route::resource('roles', 'RolesController');
	});

	Route::get('ajax/teacher-list/{id}', function($id) {
		$teachers = DB::table('teachers')->select('id', 'lastname','firstname')->where('school_id', $id)->get();
		$options = "";
		if ($teachers) {
			$options = "<option value=''>Select Teacher</option>\n";
			foreach ($teachers as $teacher) {
				$options .= "<option value=".$teacher->id.">".$teacher->lastname."</option>\n";
			}
		}
		return $options;
	});

	/* AJAX CALLS */
	Route::get('ajax/school-list-dd', function() {
		if (Request::ajax()) {
			$schools = DB::table('schools')->select('id', 'name')->orderBy('name')->get();
			$options = "";
			if ($schools) {
				$options = "<option value=''>Select School</option>\n";
				foreach ($schools as $school) {
					$options .= "<option value=".$school->id.">".$school->name."</option>\n";
				}
			}
			return $options;
		} else {
			App::abort(401, 'You are not authorized.');
		}
	});

	Route::get('ajax/church-list', function() {
		if (Request::ajax()) {
			$results = DB::table('churches')->select('churches.id','name');
			return Datatables::of($results)->make();
		} else {
			App::abort(401, 'You are not authorized.');
		}
	});
	Route::get('ajax/school-list', function() {
		if (Request::ajax()) {
			$results = DB::table('schools')->select('schools.id','name');
			return Datatables::of($results)->make();
		} else {
			App::abort(401, 'You are not authorized.');
		}
	});
	Route::get('ajax/student-list/{id?}', function($id="") {
		if (Request::ajax()) {
			if ($id != "") {
				$students = DB::table('students')->where('school_id', $id)->join('schools', 'school_id', '=', 'schools.id')->select('students.id','lastname','firstname','schools.name');
			} else {
				$students = DB::table('students')->join('schools', 'school_id', '=', 'schools.id')->select('students.id','lastname','firstname','schools.name');
			}
			return Datatables::of($students)->make();
		} else {
			App::abort(401, 'You are not authorized.');
		}
	});
	Route::get('ajax/teacher-list', function() {
		if (Request::ajax()) {
			$results = DB::table('teachers')->select('teachers.id','lastname','firstname');
			return Datatables::of($results)->make();
		} else {
			App::abort(401, 'You are not authorized.');
		}
	});
	Route::get('ajax/worker-list', function() {
		if (Request::ajax()) {
			$results = DB::table('workers')->select('workers.id','lastname','firstname');
			return Datatables::of($results)->make();
		} else {
			App::abort(401, 'You are not authorized.');
		}
	});

});

