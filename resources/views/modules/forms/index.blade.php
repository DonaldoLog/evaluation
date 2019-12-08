
@extends('adminlte::page')

@section('title', 'Formularios')

@section('css')
    <script src="./../css/app.css"></script>
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('content_header')
    <h1>Formularios</h1>
@stop

@section('content')
    <div id="app">
        <forms-component></forms-component>
    </div>
@stop

@section('js')
    <script src="./../js/app.js?val=2020"></script>
    <script> console.log('Hi!'); </script>
@stop
