{{ Form::model($student, array('route' => $route, 'method' => $method)) }}
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
                                                                            {{ Form::label('address1', 'Address 1: ') }}
                                                                        </td>
                                                                        <td>
                                                                            {{ Form::text('address1', null, array('style' => 'width: 180px', 'maxlength' => 40)) }}
                                                                        </td>
                                                                        <td class="label">
                                                                            {{ Form::label('status', 'Status: ') }}
                                                                        </td>
                                                                        <td>
                                                                            {{ Form::select('status', array('1' => 'Active', '0' => 'Inactive'), '1') }}
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
                                                                            {{ Form::label('photorelease', 'Photo Release: ') }}
                                                                        </td>
                                                                        <td>
                                                                            {{ Form::select('photorelease', array('1' => 'Yes', '0' => 'No'), '0') }}
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
                                                                            {{ Form::label('sex', 'Gender: ') }}
                                                                        </td>
                                                                        <td>
                                                                            {{ Form::select('sex', array('1' => 'Boy', '0' => 'Girl')) }}
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="label">
                                                                            {{ Form::label('zip', 'Zip: ') }}
                                                                        </td>
                                                                        <td>
                                                                            {{ Form::text('zip', null, array('style' => 'width: 180px', 'maxlength' => 40)) }}
                                                                        </td>
                                                                        <td class="label">
                                                                            {{ Form::label('birthdate', 'BirthDate: ') }}
                                                                        </td>
                                                                        <td>
                                                                            {{ Form::select('birthdate', array('1' => 'Yes', '0' => 'No'), '0') }}
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <div class="sectionContainer">
                                                                <span><span class="basicLabel"><b>School Info</b></span>
                                                                </span>
                                                                <div class="indentContainer" style="width:720px">
                                                                    <table class="detailsTable">
																		<tbody>
                                                                            <tr>
                                                                            <td class="label">
                                                                                {{ Form::label('school_id', 'School: ') }}
                                                                            </td>
                                                                            <td>
                                                                                {{ Form::select('school_id', $school_options) }}
                                                                            </td>
																		   <td class="label">
                                                                                {{ Form::label('homeroom_teacher_id', 'Homeroom Teacher: ') }}
																			</td>
																			<td>
                                                                                {{ Form::select('homeroom_teacher_id', $teacher_options) }}
																			</td>
																		   <td class="label">
																				{{ Form::label('grade_id', 'Grade: ') }}
																			</td>
																			<td>
																				{{ Form::select('grade_id', array('0' => 'Pre-School', '1' => '1st Grade')) }}
																			</td>
																		</tr>
																		<tr>
																		   <td class="label">
																				{{ Form::label('dismissal_id', 'Dismissal: ') }}
																			</td>
																			<td>
																				{{ Form::select('dismissal_id', $dismissal_options) }}
																			</td>
																		   <td class="label">
																				{{ Form::label('allergies', 'Allergies: ') }}
																			</td>
																			<td>
																				{{ Form::text('allergies', null, array('style' => 'width: 180px', 'maxlength' => 40)) }}
																			</td>
																		   <td class="label">
																				{{ Form::label('attendschurch_id', 'Attends Church: ') }}
																			</td>
																			<td>
																				{{ Form::select('attendschurch_id', $church_options) }}
																			</td>
																		</tr>
																		</tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                            <div class="sectionContainer">
                                                                <span><span class="basicLabel"><b>Contacts:</b></span>
                                                                </span>
                                                                <div class="indentContainer" style="width:720px">
                                                                    <table class="detailsTable">
																		<tbody>
																		<tr>
																		   <td class="label">
																				{{ Form::label('dadname', 'Dad Name: ') }}
																			</td>
																			<td>
																				{{ Form::text('dadname', null, array('style' => 'width: 180px', 'maxlength' => 40)) }}
																			</td>
																		   <td class="label">
																				{{ Form::label('dadphone', 'Phone: ') }}
																			</td>
																			<td>
																				{{ Form::text('dadphone', null, array('style' => 'width: 180px', 'maxlength' => 40)) }}
																			</td>
																		   <td class="label">
																				{{ Form::label('dademail', 'Email: ') }}
																			</td>
																			<td>
																				{{ Form::text('dademail', null, array('style' => 'width: 180px', 'maxlength' => 40)) }}
																			</td>
																		</tr>
																		<tr>
																		   <td class="label">
																				{{ Form::label('momname', 'Mom Name: ') }}
																			</td>
																			<td>
																				{{ Form::text('momname', null, array('style' => 'width: 180px', 'maxlength' => 40)) }}
																			</td>
																		   <td class="label">
																				{{ Form::label('momphone', 'Phone: ') }}
																			</td>
																			<td>
																				{{ Form::text('momphone', null, array('style' => 'width: 180px', 'maxlength' => 40)) }}
																			</td>
																		   <td class="label">
																				{{ Form::label('momemail', 'Email: ') }}
																			</td>
																			<td>
																				{{ Form::text('momemail', null, array('style' => 'width: 180px', 'maxlength' => 40)) }}
																			</td>
																		</tr>
																		</tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                            <div style="margin-top: 15px; text-align: left; width: 100%;">
                                                                {{ Form::submit('Save Changes') }}
                                                                &nbsp
																<?php if (Auth::user()->level(7, '>=')) { ?>
																	<input type="button" onClick="window.location='{{ URL::to('students'); }}'; return false;" value="Cancel" />
																<?php } else if (Auth::user()->level(7, '<=')) { ?>
																	<input type="button" onClick="window.location='{{ URL::to('studentlist', $student->school_id); }}'; return false;" value="Cancel" />
																<?php } ?>
                                                            </div>
                                                        </div>
                                                    </div>
{{ Form::token() . Form::close() }}
