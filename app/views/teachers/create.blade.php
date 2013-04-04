@extends('layouts.master')

@section('content')
    <h1>Create Teacher</h1>
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
