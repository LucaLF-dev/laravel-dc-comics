@extends('layouts.app')

@section('content')
    
  <section class="py-5">
    <div class="container">
      <h1>{{ $comic->title }}</h1>
      <ul>
        <li><span>Tipo:</span>{{$comic->type}}</li>
        <li><span>Serie:</span>{{$comic->series}}</li>
      </ul>
      <p>
        {{ $comic->description }}
      </p>
      <div>
        <a href="{{route('comics.edit', $comic)}}">MODIFICA</a>
      </div>
    </div>
    
  </section>

@endsection