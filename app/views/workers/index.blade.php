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
                                                                        <span class="Left">Workers</span>
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
										<div id="dialog-confirm" title="Delete Selected Worker?">
											<p><span class="ui-icon ui-icon-alert" style="float: left; margin: 0 7px 20px 0;"></span>You are about to permenantly delete the selected worker. Are you sure?</p>
										</div>
@stop
@section('scripts')
<script type="text/javascript">
var sData = " ";
function isNumber(n) {
  return !isNaN(parseFloat(n)) && isFinite(n);
}
$(document).ready(function() {
    $( "#dialog-confirm" ).dialog({
		autoOpen: false,
      resizable: false,
      height:240,
      modal: true,
      buttons: {
        "Delete Worker": function() {
			var form = document.createElement("form");
			$(form).attr("action", BASE+"workers/"+sData)
				   .attr("method", "post");
			$(form).html('<input type="hidden" name="_method" value="delete" />');
			document.body.appendChild(form);
			$(form).submit();
			document.body.removeChild(form);
          $( this ).dialog( "close" );
        },
        Cancel: function() {
          $( this ).dialog( "close" );
        }
      }
    });
	$('#example').dataTable( {
		"bProcessing": true,
		"bServerSide": true,
		"sAjaxSource": "ajax/worker-list",
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
					"sButtonText": "New Worker",
					"fnClick": function ( nButton, oConfig, oFlash ) {
						self.location=BASE+'workers/create';
					}
				},
				{
					"sExtends":    "text",
					"sButtonText": "Edit Worker",
					"bSelectedOnly": "true",
					"bHeader" : false,
					"mColumns": [0],
					"fnClick": function ( nButton, oConfig, oFlash ) {
						var sData = this.fnGetTableData(oConfig);
						if (isNumber(sData)) {
							self.location=BASE+'workers/'+sData+'/edit';
						}
					}
				},
				{
					"sExtends":    "text",
					"sButtonText": "Delete Worker",
					"bSelectedOnly": "true",
					"bHeader" : false,
					"mColumns": [0],
					"fnClick": function ( nButton, oConfig, oFlash ) {
						sData = this.fnGetTableData(oConfig);
						if (isNumber(sData)) {
							$( "#dialog-confirm" ).dialog( "open" );
						}
					}
				}
			],
			"fnRowSelected": function ( node ) {
				$(this).toggleClass('row_selected');
		   }
		}
	});
});
</script>
@stop
