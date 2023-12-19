@extends('layouts.app')

@section('content')

<section class="py-5">
  <div class="container">
     <form action="{{route('comics.store')}}" method="POST" > 

      @csrf

      <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text" class="form-control" name="title" id="title" placeholder="Titolo">
      </div>
      <div class="mb-3">
        <label for="type" class="form-label">Tipologia</label>
        <input type="text" class="form-control" name="type" id="type" placeholder="Tipo di comic">
      </div>
      <div class="mb-3">
        <label for="image" class="form-label">Image (url)</label>
        <input type="text" class="form-control" name="image" id="image" placeholder="Url image">
      </div>
      <div class="mb-3">
        <label for="series" class="form-label">Series</label>
        <input type="text" class="form-control" name="series" id="series" placeholder="Series">
      </div>


      <div class="mb-3">
        <label for="description" class="form-label">Descrizione</label>
        <textarea class="form-control" name="description" id="description" rows="3" placeholder="Descrivi il comics"></textarea>
      </div>

      <div class="">
        <input type="submit" class="btn btn-primary" value="crea">
      </div>

    </form>
  </div>
</section>

@endsection