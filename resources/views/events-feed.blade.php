@extends('adminlte::page')

@section('title', 'Events')

@section('content')
    @foreach($calendarEvents AS $event)
        {{ $event->id }}
        {{ $event->title }}
        {{ $event->start_at }}
        {{ $event->end_at }}
    @endforeach
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop