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
                                                                        <span class="Left">Churches</span>
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
																		<th>Name</th>
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
										<div id="dialog-confirm" title="Delete Selected Church?">
											<p><span class="ui-icon ui-icon-alert" style="float: left; margin: 0 7px 20px 0;"></span>You are about to permenantly delete the selected church. Are you sure?</p>
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
        "Delete Church": function() {
			var form = document.createElement("form");
			$(form).attr("action", BASE+"churches/"+sData)
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
		"sAjaxSource": "ajax/church-list",
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
					"sButtonText": "New Church",
					"fnClick": function ( nButton, oConfig, oFlash ) {
						self.location=BASE+'churches/create';
					}
				},
				{
					"sExtends":    "text",
					"sButtonText": "Edit Church",
					"bSelectedOnly": "true",
					"bHeader" : false,
					"mColumns": [0],
					"fnClick": function ( nButton, oConfig, oFlash ) {
						sData = this.fnGetTableData(oConfig);
						if (isNumber(sData)) {
							self.location=BASE+'churches/'+sData+'/edit';
						}
					}
				},
				{
					"sExtends":    "text",
					"sButtonText": "Delete Church",
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
