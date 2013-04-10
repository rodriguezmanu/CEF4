@extends('layouts.new')

@section('content')
                                       <div id="_e11slg2_pnlView" class="RightPanel">
                                            <div id="_e11slg32_pnlContainer" style="">
                                                <div id="_e11slg32_section1_section" class="SectionBlock">
                                                    <div class="Header">
                                                        <table class="SectionTable">
                                                            <tbody>
                                                                <tr>
                                                                    <td style="width: 10px;">
																		{{ Html::image('images/details.png', 'details', array('class' => 'Icon')) }}
                                                                    </td>
                                                                    <td>
                                                                        <span id="_e11slg32_section1_lblTitle" class="Left">Edit User</span>
                                                                    </td>
                                                                    <td class="Right">
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
													@include('Admin.users._form')
	                                               </div>
                                            </div>
                                        </div>
@stop

@section('scripts')
<script type="text/javascript">
    $(document).ready(function () {
        $("#name").focus();
    });
</script>
@stop
