<?php

use App\Http\Controllers\ {
    Main,
    Files
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

Route::prefix('files')->group(function () {
    Route::get('/index', [Files::class, 'index'])->name('file_list');
    Route::get('/scan', [Files::class, 'scan'])->name('scan_file');
});
