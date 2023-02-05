<?php

use App\Http\Controllers\ {
    Main,
    ScrapeMovie
};
use Illuminate\Support\Facades\Route;

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

Route::any('/', [Main::class, 'index']);

Route::prefix('scrape')->group(function () {
    Route::get('/movie', [ScrapeMovie::class, 'index'])->name('scrape_movie');
});


Route::any('/welcome', function () {
    return view('welcome');
});
