@extends('layouts.app')

@section('content')
    
  <section>
    <div class="container p-3">
      <button type="button" class="btn btn-outline-primary btn-lg m-2">
        <a class="text-decoration-none" href="{{route('comics.create')}}">Aggiungi Comic</a>
    </button>
        <div class="row">
            @forelse ($comics as $comic)
            <div class="col-3"> 
              <div class="card" style="width: 100px min-height:800px">
                <figure>
                  <a href="{{route('comics.show',$comic)}}">
                    <img src="{{$comic->thumb}}" alt="" class="card-img-top" style="min-height:600px"  >
                  </a> 
               </figure>
                <div class="card-body">
                  <h5 class="card-title">{{$comic->title}}</h5>
                  <h6> {{$comic->price}} &euro;</h4>
                  <h6>{{$comic->series}}</h5>
                  <h6> {{$comic->type}}</h5>
                  <a href="{{route('comics.edit', $comic)}}" class="btn btn-primary">MODIFICA</a>
                </div>
              </div>
               
        
                
               
            </div>
          @empty
                Nessun Comics trovato
               
          @endforelse
            
        </div>
      
         
            
             
           
       
          
        
    </div>
    
  </section>

@endsection