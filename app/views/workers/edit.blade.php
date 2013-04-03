@extends('layouts.master')

@section('content')
    <h1>Edit Worker : {{$worker->id}}</h1>
    <hr />

    @include('workers._form')
@stop
