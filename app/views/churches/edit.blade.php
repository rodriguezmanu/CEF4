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
                                                                        <span class="Left">Edit Church</span>
                                                                    </td>
                                                                    <td class="Right">
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
													@include('churches._form1')
	                                               </div>
                                            </div>
                                        </div>
@stop

@section('scripts')
<script type="text/javascript">
    $(document).ready(function () {
        $("#name").focus();
		$(".meclick").click(function(event) {
			var clicked_id = (this).id;
			// first confirm deletion
			// if confirmed, remove ID from stored array
			// then remove the control from the screen
			$("#tr_"+clicked_id).hide();
			$("#adoption_"+clicked_id).val('removed');
			return false;
		});
    });
</script>
@stop
