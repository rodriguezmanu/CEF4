<?php

class ChurchesController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$per_page = 15;
		$churches = Church::paginate($per_page);
        return View::make('churches.index')->with('churches', $churches);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        $church = new Church();
		$school_options = array('' => 'Select One') + School::lists('name', 'id');
        return View::make('churches.create')->with(array('route' => 'churches.store', 'church' => $church, 'method' => 'POST', 'adoptions' => array(), 'school_options' => $school_options));
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
        $church = new Church();
        $church->name = Input::get('name');
        $church->address1 = Input::get('address1');
        $church->address2 = Input::get('address2');
        $church->city = Input::get('city');
        $church->state = Input::get('state');
        $church->zip = Input::get('zip');
        $church->phone = Input::get('phone');
        $church->fax = Input::get('fax');
        $church->pastor_first_name = Input::get('pastor_first_name');
        $church->pastor_last_name = Input::get('pastor_last_name');
        $church->pastor_email = Input::get('pastor_email');
        $church->save();

		$tmplink = Input::get('new_school_adopted');
		if ($tmplink) {
			$link = new Adoption;
			$link->school_id = $tmplink;
			$link->church_id = $church->id;
			$link->save();
		}

        return Redirect::to('churches')->with('success', 'Church Created');
                                
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
        $church = Church::find($id);
        if (! $church) {
            echo "blank";
        } else {
			$adoptions = Adoption::where('adoptionlink.church_id', $id)
				->join('schools', 'adoptionlink.school_id', '=', 'schools.id')
				->get(array('adoptionlink.id', 'schools.name'));

			$school_options = array('' => 'Select One') + School::lists('name', 'id');
            return View::make('churches.edit')->with(array('route' => ['churches.update', $id], 'church' => $church, 'method' => 'PUT', 'adoptions' => $adoptions, 'school_options' => $school_options));
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
        $church = Church::find($id);
        $church->name = Input::get('name');
        $church->address1 = Input::get('address1');
        $church->address2 = Input::get('address2');
        $church->city = Input::get('city');
        $church->state = Input::get('state');
        $church->zip = Input::get('zip');
        $church->phone = Input::get('phone');
        $church->fax = Input::get('fax');
        $church->pastor_first_name = Input::get('pastor_first_name');
        $church->pastor_last_name = Input::get('pastor_last_name');
        $church->pastor_email = Input::get('pastor_email');
        $church->save();

		// update adoption links
		// first check for any removed adoption_# inputs
		// - loop through current adoptions, pull input and review value
			$adoptions = Adoption::where('adoptionlink.church_id', $id)
				->join('schools', 'adoptionlink.school_id', '=', 'schools.id')
				->get(array('adoptionlink.id', 'schools.name'));
		foreach ($adoptions as $adoption) {
			if (Input::get('adoption_'.$adoption->id) == "removed") {
				// remove from database
				Adoption::find($adoption->id)->delete();
			}
		}

		// next look at new_school_adopted for value
		// - if value, save
		$tmplink = Input::get('new_school_adopted');
		if ($tmplink) {
			$link = new Adoption;
			$link->school_id = $tmplink;
			$link->church_id = $id;
			$link->save();
		}
		
        return Redirect::to('churches')->with('success', 'Church Updated');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
	    Church::find($id)->delete();
		return Redirect::to('churches')->with('success', 'Church Deleted');
	}

}
