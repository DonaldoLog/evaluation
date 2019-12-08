
@extends('adminlte::page')

@section('title', 'Admin')

@section('css')
    <script src="./../../css/app.css"></script>
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('content_header')
    <h1> {{ $group->name }} </h1>
@stop

@section('content')
    <div id="app">
    <admin-group-component teachers-Initial='{{ $teachers }}' group-Initial='{{ $group }}' students-Initial='{{ $students }}'></admin-group-component>
    </div>
@stop

@section('js')
    <script src="./../../js/app.js?val=2020"></script>
    <script> console.log('Hi!'); </script>
@stop
