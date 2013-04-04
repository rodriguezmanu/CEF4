@extends('layouts.master')

@section('content')
<h1>Schools</h1>
{{ Html::linkAction('SchoolsController@create', 'New') }}
<hr />

<ul>
    @foreach($schools as $school)
        <li>{{ Html::linkAction('SchoolsController@edit', $school->name, array($school->id)) }}
			{{ Form::model($school, [ 'method' => 'DELETE', 'route' => ['schools.destroy', $school->id] ]) }}
			{{ Form::submit('DELETE') }}
			{{ Form::close() }}</li>
    @endforeach
</ul>

@stop
