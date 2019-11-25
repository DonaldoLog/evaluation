
@extends('adminlte::page')

@section('title', 'Evaluacion')

@section('css')
    <script src="./../../css/app.css"></script>
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('content_header')
    <h1>Evaluación {{\Auth::user()->name}} {{\Auth::user()->last_name}}</h1>
@stop


@section('content')
<div id="app">
        <questions-component questions-initial = '{{ $questions }}' teacher-initial = '{{ $teacher }}'></questions-component>
    </div>
@stop

@section('js')
    <script src="./../../js/app.js"></script>
    <script> console.log('Hi!'); </script>
@stop
