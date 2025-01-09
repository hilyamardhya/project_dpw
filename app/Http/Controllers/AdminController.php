<?php

namespace App\Http\Controllers;

use App\Models\Movie;

class AdminController extends Controller
{
    public function dashboard()
    {
        $movies = Movie::all();
        return view('admin.dashboard', compact('movies'));
    }
}

