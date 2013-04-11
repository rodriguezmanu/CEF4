@extends('layouts.new')

@section('content')
                                       <div class="RightPanel">
                                            <div style="">
                                                <div class="SectionBlock">
                                                    <div class="Header">
                                                        <table class="SectionTable">
                                                            <tbody>
                                                                <tr>
                                                                    <td style="width: 10px;">
																		{{ Html::image('images/details.png', 'details', array('class' => 'Icon')) }}
                                                                    </td>
                                                                    <td>
                                                                        <span class="Left">Students</span>
                                                                    </td>
                                                                    <td class="Right">
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
													<br />
													<div class="Content">
                                                        <div class="SLGworkspace" style="">
															<table id="example" class="display">
																<thead>
																	<tr>
																		<th width="30px">ID</th>
																		<th>Last Name</th>
																		<th>First Name</th>
																		<th>School</th>
																	</tr>
																</thead>
																<tbody>
                                                                    <tr><td></td></tr>
                                                                    <tr><td></td></tr>
                                                                    <tr><td></td></tr>
                                                                    <tr><td></td></tr>
                                                                    <tr><td></td></tr>
                                                                    <tr><td></td></tr>
                                                                    <tr><td></td></tr>
                                                                    <tr><td></td></tr>
                                                                    <tr><td></td></tr>
																</tbody>
															</table>
														</div>
													</div>
												</div>
                                            </div>
                                        </div>
@stop
@section('scripts')
<script type="text/javascript">
var oTable;
$(document).ready(function() {


  oTable = $('#example').dataTable( {
					"bProcessing": true,
					"bServerSide": true,
					"sAjaxSource": "ajax/student-list",
					"bJQueryUI": true,
					"sPaginationType": "full_numbers",
                    "sDom": '<"H"Tfr>t<"F"ip>',
                    "oLanguage": {
                        "sZeroRecords": "No Records Found",
                        "sSearch": "Search",
                        "sProcessing": '<img alt="Spinner" src="images/spinner.gif" /> Processing'
                    },
                    "oTableTools": {
                        "sSelectedClass": "row_selected",
                        "sRowSelect": "single",
						"aButtons": [
							{
								"sExtends":    "text",
								"sButtonText": "New Student",
								"fnClick": function ( nButton, oConfig, oFlash ) {
									window.location.replace(BASE+'students/create');
								}
							}
						],
                    "fnRowSelected": function ( node ) {
                        $(this).toggleClass('row_selected');
                   }
                    }
				} );
});
</script>
@stop
