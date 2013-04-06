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
                                                                        <span class="Left">Teachers</span>
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
																@foreach($teachers as $teacher)
																	<tr>
																	<td>
																	{{ Html::linkAction('TeachersController@edit', $teacher->lastname.', '.$teacher->firstname, array($teacher->id)) }}
																	</td>
																	<td>
																		{{ Form::model($teacher, [ 'method' => 'DELETE', 'route' => ['teachers.destroy', $teacher->id] ]) }}
																		{{ Form::submit('DELETE') }}
																		{{ Form::close() }}
																	</td>
																	</tr>
																@endforeach
																</tbody>
															</table>
															{{$teachers->links()}}
														</div>
													</div>
												</div>
                                            </div>
                                        </div>
@stop
