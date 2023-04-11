<?php

use App\Http\Controllers\MovieController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

Route::get('/', [SessionController::class, 'index'])->middleware('isTamu');
Route::get('login', [SessionController::class, 'index'])->middleware('isTamu');
Route::post('login', [SessionController::class, 'login'])->middleware('isTamu');
Route::get('logout', [SessionController::class, 'logout']);


Route::get('home-admin', [AdminController::class, 'index'])->middleware('isAdmin');
Route::get('home-admin-pesanan', [AdminController::class, 'pesanan'])->middleware('isAdmin');

Route::get('/homepage', [MovieController::class, 'home'])->middleware('isLogin');
Route::get('/movies', [MovieController::class, 'movies']);
Route::get('/tv-shows', [MovieController::class, 'tvShows']);
Route::get('/search', [MovieController::class, 'search']);
Route::get('/movie/{id}', [MovieController::class, 'movieDetails']);
Route::get('/tv/{id}', [MovieController::class, 'tvDetails']);


Route::get('register', [SessionController::class, 'register']);
Route::post('create', [SessionController::class, 'create']);