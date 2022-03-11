@extends('adminlte::page')

@section('title', 'Error')

@section('content')
    <p>
    {{echo json_encode(array(array("title" => "CSE4500 Class",
    "start" => "2022-02-23T17:30:00",
    "end" => "2022-02-23T18:45:00"), array("title" => "CSE4500 Class",
    "start" => "2022-02-28T17:30:00",
    "end" => "2022-02-28T18:45:00")));

    @foreach($calendarEvents AS $event)
        $event->id
        $event->title
        $event->start_at
        $event->end_at
    @endforeach }}
    </p>
@stop

@section('js')
    <script> console.log('Hi!'); </script>
    
@stop