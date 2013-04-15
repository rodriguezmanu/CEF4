{{ Form::model($teacher, array('route' => $route, 'method' => $method)) }}
                                                    <div class="Content">
                                                        <div class="SLGworkspace" style="">
                                                            <table class="detailsTable">
                                                                <tbody>
                                                                    <tr>
                                                                        <td class="label">
                                                                            {{ Form::label('firstname', 'First Name: ') }}
                                                                        </td>
                                                                        <td width="300px">
																			{{ Form::text('firstname', null, array('style' => 'width: 180px', 'maxlength' => 40)) }}
                                                                        </td>
                                                                        <td class="label">
                                                                            {{ Form::label('lastname', 'Last Name: ') }}
                                                                        </td>
                                                                        <td>
																			{{ Form::text('lastname', null, array('style' => 'width: 180px', 'maxlength' => 40)) }}
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="label">
                                                                            {{ Form::label('school_id', 'School: ') }}
                                                                        </td>
                                                                        <td colspan="3">
																			{{ Form::select('school_id', $school_options) }}
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <div style="margin-top: 15px; text-align: left; width: 100%;">
                                                                {{ Form::submit('Save Changes') }}
                                                                &nbsp
																<button onClick="javascript: window.location='{{ URL::to('teachers'); }}'; return false;">Cancel</button>
                                                            </div>
                                                        </div>
                                                    </div>
{{ Form::token() . Form::close() }}
