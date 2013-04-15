<?php

class SchoolsController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$per_page = 15;
		$schools = School::paginate($per_page);
        return View::make('schools.index')->with('schools', $schools);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        $school = new School();
        return View::make('schools.create')->with(array('route' => 'schools.store', 'school' => $school, 'method' => 'POST'));
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
        $school = new School();
        $school->name = Input::get('name');
        $school->address1 = Input::get('address1');
        $school->address2 = Input::get('address2');
        $school->city = Input::get('city');
        $school->state = Input::get('state');
        $school->zip = Input::get('zip');
        $school->phone = Input::get('phone');
        $school->fax = Input::get('fax');
        $school->principal_first_name = Input::get('principal_first_name');
        $school->principal_last_name = Input::get('principal_last_name');
        $school->principal_email = Input::get('principal_email');
        $school->save();

        return Redirect::to('schools')->with('success', 'School Created');
                                
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
        $school = School::find($id);
        if (! $school) {
            echo "blank";
        } else {
            return View::make('schools.edit')->with(array('route' => array('schools.update', $id), 'school' => $school, 'method' => 'PUT'));
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
        $school = School::find($id);
        $school->name = Input::get('name');
        $school->address1 = Input::get('address1');
        $school->address2 = Input::get('address2');
        $school->city = Input::get('city');
        $school->state = Input::get('state');
        $school->zip = Input::get('zip');
        $school->phone = Input::get('phone');
        $school->fax = Input::get('fax');
        $school->principal_first_name = Input::get('principal_first_name');
        $school->principal_last_name = Input::get('principal_last_name');
        $school->principal_email = Input::get('principal_email');
        $school->save();

        return Redirect::to('schools')->with('success', 'School Updated');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
	    School::find($id)->delete();
		return Redirect::to('schools')->with('success', 'School Deleted');
	}

}
