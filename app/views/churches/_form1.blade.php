{{ Form::model($church, ['route' => $route, 'method' => $method]) }}
                                                    <div class="Content">
                                                        <div id="_e11slg9_pnlContainer" class="SLGworkspace" style="">
                                                            <table class="detailsTable">
                                                                <tbody>
                                                                    <tr>
                                                                        <td class="label">
                                                                            {{ Form::label('name', 'Name: ') }}
                                                                        </td>
                                                                        <td colspan="3">
																			{{ Form::text('name', null, ['style' => 'width: 300px', 'maxlength' => 40]) }}
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
                                                                            {{ Form::label('phone', 'Phone: ') }}
                                                                        </td>
                                                                        <td>
                                                                            {{ Form::text('phone', null, ['maxlength' => 40]) }}
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
                                                                            {{ Form::label('fax', 'Fax: ') }}
                                                                        </td>
                                                                        <td>
                                                                            {{ Form::text('fax', null, ['maxlength' => 40]) }}
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="label">
                                                                            {{ Form::label('state', 'State: ') }}
                                                                        </td>
                                                                        <td colspan="3">
                                                                            {{ Form::text('state', null, ['style' => 'width: 180px', 'maxlength' => 40]) }}
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
                                                                </tbody>
                                                            </table>
                                                            <div class="sectionContainer">
                                                                <span><span id="_e11slg9_lblApplications" class="basicLabel"><b>Pastor:</b></span>
                                                                </span>
                                                                <div class="indentContainer" style="width:720px">
                                                                    <table class="detailsTable">
																		<tbody>
																		<tr>
																		   <td class="label">
																				{{ Form::label('pastor_first_name', 'First Name: ') }}
																			</td>
																			<td>
																				{{ Form::text('pastor_first_name', null, ['style' => 'width: 180px', 'maxlength' => 40]) }}
																			</td>
																		   <td class="label">
																				{{ Form::label('pastor_last_name', 'Last Name: ') }}
																			</td>
																			<td>
																				{{ Form::text('pastor_last_name', null, ['style' => 'width: 180px', 'maxlength' => 40]) }}
																			</td>
																		</tr>
																		<tr>
																		   <td class="label">
																				{{ Form::label('pastor_email', 'Email: ') }}
																			</td>
																			<td colspan="3">
																				{{ Form::text('pastor_email', null, ['style' => 'width: 180px', 'maxlength' => 40]) }}
																			</td>
																		</tr>
																		</tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                            <div class="sectionContainer">
                                                                <span><span class="basicLabel"><b>Adoptions:</b></span>
                                                                </span>
                                                                <div class="indentContainer" style="width:320px">
                                                                    <table class="detailsTable" id="adoptions">
																		<tbody>
																			@foreach ($adoptions as $adoption)
																			<tr id="tr_<?php echo $adoption->id ?>">
																				<td>
																					<?php echo $adoption->name ?>
																					{{ Form::hidden('adoption_'.$adoption->id, $adoption->id, array('id' => 'adoption_'.$adoption->id)) }}
																					</td>
																				<td>
																					<a href="#" class="meclick" id="<?php echo $adoption->id ?>">{{ Html::image('images/remove.gif', 'remove', array('class' => 'Icon')) }}</a>
																				</td>
																			</tr>
																			@endforeach
																			<tr>
																				<td>
																					{{ Form::select('new_school_adopted', $school_options) }}
																				</td>
																			</tr>
																		</tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                            <div id="_e11slg9_lblButtons" style="margin-top: 15px; text-align: left; width: 100%;">
                                                                {{ Form::submit('Save Changes') }}
                                                                &nbsp
																<a href="{{ URL::to('churches'); }}" class="btn">{{ Form::button('Cancel') }}</a>
                                                            </div>
                                                        </div>
                                                    </div>
{{ Form::token() . Form::close() }}