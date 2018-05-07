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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
Route::get('/user', function (Request $request) {
    // return $request->user();
    $user = \App\User::find(1);
    return $user;
});

Route::prefix('clients')->group(function () {
    Route::get('/', 'ClientController@index');
});

Route::prefix('products')->group(function () {
    Route::get('/', 'ProductController@index');
    Route::get('{product}', 'ProductController@show');
    Route::match(
        ['put', 'patch'],
        '{product}',
        'ProductController@update'
    );
    Route::delete('{product}', 'ProductController@delete');
});