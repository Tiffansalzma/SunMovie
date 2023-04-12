<?php

use App\Http\Controllers\MovieController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Route;

Route::get('/', [SessionController::class, 'index'])->middleware('isTamu');
Route::get('login', [SessionController::class, 'index'])->middleware('isTamu');
Route::post('login', [SessionController::class, 'login'])->middleware('isTamu');
Route::get('logout', [SessionController::class, 'logout']);


Route::resource('home-admin', AdminController::class)->middleware('isAdmin');

Route::get('/homepage', [MovieController::class, 'home'])->middleware('isLogin');
Route::get('/movies', [MovieController::class, 'movies'])->middleware('isLogin');
Route::get('/tv-shows', [MovieController::class, 'tvShows'])->middleware('isLogin');
Route::get('/ticket', [OrderController::class, 'index'])->middleware('isLogin');
Route::get('/search', [MovieController::class, 'search'])->middleware('isLogin');
Route::get('/movie/{id}', [MovieController::class, 'movieDetails'])->middleware('isLogin');
Route::get('/tv/{id}', [MovieController::class, 'tvDetails'])->middleware('isLogin');


Route::get('register', [SessionController::class, 'register']);
Route::post('create', [SessionController::class, 'create']);