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

Route::prefix('clients')->group(function () {
    Route::get('/', 'ClientController@index');
    Route::show('show', 'ClientController@show');
    Route::post('create', 'ClientController@store');
    Route::match(['put', 'patch'], 'update', 'ClientController@update');
    Route::delete('delete', 'ClientController@delete');
});

Route::prefix('product')->group(function () {
    Route::get('/', 'ProductController@index');
});