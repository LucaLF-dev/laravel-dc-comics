@extends('layouts.app')

@section('content')
    
  <section>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <a href="{{route('comics.create')}}">Aggiungi Comic</a>
            </div>
            @forelse ($comics as $comic)
            <div class="col-3"> 
                <figure>
                   <a href="{{route('comics.show',$comic)}}"><img src="{{$comic->thumb}}" alt="" class="img-fluid img-thumbnail"  ></a> 
                </figure>
        
                <h3 class="">{{$comic->title}}</h3>
                <h4> {{$comic->price}} &euro;</h4>
                <h5>{{$comic->series}}</h5>
                <h5> {{$comic->type}}</h5>
            </div>
          @empty
                Nessun Comics trovato
               
          @endforelse
            
        </div>
      
         
            
             
           
       
          
        
    </div>
    
  </section>

@endsection