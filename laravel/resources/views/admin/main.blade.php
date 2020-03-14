@extends('admin.padrao')
@section('cabecalho')
    Olá {{$nome}}
<br>
     {{-- Seu id é {{$id_admin}} --}} {{-- assim se comenta no laravel --}}
<div class="carousel carousel-slider" style="height:600px;">
  <a class="carousel-item" href="#one!"><img src="https://lorempixel.com/800/400/food/1"></a>
  <a class="carousel-item" href="#two!"><img src="https://lorempixel.com/800/400/food/2"></a>
  <a class="carousel-item" href="#three!"><img src="https://lorempixel.com/800/400/food/3"></a>
  <a class="carousel-item" href="#four!"><img src="https://lorempixel.com/800/400/food/4"></a>  
</div>      
@endsection
@section('conteudo')
@endsection
