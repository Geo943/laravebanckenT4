<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClieneteController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|*/


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});




Route::get('/cliente', 'App\Http\Controllers\ClientesController@index');

Route::post('/clientec', 'App\Http\Controllers\ClientesController@store');

Route::put('/clienteup', 'App\Http\Controllers\ClientesController@update');

Route::delete('/clientedel', 'App\Http\Controllers\ClientesController@destroy');

//Route::post('/newcliente', 'App\Http\Controllers\ClieneteController@show');