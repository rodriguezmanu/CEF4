@extends('layouts.master')

@section('content')
    <h1>Edit School : {{$school->id}}</h1>
    <hr />

    @include('schools._form')
@stop