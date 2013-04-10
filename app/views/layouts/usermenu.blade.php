												<!-- Start Church -->
                                                <div class="SectionBlock">
                                                    <div class="Header">
                                                        <table class="SectionTable">
                                                            <tbody>
                                                                <tr>
                                                                    <td style="width: 10px;">
																		{{ Html::image('images/school.gif', "details", array('class' => 'Icon')) }}
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
                                                    <?php
                                                    $schools = Adoption::where('adoptionlink.church_id', Auth::user()->church_id)
                                                            ->join('schools', 'adoptionlink.school_id', '=', 'schools.id')
                                                            ->get(array('schools.id', 'schools.name'));
                                                    ?>
                                                    <div class="Content">
														@foreach($schools as $school)
															<br>
															<span style="line-height: 20px">
																<span class="Left"><b>{{ $school->name }}</b></span>
																<ul>
																	<li><a href="{{URL::action('StudentsController@studentlist', $school->id )}}" title="View list of Students">Students</a></li>
																	<li><a href="{{URL::action('ReportsController@userindex')}}" title="View list of Reports">Reports</a></li>
																</ul>
															</span>
														@endforeach
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="SectionBlock">
                                                    <div class="Header">
                                                        <table class="SectionTable">
                                                            <tbody>
                                                                <tr>
                                                                    <td style="width: 10px;">
																		{{ Html::image('images/church.gif', "details", array('class' => 'Icon')) }}
                                                                    </td>
                                                                    <td>
                                                                        <span class="Left">Church Config</span>
                                                                    </td>
                                                                    <td class="Right">
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div class="Content">
                                                        <br>
                                                        <span style="line-height: 20px">
                                                            <span class="Left">
                                                                <b>
                                                                    <a href="{{URL::action('WorkersController@workerlist')}}" title="View list of Workers">Workers</a>
                                                                </b>
                                                            </span>
                                                        </span>
                                                    </div>
                                                </div>
                                                <br>
