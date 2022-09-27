<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\FilmController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\GenreController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//user awal
Route::get('/home', [PageController::class, 'home']);
Route::get('/tentang', [PageController::class, 'tentang']);
Route::get('/artikel', [PageController::class, 'artikel']);
Route::get('/kontak', [PageController::class, 'kontak']);
Route::get('/romance', [PageController::class, 'kategori']);
Route::get('/comedy', [PageController::class, 'kategori2']);

//admin
Route::get('/index', [AdminController::class, 'index']);
Route::get('/film', [AdminController::class, 'dataFilm']);
Route::get('/berandaadmin', [AdminController::class, 'berandaadmin']);

//film
Route::get('/tampilfilm', [FilmController::class, 'tampilfilm']);
Route::get('/tambahfilm', [FilmController::class, 'createfilm']);
Route::get('/editfilm', [FilmController::class, 'editfilm']);