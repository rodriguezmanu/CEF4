@extends('layouts.master')

@section('content')
<h1>Workers</h1>
<hr />

<ul>
    @foreach($workers as $worker)
        <li>{{ Html::linkAction('WorkersController@edit', $worker->lastname.', '.$worker->firstname, array($worker->id)) }}
			{{ Form::model($worker, [ 'method' => 'DELETE', 'route' => ['workers.destroy', $worker->id] ]) }}
			{{ Form::submit('DELETE') }}
			{{ Form::close() }}</li>
    @endforeach
</ul>

{{ Html::linkAction('WorkerController@create', 'New') }}
@stop
