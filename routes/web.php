<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//Route::get('unit-fill', 'ImportController@importUnits');
//Route::get('tag',function (){
//    $product = \App\Product::find(1);
//   //return $tag->products ;
//   return $product->tags ;
//});

Route::get('role',function (){
    $role = \App\Role::find(2);
    //return $tag->products ;
    return $role->users;
});

Route::get('users',function (){
    $user =\App\User::find(501);
    return $user->roles;
});

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('test', function (){
    return 'TmTam';
})->middleware([
    'auth' ,'is_admin' ,'is_support'
]);
