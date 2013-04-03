@extends('layouts.master')

@section('content')
<h1>Churches</h1>
<hr />
<ul>
    @foreach($churches as $church)
        <li>{{ Html::linkAction('ChurchesController@edit', $church->name, array($church->id)) }}</li>
    @endforeach
</ul>

{{ Html::linkAction('ChurchesController@create', 'New') }}
@stop
