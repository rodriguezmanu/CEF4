<?php

class RolesController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$per_page = 15;
		$roles = Role::paginate($per_page);
        return View::make('Admin.roles.index')->with('roles', $roles);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        $role = new Role();
        return View::make('Admin.roles.create')->with(array('route' => 'Admin.roles.store', 'role' => $role, 'method' => 'POST'));
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
        $role = new Role();
        $role->name = Input::get('name');
        $role->description = Input::get('description');
        $role->level = Input::get('level');
        $role->save();

        return Redirect::to('Admin.roles')->with('success', 'Role Created');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
        $role = Role::find($id);
        if (! $role) {
            echo "blank";
        } else {
            return View::make('Admin.roles.edit')->with(array('route' => ['Admin.roles.update', $id], 'role' => $role, 'method' => 'PUT'));
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
        $role = Role::find($id);
        $role->name = Input::get('name');
        $role->description = Input::get('description');
        $role->level = Input::get('level');
        $role->save();

        return Redirect::to('Admin.roles')->with('success', 'Role Updated');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
	    Role::find($id)->delete();
		return Redirect::to('Admin.roles')->with('success', 'Role Deleted');
	}

}