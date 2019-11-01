@extends('layout')

@section('conteudo')

<div class='flex justify-center'>

<ul class="">
    @foreach($leagues as $league)
    @if(Auth::check())
        @if($league->id == $userModel->id)
        <li class="">{{$league->name}} <a href='/calendario/{{$league->id}}'>EDITAR</a></li>
        @else
        <li class="">{{$league->name}}</li>
        @endif
    @else
    <a href='http://curso.laravelbs.test/eventos/{{$league->id}}'><li class="">{{$league->name}}</li></a>
    @endif
    @endforeach
</ul>

</div>


@endsection