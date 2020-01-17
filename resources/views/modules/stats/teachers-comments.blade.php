
@extends('adminlte::page')

@section('title', 'Profesores')

@section('css')
    <script src="./../../css/app.css"></script>
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('content_header')
    <h1>Profesores</h1>
@stop

@section('content')
    <div id="app">
    <teachers-comments-component evaluation-initial= '{{ $evaluation }}'></teachers-comments-component>
    </div>
@stop

@section('js')
    <script src="./../../../js/app.js?val=2020"></script>
@stop
