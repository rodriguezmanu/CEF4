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
                                                                    <td style="width: 100px;">
                                                                        <span class="Left">Users</span>
                                                                    </td>
																	<td>
																	{{ Html::linkAction('UsersController@create', 'Create User') }}
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
																@foreach($users as $user)
																	<tr>
																	<td>
																	{{ Html::linkAction('UsersController@edit', $user->username, array($user->id)) }}
																	</td>
																	<td>
																		{{ Form::model($user, [ 'method' => 'DELETE', 'route' => ['admin.users.destroy', $user->id] ]) }}
																		{{ Form::submit('DELETE') }}
																		{{ Form::close() }}
																	</td>
																	</tr>
																@endforeach
																</tbody>
															</table>
															{{$users->links()}}
														</div>
													</div>
												</div>
                                            </div>
                                        </div>
@stop
