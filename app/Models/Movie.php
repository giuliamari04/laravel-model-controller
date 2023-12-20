<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    public function getAllMovies()
    {
        // Recupera tutti i dati dal database utilizzando il modello Book
        $movies = Movie::all();

        // Restituisci i dati alla vista o effettua altre operazioni necessarie
        return view('movies.index', ['movies' => $movies]);
    }
}
