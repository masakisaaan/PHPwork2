<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/


Route::get('/','ecController@index')->name('index');
Route::get('/detail', 'ecController@detail')->name('detail');
Route::get('/cart', 'ecController@cart')->name('cart');
Route::post('/cart','ecController@insertCart');
Route::post('/cart/clear','ecController@clearCart');

Auth::routes();
Route::get('/auth/home', 'HomeController@index');


