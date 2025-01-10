<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        // Data dummy untuk film
        $movies = [
            [
                'name' => 'Film Bagus',
                'cover' => 'C:\Users\ASUS\OneDrive\Documents\File Nadine\SEM 3\DPW\project_dpw\public\gambar\image1.png',
                'year' => 2024,
                'director' => 'Bagus',
                'studio' => 'Universal',
            ],
            [
                'name' => 'Film Bagus Banget',
                'cover' => 'C:\Users\ASUS\OneDrive\Documents\File Nadine\SEM 3\DPW\project_dpw\public\gambar\image2.png',
                'year' => 2025,
                'director' => 'Bagus',
                'studio' => 'Universal',
            ],
        ];
        return view('admin', compact('movies'));
    }
}