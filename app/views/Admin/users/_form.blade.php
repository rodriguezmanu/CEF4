{{ Form::model($user, array('route' => $route, 'method' => $method)) }}
                                                    <div class="Content">
                                                        <div id="_e11slg9_pnlContainer" class="SLGworkspace" style="">
                                                            <table class="detailsTable">
                                                                <tbody>
                                                                    <tr>
                                                                        <td class="label">
                                                                            {{ Form::label('username', 'Username: ') }}
                                                                        </td>
                                                                        <td colspan="3">
																			{{ Form::text('username', null, array('style' => 'width: 300px', 'maxlength' => 40)) }}
                                                                        </td>
                                                                    </tr>
																	<?php if ($user->exists == false) {?>
                                                                    <tr>
                                                                        <td class="label">
                                                                            {{ Form::label('password', 'Password: ') }}
                                                                        </td>
                                                                        <td colspan="3">
                                                                            {{ Form::text('password', null, array('style' => 'width: 180px', 'maxlength' => 40)) }}
                                                                        </td>
                                                                    </tr>
																	<?php } ?>
                                                                    <tr>
                                                                        <td class="label">
                                                                            {{ Form::label('email', 'Email: ') }}
                                                                        </td>
                                                                        <td>
                                                                            {{ Form::text('email', null, array('style' => 'width: 180px', 'maxlength' => 40)) }}
                                                                        </td>
                                                                        <td class="label">
                                                                            {{ Form::label('verified', 'Verified: ') }}
                                                                        </td>
                                                                        <td>
                                                                            {{ Form::checkbox('verified') }}
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="label">
                                                                            {{ Form::label('disabled', 'Disabled: ') }}
                                                                        </td>
                                                                        <td width='300px'>
                                                                            {{ Form::checkbox('disabled') }}
                                                                        </td>
                                                                        <td class="label">
                                                                            {{ Form::label('deleted', 'Deleted: ') }}
                                                                        </td>
                                                                        <td>
                                                                            {{ Form::checkbox('deleted') }}
                                                                        </td>
                                                                    </tr>
																	<tr>
																		<td class="label">
																			{{ Form::label('church_id', 'Church: ') }}
																		</td>
																		<td>
																			{{ Form::select('church_id', $church_options) }}
																		</td>
																	</tr>
                                                                </tbody>
                                                            </table>
                                                            <div class="sectionContainer">
                                                                <span><span id="_e11slg9_lblApplications" class="basicLabel"><b>Roles:</b></span>
                                                                </span>
                                                                <div class="indentContainer" style="width:720px">
                                                                    <table class="detailsTable">
																		<tbody>
																		<tr>
																			<td>
																				<div class="cbl_container">
																					<?php if ($user->exists == false) {?>
																						@foreach ($roles as $role)
																							{{ Form::checkbox('rroles[]', $role->id, false, array('id' => $role->id)) . Form::label($role->id, $role->name) }}<br />
																						@endforeach
																					<?php } else { ?>
																						@foreach ($roles as $role)
																							{{ Form::checkbox('rroles[]', $role->id, $user->is($role->name), array('id' => $role->id)) . Form::label($role->id, $role->name) }}<br />
																						@endforeach
																					<?php } ?>
																				</div>
																			</td>
																		</tr>
																		</tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                            <div id="_e11slg9_lblButtons" style="margin-top: 15px; text-align: left; width: 100%;">
                                                                {{ Form::submit('Save Changes') }}
                                                                &nbsp
																<a href="{{ URL::to('admin\users'); }}" class="btn">{{ Form::button('Cancel') }}</a>
                                                            </div>
                                                        </div>
                                                    </div>
{{ Form::token() . Form::close() }}
