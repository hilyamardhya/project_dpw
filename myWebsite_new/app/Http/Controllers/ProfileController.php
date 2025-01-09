<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        $profile = [
            'username' => 'John Doe',
            'wishlist' => 2,
            'favorites' => 10,
            'items' => [
                ['title' => 'Disney Strange World', 'image' => 'prof1.png'],
                ['title' => 'Disney Strange World', 'image' => 'prof1.png'],
                ['title' => 'Netflix Squid Game', 'image' => 'prof1.png'],
            ],
        ];

        return view('profile', compact('profile'));
    }
}
