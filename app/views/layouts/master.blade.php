<!DOCTYPE Html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>@yield('title')</title>
<link rel="stylesheet" href="{{ URL::asset('css/bootstrap.css') }}">
<link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
</head>
	<body>
<div class="navbar navbar-fixed-top">
<div class="navbar-inner">
<div class="container-fluid">
{{Html::link('/', 'CEF Database', array('class' => 'brand'))}}
<!--
<ul class="nav">
<li <?php if (isset($navbar) && $navbar == 'home') echo "class='active'" ?> >{{Html::link('/', 'Home')}}</li>
<li <?php if (isset($navbar) && $navbar == 'churches') echo "class='active'" ?> >{{ Html::link('/churches', 'Churches') }}</li>
<li <?php if (isset($navbar) && $navbar == 'students') echo "class='active'" ?> >{{ Html::link('/students', 'Students') }}</li>
<li <?php if (isset($navbar) && $navbar == 'reports') echo "class='active'" ?> >{{ Html::link('/reports', 'Reports') }}</li>
<li <?php if (isset($navbar) && $navbar == 'configuration') echo "class='active'" ?> >{{ Html::link('/configuration', 'Configuration') }}</li>
</ul>
-->

<div class="btn-group pull-right">
<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
<i class="icon-user"></i> Account
<span class="caret"></span>
</a>
<ul class="dropdown-menu">
<li>@if ( Auth::guest() )
{{ Html::link('login', 'Login') }}
@else
<li>{{ Html::link('account', 'Profile') }}</li>
<li class="divider"></li>
<li>{{ Html::link('logout', 'Logout') }}</li>
@endif</li>
</ul>
</div>
</div>
</div>
</div>

<div class="container">
<div class="content">
<div class="row">
<div class="span3">
<div class="well sidebar">
<ul class="nav nav-list">
@section('sidebar')

@if (Auth::guest())
<li>{{Html::linkAction('admin.account@login', 'Login')}}</li>
<li>{{Html::linkAction('admin.account@newuser', 'Sign up for an account')}}</li>
@else
<li ><a href="{{URL::to('/')}}"><i class="icon-home"></i> Home</a></li>
<li><a href="{{URL::action('ChurchesController@index')}}"><i class="icon-plus"></i> Churches</a></li>
<li><a href="{{URL::action('SchoolsController@index')}}"><i class="icon-list"></i> Schools</a></li>
<li><a href="{{URL::action('TeachersController@index')}}"><i class="icon-list"></i> Teachers</a></li>
<li><a href="{{URL::action('WorkersController@index')}}"><i class="icon-list"></i> Workers</a></li>
<li><a href="{{URL::action('StudentsController@index')}}"><i class="icon-list"></i> Students</a></li>
<li><a href="{{URL::action('ReportsController@index')}}"><i class="icon-search"></i> Reports</a></li>
@endif
</ul>
</div>
</div>
<div class="span9">

@yield('content')

</div><!--/span-->
</div><!--/row-->
</div><!-- /content -->

<hr>

<footer>
<p>&copy; 2013 PemFam Corporation</p>
</footer>

</div><!--/container-->

        <script src="{{ URL::asset('js/jquery.js') }}"></script>
        <script src="{{ URL::asset('js/bootstrap-dropdown.js') }}"></script>

    </body>
</html>