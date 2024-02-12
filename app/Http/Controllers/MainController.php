<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Movie;

class MainController extends Controller
{
    public function index(){

        $movies = Movie::all();

        // Vardump+die function: stoppa l'esecuzione del codice e stampa a video
        // dd($movie);

        return view('pages.index', compact('movies'));

    }
}
