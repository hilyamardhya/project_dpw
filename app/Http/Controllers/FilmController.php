<?php

// app/Http/Controllers/FilmController.php
namespace App\Http\Controllers;

use App\Models\Film;
use Illuminate\Http\Request;

class FilmController extends Controller
{
    public function index()
    {
        $films = Film::all();
        return view('films.index', compact('films'));
    }

    public function create()
    {
        return view('films.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'cover' => 'required|image|mimes:jpeg,png,jpg',
            'tahun_rilis' => 'required|digits:4|integer',
            'sutradara' => 'required',
            'studio' => 'required',
        ]);

        $coverPath = $request->file('cover')->store('covers', 'public');
        Film::create($request->all() + ['cover' => $coverPath]);

        return redirect()->route('films.index')->with('success', 'Film added successfully.');
    }

    public function edit(Film $film)
    {
        return view('films.edit', compact('film'));
    }

    public function update(Request $request, Film $film)
    {
        $request->validate([
            'nama' => 'required',
            'tahun_rilis' => 'required|digits:4|integer',
            'sutradara' => 'required',
            'studio' => 'required',
        ]);

        if ($request->hasFile('cover')) {
            $coverPath = $request->file('cover')->store('covers', 'public');
            $film->update($request->all() + ['cover' => $coverPath]);
        } else {
            $film->update($request->all());
        }

        return redirect()->route('films.index')->with('success', 'Film updated successfully.');
    }

    public function destroy(Film $film)
    {
        $film->delete();
        return redirect()->route('films.index')->with('success', 'Film deleted successfully.');
    }
}
