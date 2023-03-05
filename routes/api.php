<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use \App\Http\Controllers\ {
    Init
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

Route::any('table', function () {
    $data = [
        ['name' => '复仇者联盟(Avengers)', 'release_date' => date('Y年m月d日')],
        ['name' => 'test1', 'release_date' => date('2022年m月d日')],
    ];
//    $data = [];
    $data = [
        'code'  => 0,
        'data'  => $data,
        'count' => 50
    ];
    return response()->json($data);
});


