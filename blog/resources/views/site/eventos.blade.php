@extends('layout')

@section('conteudo')

@foreach ($league as $l)
    {{$l->name}}
@endforeach
<br><br><br>
@foreach ($events as $event)
    {{$event->date}}
@endforeach



@endsection