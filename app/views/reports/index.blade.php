@extends('layouts.master')

@section('content')
<h1>Reports</h1>
<hr />

<ul>
        <li><a href="{{URL::action('ReportsController@pdf')}}">PDF</a></li>
</ul>
@stop
