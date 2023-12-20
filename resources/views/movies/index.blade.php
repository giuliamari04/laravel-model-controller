@extends('layouts.app')
@section('title','All Movies')
@section('content')

{{-- <h1>books</h1>
<ul>
    @foreach ($books as $book )
    <li><a href="{{route('books.show',$book->id)}}">{{$book->title}}</a></li>

    @endforeach
</ul> --}}

<h1>Movies</h1>
<ul>
    @foreach ($movies as $movie)
        <li>
            {{-- <a href="{{ route('books.show', $movie->id) }}"> --}}
                {{$movie->title }}
            </a>
        </li>
    @endforeach
</ul>


@endsection
