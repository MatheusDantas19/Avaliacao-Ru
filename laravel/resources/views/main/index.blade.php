@extends('layout')

@section('cabecalho')
    Bem Vindo
@endsection

@section('conteudo')
<ul class="">
    @foreach($series as $serie)
    <li><?= $serie ;?></li>
    @endforeach
</ul>
@endsection

