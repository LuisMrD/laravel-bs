@extends('layout')

@section('conteudo')

<div class='flex justify-center'>

<ul class="">
    @foreach($leagues as $league)
    @if(Auth::check())
        @if($league->id == $userModel->id)
        <li class=""><a href='http://laravelbs.test/reports/{{$league->id}}'>{{$league->name}}</a> <a href='/reports/edit/{{$league->id}}'>EDITAR</a></li>
        @else
        <a href='http://laravelbs.test/reports/{{$league->id}}'><li class="">{{$league->name}}</li></a>
        @endif
    @else
    <a href='http://laravelbs.test/reports/{{$league->id}}'><li class="">{{$league->name}}</li></a>
    @endif
    @endforeach
</ul>

</div>


@endsection