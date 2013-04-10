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
                                                                        <span class="Left">Roles</span>
                                                                    </td>
                                                                    <td class="Right">
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
													<div class="Content">
                                                        <div class="SLGworkspace" style="">
															<table width="500px">
																<tbody>
																@foreach($roles as $role)
																	<tr>
																	<td>
																	{{ Html::linkAction('RolesController@edit', $role->name, array($role->id)) }}
																	</td>
																	<td>
																		{{ Form::model($role, [ 'method' => 'DELETE', 'route' => ['admin.roles.destroy', $role->id] ]) }}
																		{{ Form::submit('DELETE') }}
																		{{ Form::close() }}
																	</td>
																	</tr>
																@endforeach
																</tbody>
															</table>
															{{$roles->links()}}
														</div>
													</div>
												</div>
                                            </div>
                                        </div>
@stop
