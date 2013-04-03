@extends('layouts.master')

@section('content')
    <h1>Edit Church : {{$church->id}}</h1>
    <hr />

    @include('churches._form')
@stop