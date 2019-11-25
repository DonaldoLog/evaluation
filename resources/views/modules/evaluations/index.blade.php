
@extends('adminlte::page')

@section('title', 'Evaluación')

@section('css')
    <script src="./../css/app.css"></script>
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('content_header')
    <h1>Evaluación</h1>
@stop

@section('content')
    <div id="app">
    <evaluation-component forms-initial='{{$forms}}'></evaluation-component>
    </div>
@stop

@section('js')
    <script src="./../js/app.js"></script>
    <script> console.log('Hi!'); </script>
@stop
