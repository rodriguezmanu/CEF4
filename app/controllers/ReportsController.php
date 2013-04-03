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