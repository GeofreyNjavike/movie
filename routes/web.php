<?php

use App\Http\Controllers\WeatherController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\TvShowsController;

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

Route::get('/', [HomeController::class, 'index'])->name('/');

Route::get('/review/{id}', [HomeController::class, 'review']);

Route::get('movies', function () {
    return view('welcome');
})->name('movies');

Route::get('tv-shows', [TvShowsController::class, 'index'])->name('tv-shows');
Route::get('/search', [SearchController::class, 'index'])->name('search');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
