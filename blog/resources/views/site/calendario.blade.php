@extends('layout')

@section('conteudo')

<div class='flex justify-center'>

<ul class="">
    @foreach($leagues as $league)
    <li class="">{{$league->name}}</li>
    @endforeach
</ul>

</div>


@endsection