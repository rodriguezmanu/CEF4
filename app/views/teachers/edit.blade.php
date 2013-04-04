@extends('layouts.master')

@section('content')
    <h1>Edit Teacher : {{$teacher->id}}</h1>
    <hr />

    @include('teachers._form')
@stop
@section('scripts')
<script type="text/javascript">
    $(document).ready(function () {
        $("#lastname").focus();
    });
</script>
@stop
