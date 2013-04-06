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
                                                                        <span class="Left">Students</span>
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
																@foreach($students as $student)
																	<tr>
																	<td>
																	{{ Html::linkAction('StudentsController@edit', $student->lastname.', '.$student->firstname, array($student->id)) }}
																	</td>
																	<td>
																		{{ Form::model($student, [ 'method' => 'DELETE', 'route' => ['students.destroy', $student->id] ]) }}
																		{{ Form::submit('DELETE') }}
																		{{ Form::close() }}
																	</td>
																	</tr>
																@endforeach
																</tbody>
															</table>
															{{$students->links()}}
														</div>
													</div>
												</div>
                                            </div>
                                        </div>
@stop
