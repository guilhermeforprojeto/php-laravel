@extends('layouts.main')

@section('title', $event->title)

@section('content')

<div class="col-md-10 offser-md-1">
  <div class="row">
    <div id="image-container" class="col-md-6">
      <img src="/img/events/{{ $event->image }}" class="img-fluid" alt="{{$event->title}}"></img>
    </div>
    <div id="info-container" class="col-md-6">
      <h1>{{$event->title}}</h1>
      <p class="event-city">
        <ion-icon name="pin"></ion-icon> {{$event->city}}
      </p>
      <p class="events-particpants">
        <ion-icon name="people"></ion-icon> x participantes
      </p>
      <p class="event-owner">
        <ion-icon name="star-outline"></ion-icon> Dono do Evento
      </p>
      <a href="#" class="btn btn-primary" id="event-submit">Confirmar presença</a>
      <h3>O evento conta com:</h3>
      <ul id="items-list">
        @foreach($event->items as $items)
        <li>
          <ion-icon name="play"></ion-icon>{{$items}}
        </li>
        @endforeach
      </ul>
    </div>
    <div class="col-md-12" id="description-container">
      <h3>Sobre o evento:</h3>
      <p class="event-description">{{ $event->description }}</p>
    </div>
  </div>

  @endsection