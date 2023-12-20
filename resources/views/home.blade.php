@extends('layouts.app')

@section('title','Home')

@section('content')
    <main id="home">
        <div class="d-flex flex-column h-100  justify-content-center align-content-center align-items-center ">
             <h2>Benvenuto sulla home page di</h2>
        <h1> MovieList</h1>

        <a class="my-btn-home" href="{{ route('movies.index') }}">Scegli un film da vedere</a>
        </div>

    </main>

@endsection
