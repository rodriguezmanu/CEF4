<?php

class WorkersController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        return View::make('workers.index')->with('workers', Worker::all());
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        $worker = new Worker();
		$church_options = array('' => 'Select One') + Church::lists('name', 'id');
        return View::make('workers.create')->with(array('route' => 'workers.store', 'worker' => $worker, 'method' => 'POST', 'church_options' => $church_options));
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
        $worker = new Worker();
        $worker->lastname = Input::get('lastname');
        $worker->firstname = Input::get('firstname');
        $worker->status = Input::get('status');
        $worker->address1 = Input::get('address1');
        $worker->address2 = Input::get('address2');
        $worker->city = Input::get('city');
        $worker->state = Input::get('state');
        $worker->zip = Input::get('zip');
		$worker->homephone = Input::get('homephone');
		$worker->cellphone = Input::get('cellphone');
		$worker->workphone = Input::get('workphone');
        $worker->email = Input::get('email');
        $worker->tagname = Input::get('tagname');
        $worker->backgroundcheckdate = Input::get('backgroundcheckdate');
        $worker->attendschurch_id = Input::get('attendschurch_id');
        $worker->church_id = Input::get('church_id');
        $worker->save();

        return Redirect::to('workers')->with('success', 'Worker Created');
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
        $worker = Worker::find($id);
        if (! $worker) {
            echo "blank";
        } else {
			$church_options = array('' => 'Select One') + Church::lists('name', 'id');
            return View::make('workers.edit')->with(array('route' => ['workers.update', $id], 'worker' => $worker, 'method' => 'PUT', 'church_options' => $church_options));
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
        $worker = Worker::find($id);
        $worker->lastname = Input::get('lastname');
        $worker->firstname = Input::get('firstname');
        $worker->status = Input::get('status');
        $worker->address1 = Input::get('address1');
        $worker->address2 = Input::get('address2');
        $worker->city = Input::get('city');
        $worker->state = Input::get('state');
        $worker->zip = Input::get('zip');
		$worker->homephone = Input::get('homephone');
		$worker->cellphone = Input::get('cellphone');
		$worker->workphone = Input::get('workphone');
        $worker->email = Input::get('email');
        $worker->tagname = Input::get('tagname');
        $worker->backgroundcheckdate = Input::get('backgroundcheckdate');
        $worker->attendschurch_id = Input::get('attendschurch_id');
        $worker->church_id = Input::get('church_id');
        $worker->save();

        return Redirect::to('workers')->with('success', 'Worker Updated');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
	    Worker::find($id)->delete();
		return Redirect::to('workers')->with('success', 'Worker Deleted');
	}

}
