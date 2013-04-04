@extends('layouts.master')

@section('content')
<h1>Teachers</h1>
{{ Html::linkAction('TeachersController@create', 'New') }}
<hr />

<ul>
    @foreach($teachers as $teacher)
        <li>{{ Html::linkAction('TeachersController@edit', $teacher->lastname, array($teacher->id)) }}</li>
    @endforeach
</ul>

{{$teachers->links()}}
@stop
