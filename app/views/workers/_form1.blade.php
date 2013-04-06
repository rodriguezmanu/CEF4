{{ Form::model($worker, ['route' => $route, 'method' => $method]) }}
                                                    <div class="Content">
                                                        <div id="_e11slg9_pnlContainer" class="SLGworkspace" style="">
                                                            <table class="detailsTable">
                                                                <tbody>
                                                                    <tr>
                                                                        <td class="label">
                                                                            {{ Form::label('firstname', 'First Name: ') }}
                                                                        </td>
                                                                        <td>
																			{{ Form::text('firstname', null, ['style' => 'width: 180px', 'maxlength' => 40]) }}
                                                                        </td>
                                                                        <td class="label">
                                                                            {{ Form::label('lastname', 'Last Name: ') }}
                                                                        </td>
                                                                        <td>
																			{{ Form::text('lastname', null, ['style' => 'width: 180px', 'maxlength' => 40]) }}
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="label">
                                                                            {{ Form::label('address1', 'Address 1: ') }}
                                                                        </td>
                                                                        <td colspan="3">
                                                                            {{ Form::text('address1', null, ['style' => 'width: 180px', 'maxlength' => 40]) }}
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="label">
                                                                            {{ Form::label('address2', 'Address 2: ') }}
                                                                        </td>
                                                                        <td>
                                                                            {{ Form::text('address2', null, ['style' => 'width: 180px', 'maxlength' => 40]) }}
                                                                        </td>
                                                                        <td class="label">
                                                                            {{ Form::label('homephone', 'Home Phone: ') }}
                                                                        </td>
                                                                        <td>
                                                                            {{ Form::text('homephone', null, ['maxlength' => 40]) }}
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="label">
                                                                            {{ Form::label('city', 'City: ') }}
                                                                        </td>
                                                                        <td width='300px'>
                                                                            {{ Form::text('city', null, ['style' => 'width: 180px', 'maxlength' => 40]) }}
                                                                        </td>
                                                                        <td class="label">
                                                                            {{ Form::label('cellphone', 'Cell Phone: ') }}
                                                                        </td>
                                                                        <td>
                                                                            {{ Form::text('cellphone', null, ['maxlength' => 40]) }}
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="label">
                                                                            {{ Form::label('state', 'State: ') }}
                                                                        </td>
                                                                        <td>
                                                                            {{ Form::text('state', null, ['style' => 'width: 180px', 'maxlength' => 40]) }}
                                                                        </td>
                                                                        <td class="label">
                                                                            {{ Form::label('workphone', 'Work Phone: ') }}
                                                                        </td>
                                                                        <td>
                                                                            {{ Form::text('workphone', null, ['maxlength' => 40]) }}
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="label">
                                                                            {{ Form::label('zip', 'Zip: ') }}
                                                                        </td>
                                                                        <td colspan="3">
                                                                            {{ Form::text('zip', null, ['style' => 'width: 180px', 'maxlength' => 40]) }}
                                                                        </td>
                                                                    </tr>
																	<tr><td><br /></td></tr>
                                                                    <tr>
                                                                        <td class="label">
                                                                            {{ Form::label('email', 'Email: ') }}
                                                                        </td>
                                                                        <td>
                                                                            {{ Form::text('email', null, ['style' => 'width: 180px', 'maxlength' => 40]) }}
                                                                        </td>
                                                                        <td class="label">
                                                                            {{ Form::label('tagname', 'Tag Name: ') }}
                                                                        </td>
                                                                        <td>
                                                                            {{ Form::text('tagname', null, ['style' => 'width: 180px', 'maxlength' => 40]) }}
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="label">
                                                                            {{ Form::label('backgroundcheckdate', 'Background Check Date: ') }}
                                                                        </td>
                                                                        <td colspan="3">
                                                                            {{ Form::text('backgroundcheckdate', null, ['style' => 'width: 180px', 'maxlength' => 40]) }}
																			<a onclick="alert('hi');return false;">
																				{{ Form::input('image','calendar', null, array('src' => URL::asset('images/calendar.gif'), 'align' => 'absmiddle')) }}
																			</a>
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
                                                            <div id="_e11slg9_lblButtons" style="margin-top: 15px; text-align: left; width: 100%;">
                                                                {{ Form::submit('Save Changes') }}
                                                                &nbsp
																<a href="{{ URL::to('workers'); }}" class="btn">{{ Form::button('Cancel') }}</a>
                                                            </div>
                                                        </div>
                                                    </div>
{{ Form::token() . Form::close() }}