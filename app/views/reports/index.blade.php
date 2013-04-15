@extends('layouts.new')

@section('content')
                                       <div id="_e11slg2_pnlView" class="RightPanel">
                                            <div id="_e11slg32_pnlContainer" style="">
                                                <div id="_e11slg32_section1_section" class="SectionBlock">
                                                    <div class="Header">
                                                        <table class="SectionTable">
                                                            <tbody>
                                                                <tr>
                                                                    <td style="width: 10px;">
																		{{ Html::image('images/details.png', 'details', array('class' => 'Icon')) }}
                                                                    </td>
                                                                    <td>
                                                                        <span id="_e11slg32_section1_lblTitle" class="Left">Reports</span>
                                                                    </td>
                                                                    <td class="Right">
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
													<div class="Content">
                                                        <div id="_e11slg9_pnlContainer" class="SLGworkspace" style="">
															<li><a href="{{URL::action('ReportsController@pdf')}}">Prayer Cards</a></li>
															<li><a href="{{URL::action('ReportsController@pdf')}}">Name Tags</a></li>
															<li><a href="{{URL::action('ReportsController@pdf')}}">Grade Attendance</a></li>
															<li><a href="{{URL::action('ReportsController@pdf')}}">Car Tag</a></li>
															<li><a href="{{URL::action('ReportsController@pdf')}}">Member Sheet</a></li>
															<li><a href="{{URL::action('ReportsController@pdf')}}">Address Labels</a></li>
															<li><a href="{{URL::action('ReportsController@pdf')}}">Statistics</a></li>
														</div>
													</div>
												</div>
                                            </div>
                                        </div>
@stop
