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
                                                                        <span class="Left">Schools</span>
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
																@foreach($schools as $school)
																	<tr>
																	<td>
																	{{ Html::linkAction('SchoolsController@edit', $school->name, array($school->id)) }}
																	</td>
																	<td>
																		{{ Form::model($school, [ 'method' => 'DELETE', 'route' => ['schools.destroy', $school->id] ]) }}
																		{{ Form::submit('DELETE') }}
																		{{ Form::close() }}
																	</td>
																	</tr>
																@endforeach
																</tbody>
															</table>
															{{$schools->links()}}
														</div>
													</div>
												</div>
                                            </div>
                                        </div>
@stop
