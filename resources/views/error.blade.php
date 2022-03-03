@extends('adminlte::page')

@section('title', 'Error')

@section('content_header')
    <h1>Error</h1>
@stop

@section('content')
    <h1 style="color: red;">404 Error - <span style="color: yellow;"><i class="fa-solid fa-circle-exclamation"></i></span> Page Not Found</h1>
    <p>You can return home by clicking <a href="/">here</a></p>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop