
@extends('adminlte::page')

@section('title', 'Grupos/Semestre')

@section('css')
    <script src="./../css/app.css"></script>
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('content_header')
    <h1>Grupos/Semestre</h1>
@stop

@section('content')
    <div id="app">
        <groups-component careers-initial = '{{ $careers }}'></groups-component>
    </div>
@stop

@section('js')
    <script src="./../js/app.js"></script>
    <script> console.log('Hi!'); </script>
@stop
