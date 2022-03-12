@extends('adminlte::page')

@section('title', 'Calendar Event')

@section('content_header')
    <h1>{{ $event->title; }}</h1>
@stop

@section('content')
  <p>{{ $event->start_at; }}</p>
  <p>{{ $event->end_at; }}</p>
@stop