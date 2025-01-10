<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\Movies;

class MovieController extends Controller
{
    public function index()
    {
        $movies = Movies::all();
        return view('home', compact('movies'));
    }
}
