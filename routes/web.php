<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

use App\Http\Requests;

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

Route::get('/complete', 'ecController@RegisterComplete'); //auth

Route::post('/cart','ecController@insertCart');
Route::post('/cart/clear','ecController@clearCart');

Auth::routes();
Route::get('/logout' , 'Auth\LoginController@logout');

//old auth 
//Route::get('auth/twitter', 'Auth\AuthController@redirectToProvider');
//Route::get('auth/twitter/callback', 'Auth\AuthController@handleProviderCallback');

//twitter
Route::get('/login/twitter', 'Auth\SocialController@getTwitterAuth');
Route::get('/login/twitter/callback', 'Auth\SocialController@getTwitterAuthCallback');

//facebook
Route::get('/login/facebook', 'Auth\SocialController@getFacebookAuth');
Route::get('/login/facebook/callback', 'Auth\SocialController@getFacebookAuthCallback');

//google
Route::get('/login/google', 'Auth\SocialController@getGoogleAuth');
Route::get('/login/google/callback', 'Auth\SocialController@getGoogleAuthCallback');

//line Coming Soon..
Route::get('/login/line', 'Auth\SocialController@getLineAuth');
Route::get('/login/line/callback', 'Auth\SocialController@getLineAuthCallback');

//basic mail
Route::get('/mail', 'MailController@basic_email');