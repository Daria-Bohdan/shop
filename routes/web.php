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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/shop', function () {
   // $user = new \App\Users();

$user = \App\Users ::where('email','admin@admin.com')->where('username','Bohdan')->get();

    echo '<pre>';
    var_dump($user);
});


Route::get('/shop/product/{id?}', function ($id = null) {
    echo'This is shop/product ' . $id;
});


Route::get('/product', function () {
    echo'This is product';
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
