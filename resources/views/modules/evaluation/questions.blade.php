
@extends('adminlte::page')

@section('title', 'Evaluacion')

@section('css')
    <script src="./../../css/app.css"></script>
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('content_header')
    <h1>Evaluacion!</h1>
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
