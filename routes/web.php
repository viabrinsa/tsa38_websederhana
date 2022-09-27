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
Route::post('/tambahfilm', [FilmController::class, 'storefilm'])->name("tambahfilm");
Route::get('/editfilm/{id?}', [FilmController::class, 'editfilm'])->name("editfilm");
Route::post('/editfilm/{id}', [FilmController::class, 'updatefilm']);
Route::post('/destroy/{id}', [FilmController::class, 'destroy']);

//artikel
Route::get('/tampilart', [ArtikelController::class, 'index']);
Route::get('/createart', [ArtikelController::class, 'create'])->name("createart");
Route::post('/tambahart', [ArtikelController::class, 'store'])->name("tambahart");
Route::get('/editart/{id?}', [ArtikelController::class, 'edit'])->name("editart");
Route::post('/editart/{id}', [ArtikelController::class, 'update']);
Route::post('/destroy/{id}', [ArtikelController::class, 'destroy']);