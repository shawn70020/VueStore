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
Route::post('/signin', 'UserController@store')->where('any', '.*');
Route::post('/login', 'UserController@checkLogin')->where('any', '.*');
Route::post('/products/imageupload', 'ProductsController@imageUpload')->where('any', '.*');
Route::post('/products/upload', 'ProductsController@createProducts')->where('any', '.*');
Route::get('/products/men', 'ProductsController@getProducts')->where('any', '.*');
