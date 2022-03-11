@extends('adminlte::page')

@section('title', 'Calendar Event')

@section('content_header')
    <h1>Event</h1>
@stop

@section('content')
  <h2>{{ $event->title; }}</h2>
  <p>{{ $event->start_at; }}</p>
  <p>{{ $event->end_at; }}</p>
@stop