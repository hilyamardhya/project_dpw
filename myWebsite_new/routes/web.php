<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\FilmController;

Route::get('/', function () {
    return view('welcome');
});
Route::redirect('/', '/login');

Route::get('/login', [AuthController::class, 'indexI'])->name('login.index');
Route::post('/login/loginakun', [AuthController::class, 'login'])->name('login.post');

//regis
Route::get('/register', [RegisterController::class, 'indexI'])->name('register');
Route::post('/register', [RegisterController::class, 'store'])->name('register.post');

//profile
Route::get('/profile', [ProfileController::class, 'index'])->name('profile');

//table films
Route::resource('films', FilmController::class);


// Route::get('/home', [MovieController::class, 'index'])->middleware('auth');
// Route::get('/profile', [ProfileController::class, 'view'])->middleware('auth');
// Route::post('/profile/update', [ProfileController::class, 'update'])->middleware('auth');
// Route::get('/admin', [AdminController::class, 'dashboard'])->middleware('auth', 'is_admin');
// Route::middleware(['auth'])->group(function () {
// Route::get('/profile', [ProfileController::class, 'view'])->name('profile.view');
// Route::post('/profile', [ProfileController::class, 'update'])->name('profile.update');
// Route::get('/login', [AuthController::class, 'loginPage'])->name('login');


// });