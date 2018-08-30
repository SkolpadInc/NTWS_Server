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

//List Acccounts
Route::get('accounts','AccountController@index');

//List Acccounts
Route::get('accounts{id}','AccountController@show');

//Create Acccounts
Route::post('accounts','AccountController@store');

//Update Acccounts
Route::put('accounts','AccountController@store');

//Delete Acccounts
Route::delete('accounts','AccountController@destroy');