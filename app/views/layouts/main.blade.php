<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
	<title>@yield('title')</title>
	<meta http-equiv="content-type" content="text/html; charset=iso-8859-1">
	<style type="text/css">
		html,body{margin:0;padding:0}
		body{font: 76% arial,sans-serif}
		p{margin:0 10px 10px}
		a{display:block;color: #981793;padding:10px}
		
		div#header h1{height:40px;line-height:40px;margin:0;padding-left:10px;background: #EEE;color: #79B30B}
		div#header span{position:absolute;right:0;top:6px;padding-right:10px;}

		div#wrapper{float:right;width:100%;margin-left:-200px}

		div#content{margin-left:200px}
		div#content p{line-height:1.4}

		div#extra{background:#FF8539}
		div#extra{float:left;clear:left;width:200px}

		#footer {
			position:absolute;
			bottom:0;
			width:100%;
			height:30px;			/* Height of the footer */
			background:#6cf;
		}
		div#navigation{background:#B9CAFF}
		div#navigation{float:left}
		
		#navigation { font-size:0.75em; width:150px; }
		#navigation ul { margin:0px; padding:0px; }
		#navigation li { list-style: none; } 
		 
		ul.top-level { background:#666; }
		ul.top-level li {
			border-bottom: #fff solid;
			border-top: #fff solid;
			border-width: 1px;
		}
		 
		#navigation a {
			color: #fff;
			cursor: pointer;
			display:block;
			height:25px;
			line-height: 25px;
			text-indent: 10px;
			text-decoration:none;
			width:100%;
		}
		 
		#navigation a:hover {
			text-decoration:underline;
		}
		 
		#navigation li:hover {
			background: #f90;
			position: relative;
		}
	</style>
</head>
<body>
<div id="container">
	<div id="header"><h1>CEF Database</h1><span><input type="button" value="Logout"></span></div>
	<div id="wrapper">
		<div id="content">
			@yield('content')
		</div>
	</div>
	<div id="navigation">
		<ul class="top-level">
			<li ><a href="{{URL::to('/')}}">Home</a></li>
			<li><a href="{{URL::action('ChurchesController@index')}}">Churches</a></li>
			<li><a href="{{URL::action('SchoolsController@index')}}">Schools</a></li>
			<li><a href="{{URL::action('TeachersController@index')}}">Teachers</a></li>
			<li><a href="{{URL::action('WorkersController@index')}}">Workers</a></li>
			<li><a href="{{URL::action('StudentsController@index')}}">Students</a></li>
			<li><a href="{{URL::action('ReportsController@index')}}">Reports</a></li>
		</ul>
	</div>
	<div id="footer"><p>&copy; 2013 PemFam Corporation</p></div>
</div>
</body>
</html>