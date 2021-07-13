@extends('layouts.app')

@section('main-content')
<main>
    <div class="wrap btn btn-current-series">
        <a href="#"> Current Series</a>
    </div>
    <div class="wrap cards">
        @foreach ($comicsArray as $comic)
            <div  class="card">
                <div class="card-content">
                    <img src="{{$comic['thumb']}}" alt="{{$comic['series']}}">
                </div>
                <h4 class="series">{{$comic['series']}}</h4>
            </div>    
        @endforeach
    </div> 
    <div class="btn">
        <a href="#">Learn More</a>
    </div> 
</main>
@endsection
