@extends('layouts.app')
@section('title','All Movies')
@section('content')

{{-- <h1>books</h1>
<ul>
    @foreach ($books as $book )
    <li><a href="{{route('books.show',$book->id)}}">{{$book->title}}</a></li>

    @endforeach
</ul> --}}

<section class="container">
<h1>Movies</h1>
<div class="row py-3">
    @foreach ($movies as $movie)
<div class="col-3 py-3">
     <div class="card h-100">
            <img src="{{$movie->image}}" class="card-img-top" alt=" {{$movie->title }}">
            <div class="card-body">
              <h5 class="card-title"> {{$movie->title }}</h5>
              <p class="card-text">
                {{-- <h5>Original title: {{$movie->original_title }}</h5>
                <h5>Nationality:  {{$movie->nationality }}</h5>
                <h5>Released date:  {{$movie->date }}</h5> --}}
                <h5>Vote:  {{$movie->vote }}</h5>
              </p>
              <a href="#" class="btn btn-primary">info movie</a>
            </div>
          </div>
</div>

    @endforeach
</div>
</section>

@endsection
