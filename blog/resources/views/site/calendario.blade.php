@extends('layout')

@section('conteudo')

<div class='flex justify-center'>

<ul class="">
    @foreach($leagues as $league)
    <li class="">{{$league->nome}}</li>
    @endforeach
</ul>

</div>


@endsection