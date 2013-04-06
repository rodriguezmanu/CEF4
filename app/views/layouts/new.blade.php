<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html id="ctl00_ctl00_htmlTag" xmlns="http://www.w3.org/1999/xhtml" lang="EN">
<head id="ctl00_ctl00_head">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')</title>
    <link rel="shortcut icon" href="{{ URL::asset('images/favicon.ico') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/main.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/shared.css') }}">
</head>
<body class="Main slg">

    <div style="height: 15px; background-color: #F2F2F6">
        <!-- keep for spacing for now -->
    </div>
    <div class="RootContainer">
        <div class="MenuContainer">
            <!-- keep for spacing for now -->
        </div>
        <center>
            <div class="RoundRoot">
                <div class="roundedHeader">
                    <div class="r1">
                        <span class="spacer1clr"></span>
                    </div>
                    <div class="r2">
                        <span class="spacer1"></span>
                    </div>
                    <div class="r3">
                        <span class="spacer1"></span>
                    </div>
                    <div class="r4">
                        <span class="spacer2"></span>
                    </div>
                </div>
            </div>
            <div class="RootContainerWrap">
                <div class="RootContainerInner">
                    <div style="">
                        <div>
                            <div>
                                <div style="">
                                    <div style="padding-left: 10px; overflow: hidden;">
                                        <div class="LeftPanel">
                                            <div style="margin-left: 15px; margin-right: 15px;">
                                                <div class="SectionBlock">
                                                    <div class="Header">
                                                        <table class="SectionTable">
                                                            <tbody>
                                                                <tr>
                                                                    <td style="width: 10px;">
																		{{ Html::image('images/church2.gif', "details", array('class' => 'Icon')) }}
                                                                    </td>
                                                                    <td>
                                                                        <span class="Left">Churches</span>
                                                                    </td>
                                                                    <td class="Right">
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div class="Content">
                                                        <span style="line-height: 20px">
															<a href="{{URL::action('ChurchesController@index')}}" title="View list of Churches">
                                                                Show List </a>
                                                            <br>
                                                            <a href="{{URL::action('ChurchesController@create')}}" title="Create new Church">
                                                                New Entry </a>
                                                            <br>
                                                        </span>
                                                    </div>
                                                </div>
                                                <br>
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
                                                    <div class="Content">
                                                        <span style="line-height: 20px">
															<a href="{{URL::action('SchoolsController@index')}}" title="View list of Schools">
                                                                Show List </a>
                                                            <br>
                                                            <a href="{{URL::action('SchoolsController@create')}}" title="Create new School">
                                                                New Entry </a>
                                                            <br>
                                                        </span>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="SectionBlock">
                                                    <div class="Header">
                                                        <table class="SectionTable">
                                                            <tbody>
                                                                <tr>
                                                                    <td style="width: 10px;">
																		{{ Html::image('images/student.gif', "details", array('class' => 'Icon')) }}
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
                                                        <span style="line-height: 20px">
															<a href="{{URL::action('StudentsController@index')}}" title="View list of Students">
                                                                Show List </a>
                                                            <br>
                                                            <a href="{{URL::action('StudentsController@create')}}" title="Add new Student">
                                                                New Entry </a>
                                                            <br>
                                                        </span>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="SectionBlock">
                                                    <div class="Header">
                                                        <table class="SectionTable">
                                                            <tbody>
                                                                <tr>
                                                                    <td style="width: 10px;">
																		{{ Html::image('images/teacher.gif', "details", array('class' => 'Icon')) }}
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
                                                        <span style="line-height: 20px">
															<a href="{{URL::action('TeachersController@index')}}" title="View list of Teachers">
                                                                Show List </a>
                                                            <br>
                                                            <a href="{{URL::action('TeachersController@create')}}" title="Add new Teacher">
                                                                New Entry </a>
                                                            <br>
                                                        </span>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="SectionBlock">
                                                    <div class="Header">
                                                        <table class="SectionTable">
                                                            <tbody>
                                                                <tr>
                                                                    <td style="width: 10px;">
																		{{ Html::image('images/worker.gif', "details", array('class' => 'Icon')) }}
                                                                    </td>
                                                                    <td>
                                                                        <span class="Left">Workers</span>
                                                                    </td>
                                                                    <td class="Right">
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div class="Content">
                                                        <span style="line-height: 20px">
															<a href="{{URL::action('WorkersController@index')}}" title="View list of Workers">
                                                                Show List </a>
                                                            <br>
                                                            <a href="{{URL::action('WorkersController@create')}}" title="Add new Worker">
                                                                New Entry </a>
                                                            <br>
                                                        </span>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="SectionBlock">
                                                    <div class="Header">
                                                        <table class="SectionTable">
                                                            <tbody>
                                                                <tr>
                                                                    <td style="width: 10px;">
																		{{ Html::image('images/reports.gif', "details", array('class' => 'Icon')) }}
                                                                    </td>
                                                                    <td>
                                                                        <span class="Left">Reports</span>
                                                                    </td>
                                                                    <td class="Right">
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div class="Content">
                                                        <span style="line-height: 20px">
															<a href="{{URL::action('ReportsController@index')}}" title="View list of Reports">
                                                                Reports Menu </a>
                                                            <br>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
 										@yield('content')
                                     </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="RoundRoot">
                <div class="roundedFooter">
                    <span class="r4"><span class="spacer2"></span></span><span class="r3"><span class="spacer1">
                    </span></span><span class="r2"><span class="spacer1"></span></span><span class="r1">
                        <span class="spacer1clr"></span></span>
                </div>
            </div>
            <br>
            <span class="copyright">Copyright ©2013 PemFam Corporation - <a href="javascript:void(window.open('{{URL::to('/TOS')}}', 'UserWeb_Terms_of_Use'));"
                style="color: White; text-decoration: underline;">
                Terms of Use </a></span>
        </center>
    </div>

    <div id="userweb-menu">
        <a href="{{URL::to('/')}}" align=center><h1 style="font-weight: bold;font-size:200%">CEF Database</h1></a>
        <!-- main menu items, not including the browse, includes any items in sitemap that have a mainMenuPosition attribute set -->
        <!-- profile and search options -->
        <ul class="profile main-menu" style="min-width: 210px;">
            <li class="main-menu left-fade"></li>
            <li class="user-profile main-menu"><span class="separator"></span><a href="{{URL::to('/profile')}}"
                class="main-menu" title="View your user profile" tabindex="-1"><span class="inner"><span
                    class="user-profile icon">&nbsp; </span><span id="userweb-name">Mark Pemberton </span>
                </span></a></li>
            <li class="sign-out main-menu"><a href="{{URL::to('/logout')}}"
                class="main-menu" tabindex="-1"><span class="inner"><span class="sign-out icon">&nbsp;
                </span>Sign Out </span></a></li>
        </ul>
    </div>
	
	<script type="text/javascript">var BASE = '<?php echo "http://mpemberton.dyndns.org/lois4/" ?>';</script>
	<script src="{{ URL::asset('js/jquery.js') }}"></script>
	<script src="{{ URL::asset('js/bootstrap-dropdown.js') }}"></script>
	<script src="{{ URL::asset('js/application.js') }}"></script>
	<script src="http://code.jquery.com/ui/1.10.2/jquery-ui.js"></script>
	@yield('scripts')
</body>
</html>
