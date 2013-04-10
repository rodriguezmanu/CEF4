<?php

class StudentsController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        if (Auth::user()->level(7, '<=')) {
            return Redirect::to('/');
        }
        
		$per_page = 15;
		$students = Student::paginate($per_page);
        return View::make('students.index')->with('students', $students);
	}

	public function studentlist($school_id)
	{
		// first check if current user is connected to school (via church adoptionlink)
		// user->church_id = adoptionlink->church_id and adoptionlink->school_id = $school_id
		if (DB::table('adoptionlink')->where('church_id', Auth::user()->church_id)->where('school_id', $school_id)->count()==0) {
			App::abort(401, 'You are not authorized.');
		}
        $per_page = 15;
        $students = DB::table('students')->select('id','lastname','firstname')->where('school_id', $school_id)->paginate($per_page);
        return View::make('students.index')->with('students', $students);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        $student = new Student();
		$church_options = array('' => 'Select One') + Church::lists('name', 'id');
		$school_options = array('' => 'Select One') + School::lists('name', 'id');
		$teacher_options = array('' => 'Select A School');
        $dismissal_options = array('1' => 'Pick up', '2' => 'Deliver');
        return View::make('students.create')->with(array('route' => 'students.store', 'student' => $student, 'method' => 'POST', 'church_options' => $church_options, 'school_options' => $school_options, 'teacher_options' => $teacher_options, 'dismissal_options' => $dismissal_options));
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
        $student->birthdate = date('Y-m-d',(strtotime(Input::get('birthdate'))));
        $student->grade_id = Input::get('grade_id');
        $student->dismissal_id = Input::get('dismissal_id');
        $student->allergies = Input::get('allergies');
        $student->homephone = Input::get('homephone');
		$student->school_id = Input::get('school_id');
        $student->homeroom_teacher_id = Input::get('homeroom_teacher_id');
        $student->dadname = Input::get('dadname');
        $student->dadphone = Input::get('dadphone');
        $student->dademail = Input::get('dademail');
        $student->momname = Input::get('momname');
        $student->momphone = Input::get('momphone');
        $student->momemail = Input::get('momemail');
        $student->attendschurch_id = Input::get('attendschurch_id');
        $student->save();

        if (Auth::user()->level(7, '<=')) {
            return Redirect::to('studentlist/'.$student->school_id)->with('success', 'Student Created');
        } else {
            return Redirect::to('students')->with('success', 'Student Created');
        }
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
            App::abort(401, 'No identifier');
        }
        if (Auth::user()->level(7, '<=')) {
       		if (DB::table('adoptionlink')->where('church_id', Auth::user()->church_id)->where('school_id', $student->school_id)->count()==0) {
                App::abort(401, 'You are not authorized.');
            }
        }

			$church_options = array('' => 'Select One') + Church::lists('name', 'id');
			$school_options = array('' => 'Select One') + School::lists('name', 'id');
			$teacher_options = array('' => 'Select One') + Teacher::where('school_id', $student->school_id)->lists('lastname', 'id');
            $dismissal_options = array('1' => 'Pick up', '2' => 'Deliver');
            return View::make('students.edit')->with(array('route' => ['students.update', $id], 'student' => $student, 'method' => 'PUT', 'church_options' => $church_options, 'school_options' => $school_options, 'teacher_options' => $teacher_options, 'dismissal_options' => $dismissal_options));

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
        $student->birthdate =  date('Y-m-d',(strtotime(Input::get('birthdate'))));
        $student->grade_id = Input::get('grade_id');
        $student->dismissal_id = Input::get('dismissal_id');
        $student->allergies = Input::get('allergies');
        $student->homephone = Input::get('homephone');
		$student->school_id = Input::get('school_id');
        $student->homeroom_teacher_id = Input::get('homeroom_teacher_id');
        $student->dadname = Input::get('dadname');
        $student->dadphone = Input::get('dadphone');
        $student->dademail = Input::get('dademail');
        $student->momname = Input::get('momname');
        $student->momphone = Input::get('momphone');
        $student->momemail = Input::get('momemail');
        $student->attendschurch_id = Input::get('attendschurch_id');
        $student->save();

        if (Auth::user()->level(7, '<=')) {
            return Redirect::to('studentlist/'.$student->school_id)->with('success', 'Student Updated');
        } else {
            return Redirect::to('students')->with('success', 'Student Updated');
        }
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
