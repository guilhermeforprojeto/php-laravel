@extends('layouts.main')

@section('title','HDC Events')

@section('content')
<link rel="stylesheet" href="/css/styles.css">
<script src="/js/script.js"></script>
<!-- <img src="/img/banner.jpg" alt="Banner" /> -->
<a href="/">Home</a>
<a href="/contact"> Contato</a>
<a href="/about"> Sobre</a>
<a href="/products"> Produtos</a>
<h1>Curso de PHP com Laravel</h1>
@if($nome == "Guilherme")
<p>Name is Guilherme</p>
@else
<p>Name is not Guilherme</p>
@endif

@for($i = 0; $i < count($arr); $i++) <p>{{ $arr[$i] }}</p>
  @endfor


  @php
  $name = "Joao";
  echo $name;
  @endphp

  @endsection