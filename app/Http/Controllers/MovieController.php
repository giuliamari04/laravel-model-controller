<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class MovieController extends Controller
{
    public function index(){
        $movies = Movie::all();
        //$book = Book::where('title','like','%l')->get();
       //dd($books);
        return view('movies.index',compact('movies'));
     }
}
