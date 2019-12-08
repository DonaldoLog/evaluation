
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
@if ($evaluation)
<div id="app">
    <evaluation-student-component teachers-initial = '{{ $teachers }}' done-initial = '{{ $done }}'></evaluation-student-component>
</div>
    @else
    <h2> Ninguna evaluacion disponible</h2>
@endif

@stop

@section('js')
    <script src="./../js/app.js?val=2020"></script>
    <script> console.log('Hi!'); </script>
@stop
