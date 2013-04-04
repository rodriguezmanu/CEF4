@extends('layouts.master')

@section('content')
    <h1>Edit Worker : {{$worker->id}}</h1>
    <hr />

    @include('workers._form')
@stop
@section('scripts')
<script type="text/javascript">
    $(document).ready(function () {
        $("#lastname").focus();
    });
</script>
@stop
