@extends('adminlte::page')

@section('title', 'Calendar Event')

@section('content_header')
    <h1>{{ $event[0]->title; }}</h1>
@stop

@section('content')
  <p>{{ $event[0]->start_at; }}</p>
  <p>{{ $event[0]->end_at; }}</p>
@stop