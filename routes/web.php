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

Route::get('/', 'IndexController@index');


Route::get('/login', 'UserController@getLogin');
Route:: post('/login', 'UserController@postLogin');


Route::get('/signup', 'UserController@getSignup');
Route:: post('/signup', 'UserController@postSignup');



Route::get('/shop', function () {
  
});


Route::get('/shop/product/{id?}', function ($id = null) {
    echo'This is shop/product ' . $id;
});


Route::get('/product', function () {
    echo'This is product';
});


//Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
