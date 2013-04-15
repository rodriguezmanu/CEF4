{{ Form::model($school, array('route' => $route, 'method' => $method)) }}
                                                    <div class="Content">
                                                        <div id="_e11slg9_pnlContainer" class="SLGworkspace" style="">
                                                            <table class="detailsTable">
                                                                <tbody>
                                                                    <tr>
                                                                        <td class="label">
                                                                            {{ Form::label('name', 'Name: ') }}
                                                                        </td>
                                                                        <td colspan="3">
																			{{ Form::text('name', null, array('style' => 'width: 300px', 'maxlength' => 40)) }}
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
                                                                            {{ Form::label('phone', 'Phone: ') }}
                                                                        </td>
                                                                        <td>
                                                                            {{ Form::text('phone', null, array('maxlength' => 40)) }}
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
                                                                            {{ Form::label('fax', 'Fax: ') }}
                                                                        </td>
                                                                        <td>
                                                                            {{ Form::text('fax', null, array('maxlength' => 40)) }}
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="label">
                                                                            {{ Form::label('state', 'State: ') }}
                                                                        </td>
                                                                        <td colspan="3">
                                                                            {{ Form::text('state', null, array('style' => 'width: 180px', 'maxlength' => 40)) }}
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
                                                                </tbody>
                                                            </table>
                                                            <div class="sectionContainer">
                                                                <span><span id="_e11slg9_lblApplications" class="basicLabel"><b>Principal:</b></span>
                                                                </span>
                                                                <div class="indentContainer" style="width:720px">
                                                                    <table class="detailsTable">
																		<tbody>
																		<tr>
																		   <td class="label">
																				{{ Form::label('principal_first_name', 'First Name: ') }}
																			</td>
																			<td>
																				{{ Form::text('principal_first_name', null, array('style' => 'width: 180px', 'maxlength' => 40)) }}
																			</td>
																		   <td class="label">
																				{{ Form::label('principal_last_name', 'Last Name: ') }}
																			</td>
																			<td>
																				{{ Form::text('principal_last_name', null, array('style' => 'width: 180px', 'maxlength' => 40)) }}
																			</td>
																		</tr>
																		<tr>
																		   <td class="label">
																				{{ Form::label('principal_email', 'Email: ') }}
																			</td>
																			<td colspan="3">
																				{{ Form::text('principal_email', null, array('style' => 'width: 180px', 'maxlength' => 40)) }}
																			</td>
																		</tr>
																		</tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                            <div id="_e11slg9_lblButtons" style="margin-top: 15px; text-align: left; width: 100%;">
                                                                {{ Form::submit('Save Changes') }}
                                                                &nbsp
																<button onClick="javascript: window.location='{{ URL::to('schools'); }}'; return false;">Cancel</button>
                                                            </div>
                                                        </div>
                                                    </div>
{{ Form::token() . Form::close() }}
