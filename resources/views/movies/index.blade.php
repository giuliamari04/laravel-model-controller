@extends('layouts.app')
@section('title','All Movies')
@section('content')


<section  id="movie-list">
    <div class="container">
<h1>Movies</h1>
<div class="row py-3">
    @foreach ($movies as $movie)
<div class="col-3 py-3">
     <div class="card border-0 h-100">
            <img src="{{$movie->image}}" class="card-img-top" alt=" {{$movie->title }}">
            <div class="card-body d-flex flex-column justify-content-between text-center ">
              <h5 class="card-title"> {{$movie->title }}</h5>
              <p class="card-text">
                <h5>Vote:  {{$movie->vote }}</h5>
                <div class="d-flex flex-row justify-content-center py-3">
                    @for ($i = 1; $i <= 5; $i++)
                        @if ($i <= $movie->vote)
                            <i class="star fa fa-star"></i>
                        @else
                            <i class="empty-star fa fa-star"></i>
                        @endif
                    @endfor
                </div>
              </p>
              <a href="{{ route('movies.show', $movie->id) }}" class="my-btn-home">info movie</a>
            </div>
          </div>
</div>

    @endforeach
</div>
</div>
</section>

@endsection
