@extends('layouts.main')

@section('title','Produtos')

@section('content')

<a href="/">Home</a>
<a href="/contact"> Contato</a>
<a href="/about"> Sobre</a>
<a href="/products"> Produtos</a>

<h1>Pagina de produtos</h1>
@if($busca != '')
<p>O cliente esta buscando por: {{$busca}}</p>
@endif

@endsection