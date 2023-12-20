@extends('layouts.app')
@section('title','All Books')
@section('content')

<main id="show-movie">
    <section class="container d-flex">
        <div class="row py-5">
        <div class="col-3 d-flex  ">
            <img src="{{ $movie['image'] }}" class=" card-img " alt="img">
        </div>
        <div class="col-6 px-5">


                    <h3 class="text-uppercase fw-bold ">{{ $movie['title'] }}</h3>
                    {{-- descrizione --}}
                    <div class="py-2">
                        <h5>Descrizione:
                        </h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla maiores repudiandae, fuga rerum nam blanditiis temporibus at voluptatum, nostrum sint qui, obcaecati placeat atque ex eveniet porro accusamus aperiam repellat?</p>

                        <ul>
                            <h3>Info</h3>
                            <li class="row  py-3">
                                <div class="col-3">
                                    Released date:
                                </div>
                                <div class="col">
                                   {{$movie->date}}
                                </div>
                            </li>
                            <li class="row  py-3">
                                <div class="col-3">
                                    original title:
                                </div>
                                <div class="col">
                                    {{$movie->original_title}}
                                </div>
                            </li>

                            <li class="row  py-3">
                                <div class="col-3">
                                    nationality:
                                </div>
                                <div class="col">
                                    {{$movie->nationality}}
                                </div>
                            </li>
                        </ul>
            </div>
        </div>
    </section>


</main>

@endsection
