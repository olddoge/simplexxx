<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::any('init', function () {
    $data = json_decode(file_get_contents(public_path('api/init.json')), true);
    return response()->json($data);
});

Route::any('clear', function () {
    return response()->json(['code' => 1, 'msg' => '成功']);
});
