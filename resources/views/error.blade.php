@extends('adminlte::page')

@section('title', 'Error')
<head>
    <script src="https://kit.fontawesome.com/2bff5bca0b.js" crossorigin="anonymous">
<head/>
@section('content_header')
    <h1>Error</h1>
@stop

@section('content')
    <i class="fa-light fa-bomb"></i><h1 style="color: red;">404 Error - Page Not Found</h1>
    <p>You can return home by clicking <a href="/">here</a></p>
@stop

@section('css')
    </script>
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
    
@stop