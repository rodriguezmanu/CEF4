{{ Form::model($worker, array('route' => $route, 'method' => $method)) }}
                                                    <div class="Content">
                                                        <div class="SLGworkspace" style="">
                                                            <table class="detailsTable">
                                                                <tbody>
                                                                    <tr>
                                                                        <td class="label">
                                                                            {{ Form::label('firstname', 'First Name: ') }}
                                                                        </td>
                                                                        <td>
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
                                                                            {{ Form::label('address1', 'Address 1: ') }}
                                                                        </td>
                                                                        <td colspan="3">
                                                                            {{ Form::text('address1', null, array('style' => 'width: 180px', 'maxlength' => 40)) }}
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="label">
                                                                            {{ Form::label('address2', 'Address 2: ') }}
                                                                        </td>
                                                                        <td>
                                                                            {{ Form::text('address2', null, array('style' => 'width: 180px', 'maxlength' => 40)) }}
                                                                        </td>
                                                                        <td class="label">
                                                                            {{ Form::label('homephone', 'Home Phone: ') }}
                                                                        </td>
                                                                        <td>
                                                                            {{ Form::text('homephone', null, array('maxlength' => 40)) }}
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="label">
                                                                            {{ Form::label('city', 'City: ') }}
                                                                        </td>
                                                                        <td width='300px'>
                                                                            {{ Form::text('city', null, array('style' => 'width: 180px', 'maxlength' => 40)) }}
                                                                        </td>
                                                                        <td class="label">
                                                                            {{ Form::label('cellphone', 'Cell Phone: ') }}
                                                                        </td>
                                                                        <td>
                                                                            {{ Form::text('cellphone', null, array('maxlength' => 40)) }}
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="label">
                                                                            {{ Form::label('state', 'State: ') }}
                                                                        </td>
                                                                        <td>
                                                                            {{ Form::text('state', null, array('style' => 'width: 180px', 'maxlength' => 40)) }}
                                                                        </td>
                                                                        <td class="label">
                                                                            {{ Form::label('workphone', 'Work Phone: ') }}
                                                                        </td>
                                                                        <td>
                                                                            {{ Form::text('workphone', null, array('maxlength' => 40)) }}
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="label">
                                                                            {{ Form::label('zip', 'Zip: ') }}
                                                                        </td>
                                                                        <td colspan="3">
                                                                            {{ Form::text('zip', null, array('style' => 'width: 180px', 'maxlength' => 40)) }}
                                                                        </td>
                                                                    </tr>
																	<tr><td><br /></td></tr>
                                                                    <tr>
                                                                        <td class="label">
                                                                            {{ Form::label('email', 'Email: ') }}
                                                                        </td>
                                                                        <td>
                                                                            {{ Form::text('email', null, array('style' => 'width: 180px', 'maxlength' => 40)) }}
                                                                        </td>
                                                                        <td class="label">
                                                                            {{ Form::label('tagname', 'Tag Name: ') }}
                                                                        </td>
                                                                        <td>
                                                                            {{ Form::text('tagname', null, array('style' => 'width: 180px', 'maxlength' => 40)) }}
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="label">
                                                                            {{ Form::label('backgroundcheckdate', 'Background Check Date: ') }}
                                                                        </td>
                                                                        <td>
                                                                            {{ Form::text('backgroundcheckdate', $worker->getbackgroundcheckdate()) }}
                                                                        </td>
                                                                        <td class="label">
                                                                            {{ Form::label('status', 'Status: ') }}
                                                                        </td>
                                                                        <td>
                                                                            {{ Form::select('status', array('' => 'Select One', '0' => 'Inactive', '1' => 'Active')) }}
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="label">
                                                                            {{ Form::label('attendschurch_id', 'Attends Church: ') }}
                                                                        </td>
                                                                        <td>
																			{{ Form::select('attendschurch_id', $church_options) }}
                                                                        </td>
                                                                        <td class="label">
                                                                            {{ Form::label('church_id', 'Volunteers At: ') }}
                                                                        </td>
                                                                        <td>
																			{{ Form::select('church_id', $church_options) }}
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <div style="margin-top: 15px; text-align: left; width: 100%;">
                                                                {{ Form::submit('Save Changes') }}
                                                                &nbsp
																<?php if (Auth::user()->level(7, '>=')) { ?>
																	<input type="button" onClick="window.location='{{ URL::to('workers'); }}'; return false;" value="Cancel" />
																<?php } else if (Auth::user()->level(7, '<=')) { ?>
																	<input type="button" onClick="window.location='{{ URL::to('workerlist'); }}'; return false;" value="Cancel" />
																<?php } ?>
                                                            </div>
                                                        </div>
                                                    </div>
{{ Form::token() . Form::close() }}
