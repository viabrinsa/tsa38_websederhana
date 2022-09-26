<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

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

Route::get('/home', [PageController::class, 'home']);
Route::get('/tentang', [PageController::class, 'tentang']);
Route::get('/artikel', [PageController::class, 'artikel']);
Route::get('/kontak', [PageController::class, 'kontak']);
Route::get('/romance', [PageController::class, 'kategori']);
Route::get('/comedy', [PageController::class, 'kategori2']);

Route::get('/index', [AdminController::class, 'index']);
Route::get('/film', [AdminController::class, 'dataFilm']);
