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
                                                                        <span class="Left">Add Student</span>
                                                                    </td>
                                                                    <td class="Right">
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
													@include('students._form1')
	                                               </div>
                                            </div>
                                        </div>
@stop

@section('scripts')
<script type="text/javascript">
    $(document).ready(function () {
        $("#firstname").focus();
        $('#birthdate').datepicker({
      changeMonth: true,
      changeYear: true
    });

        // perform javascript only when the document
        // has been fully loaded
        $('#school_id').change(function(e) {
            // Get the value
            id = $(this).val();
            e.preventDefault();

            $('#homeroom_teacher_id').attr("disabled", "true");

            $.get(BASE+'ajax/teacher-list/'+id, function(data) {
                $('#homeroom_teacher_id').html(data);
            }).done(function(data) {
                $('#homeroom_teacher_id').removeAttr("disabled");
            });
        });
    });
</script>
@stop
