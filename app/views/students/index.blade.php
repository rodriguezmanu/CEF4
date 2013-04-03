@extends('layouts.master')

@section('content')
<h1>Students</h1>
<hr />

<ul>
    @foreach($students as $student)
        <li>{{ Html::linkAction('StudentsController@edit', $student->lastname.', '.$student->firstname, array($student->id)) }}
			{{ Form::model($student, [ 'method' => 'DELETE', 'route' => ['students.destroy', $student->id] ]) }}
			{{ Form::submit('DELETE') }}
			{{ Form::close() }}</li>
    @endforeach
</ul>

{{ Html::linkAction('StudentsController@create', 'New') }}
@stop
