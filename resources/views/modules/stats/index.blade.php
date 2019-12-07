
@extends('adminlte::page')

@section('title', 'Evaluacion')

@section('css')
    <script src="./../css/app.css"></script>
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('content_header')
<h1>Bienvenido  {{\Auth::user()->name}} {{\Auth::user()->last_name}}</h1>
@stop


@section('content')
<div id="app">
    <stats-component careers-initial = '{{ $careers }}' evaluation-initial = '{{ $evaluation }}'></stats-component>
</div>
@stop

@section('js')
    <script src="./../js/app.js"></script>
    <script> console.log('Hi!'); </script>
@stop
