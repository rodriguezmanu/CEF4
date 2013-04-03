<?php

class TeachersController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        return View::make('teachers.index')->with('teachers', Teacher::all());
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        $teacher = new Teacher();
		$school_options = array('' => 'Select One') + School::lists('name', 'id');
        return View::make('teachers.create')->with(array('route' => 'teachers.store', 'teacher' => $teacher, 'method' => 'POST', 'school_options' => $school_options));
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
        $teacher = new Teacher();
        $teacher->lastname = Input::get('lastname');
        $teacher->firstname = Input::get('firstname');
        $teacher->school_id = Input::get('school_id');
        $teacher->save();

        return Redirect::to('teachers')->with('success', 'Teacher Created');
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
        $teacher = Teacher::find($id);
        if (! $teacher) {
            echo "blank";
        } else {
			$school_options = array('' => 'Select One') + School::lists('name', 'id');
            return View::make('teachers.edit')->with(array('route' => ['teachers.update', $id], 'teacher' => $teacher, 'method' => 'PUT', 'school_options' => $school_options));
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
        $teacher = Teacher::find($id);
        $teacher->lastname = Input::get('lastname');
        $teacher->firstname = Input::get('firstname');
        $teacher->school_id = Input::get('school_id');
        $teacher->save();

        return Redirect::to('teachers')->with('success', 'Teacher Updated');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
	    Teacher::find($id)->delete();
		return Redirect::to('teachers')->with('success', 'Teacher Deleted');
	}

}
