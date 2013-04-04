@extends('layouts.master')

@section('content')
    <h1>Edit Student : {{$student->id}}</h1>
    <hr />

    @include('students._form')
@stop
@section('scripts')
<script type="text/javascript">
    $(document).ready(function () {
        $("#lastname").focus();
    });
</script>
@stop
