@extends('layouts.main')

@section('title','HDC Events')

@section('content')


<div id="search-container" class="col-md-12">

  <h1>Busque um Evento</h1>
  <form action="">
    <input type="text" id="search" name="search" class="form-control" placeholder="Procurar...">
  </form>
</div>
<div id="events-container" class="col-md-12">
  <h2>Proximos Eventos</h2>
  <p>Veja os eventos dos proximos dias</p>
  <div id="cards-container" class="row">
    @foreach($events as $event)
    <div class="card col-md-3">
      <img src="/img/event_placeholder.jpg" alt="{{ $event->title }}">
      <div class="card-body">
        <p class="card-date">30/10/2022</p>
        <h5 class="card-title">{{ $event->title }}</h5>
        <p class="card-participantes">x participantes</p>
        <a href="#" class="btn btn-primary"> Saber mais</a>
      </div>
    </div>
    @endforeach
  </div>
</div>
</div>


@endsection