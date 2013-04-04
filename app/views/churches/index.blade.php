@extends('layouts.master')

@section('content')
<h1>Churches</h1>
{{ Html::linkAction('ChurchesController@create', 'New') }}
<hr />

<ul>
    @foreach($churches as $church)
        <li>{{ Html::linkAction('ChurchesController@edit', $church->name, array($church->id)) }}</li>
    @endforeach
</ul>

{{$churches->links()}}
@stop
