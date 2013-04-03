<?php

class StudentsController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        return View::make('students.index')->with('students', Student::all());
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        $student = new Student();
        return View::make('students.create')->with(array('route' => 'students.store', 'student' => $student, 'method' => 'POST'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
        /*
        if (! Form\School::is_valid()) {
            return Redirect::back()->with_input()->with_errors(Form\School::$validation);
        }
        */

        //successful
        $student = new Student();
        $student->lastname = Input::get('lastname');
        $student->firstname = Input::get('firstname');
        $student->status = Input::get('status');
        $student->photorelease = Input::get('photorelease');
        $student->sex = Input::get('sex');
        $student->address1 = Input::get('address1');
        $student->address2 = Input::get('address2');
        $student->city = Input::get('city');
        $student->state = Input::get('state');
        $student->zip = Input::get('zip');
        $student->birthdate = Input::get('birthdate');
        $student->grade_id = Input::get('grade_id');
        $student->dismissal_id = Input::get('dismissal_id');
        $student->allergies = Input::get('allergies');
        $student->homephone = Input::get('homephone');
        $student->homeroom_teacher_id = Input::get('homeroom_teacher_id');
        $student->dadname = Input::get('dadname');
        $student->dadphone = Input::get('dadphone');
        $student->dademail = Input::get('dademail');
        $student->momname = Input::get('momname');
        $student->momphone = Input::get('momphone');
        $student->momemail = Input::get('momemail');
        $student->attendschurch_id = Input::get('attendschurch_id');
        $student->save();

        return Redirect::to('students')->with('success', 'Student Created');
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
        $student = Student::find($id);
        if (! $student) {
            echo "blank";
        } else {
            return View::make('students.edit')->with(array('route' => ['students.update', $id], 'student' => $student, 'method' => 'PUT'));
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
        $student = Student::find($id);
        $student->lastname = Input::get('lastname');
        $student->firstname = Input::get('firstname');
        $student->status = Input::get('status');
        $student->photorelease = Input::get('photorelease');
        $student->sex = Input::get('sex');
        $student->address1 = Input::get('address1');
        $student->address2 = Input::get('address2');
        $student->city = Input::get('city');
        $student->state = Input::get('state');
        $student->zip = Input::get('zip');
        $student->birthdate = Input::get('birthdate');
        $student->grade_id = Input::get('grade_id');
        $student->dismissal_id = Input::get('dismissal_id');
        $student->allergies = Input::get('allergies');
        $student->homephone = Input::get('homephone');
        $student->homeroom_teacher_id = Input::get('homeroom_teacher_id');
        $student->dadname = Input::get('dadname');
        $student->dadphone = Input::get('dadphone');
        $student->dademail = Input::get('dademail');
        $student->momname = Input::get('momname');
        $student->momphone = Input::get('momphone');
        $student->momemail = Input::get('momemail');
        $student->attendschurch_id = Input::get('attendschurch_id');
        $student->save();

        return Redirect::to('students')->with('success', 'Student Updated');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
	    Student::find($id)->delete();
		return Redirect::to('students')->with('success', 'Student Deleted');
	}

}