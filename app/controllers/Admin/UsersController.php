<?php

class UsersController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$per_page = 15;
		$users = User::paginate($per_page);
        return View::make('Admin.users.index')->with('users', $users);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        $user = new User();
		$roles = Role::all();
		$church_options = array('' => 'Select One') + Church::lists('name', 'id');
        return View::make('Admin.users.create')->with(array('route' => 'admin.users.store', 'user' => $user, 'method' => 'POST', 'roles' => $roles, 'church_options' => $church_options));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{

        /*
        if (! Form\Church::is_valid()) {
            return Redirect::back()->with_input()->with_errors(Form\Church::$validation);
        }
        */

        //successful
        $user = new User();
        $user->username = Input::get('username');
        $user->email = Input::get('email');
		$user->password = Input::get('password');
        $user->verified = Input::get('verified', 0);
        $user->disabled = Input::get('disabled', 0);
        $user->deleted = Input::get('deleted', 0);
		$user->church_id = Input::get('church_id');
        $user->save();
		
		$user->roles()->sync(Input::get('rroles'));

        return Redirect::to('admin\users')->with('success', 'User Created');
                                
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
        $user = User::find($id);
        if (! $user) {
            echo "blank";
        } else {
			$roles = Role::all();
			$church_options = array('' => 'Select One') + Church::lists('name', 'id');
            return View::make('Admin.users.edit')->with(array('route' => ['admin.users.update', $id], 'user' => $user, 'method' => 'PUT', 'roles' => $roles, 'church_options' => $church_options));
        }
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
        $user = User::find($id);
        $user->username = Input::get('username');
        $user->email = Input::get('email');
        $user->verified = Input::get('verified');
        $user->disabled = Input::get('disabled');
        $user->deleted = Input::get('deleted');
		$user->church_id = Input::get('church_id');
        $user->save();
		
		$user->roles()->sync(Input::get('rroles'));

        return Redirect::to('admin\users')->with('success', 'User Updated');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
	    User::find($id)->delete();
		return Redirect::to('admin\users')->with('success', 'User Deleted');
	}

	public function profile() {
		$user = Auth::user();
		$roles = Role::all();
		$church_options = array('' => 'Select One') + Church::lists('name', 'id');
		return "this might be a user profile screen one day when it grows up";
        return View::make('Admin.users.profile')->with(array('route' => ['admin.users.update', $id], 'user' => $user, 'method' => 'PUT', 'roles' => $roles, 'church_options' => $church_options));

	}
}