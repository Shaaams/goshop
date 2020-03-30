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

// Get Categories
Route::get('categories', 'Api\CategoryController@index');
Route::get('categories/{id}', 'Api\CategoryController@show');
// Get Tags
Route::get('tags', 'Api\TagController@index');
Route::get('tags/{id}', 'Api\TagController@show');
// Get Products
Route::get('products', 'Api\ProductController@index');
Route::get('products/{id}', 'Api\ProductController@show');



Route::group(['auth:api'], function(){

});
//Route::middleware('auth:api')->get('/products', function (Request $request) {
////    return $request->user();
//    return \App\Product::all();
//
//});
