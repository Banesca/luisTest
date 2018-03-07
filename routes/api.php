<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/clientes', 'ClinetesController@add');
Route::put('/clientes/{id}', 'ClinetesController@update');
Route::delete('/clientes/{id}', 'ClinetesController@borrar');
Route::get('/clientes', 'ClinetesController@listar');
Route::get('/clientes/{id}', 'ClinetesController@listarID');

