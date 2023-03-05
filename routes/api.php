<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use \App\Http\Controllers\ {
    Init,
    Files
};

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::any('init', [Init::class, 'menu']);
Route::any('clear', [Init::class, 'clear']);

Route::prefix('files')->group(function () {
    Route::get('/list', [Files::class, 'fileList'])->name('api_filelist');    // 文件列表
});



