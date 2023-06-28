<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Movie;

class PageController extends Controller
{

    public function index() {
        //Recupero i links per l'header, dal file config/store
        // $links = config('store.someLinks');

        //Recupero i libri dal database
        $movies = Movie::all();

        return view('welcome', compact("movies") );
    }


}
