<?php

class ReportsController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('reports.index');
	}

	public function reportlist($school_id)
	{
    return View::make('reports.index');
		// first check if current user is connected to school (via church adoptionlink)
		// user->church_id = adoptionlink->church_id and adoptionlink->school_id = $school_id
		if (DB::table('adoptionlink')->where('church_id', Auth::user()->church_id)->where('school_id', $school_id)->count()) {
			return View::make('reports.userindex');
		} else {
			App::abort(401, 'You are not authorized.');
		}
	}

	public function pdf()
	{
		$pdf = new \fpdf\FPDF();
		$pdf->AddPage();
		$pdf->SetFont('Arial','B',16);
		$pdf->Cell(40,10,'Hello World!');
		$headers = array('Content-Type' => 'application/pdf');
		$type = "I";	// $type = "I" for embedded or "D" for download
		return Response::make($pdf->Output('file.pdf', $type), 200, $headers);
	}
}