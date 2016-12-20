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

Route::post('/cart','ecController@insertCart'); //カート
Route::get('/cart/delete','ecController@deleteCart'); //カート内商品削除
Route::post('/cart/clear','ecController@clearCart'); //カートクリア

// Auth
Auth::routes();
Route::post('/register','Auth\RegisterController@register'); //会員登録ページ

Route::get('/complete', 'ecController@RegisterComplete'); //会員登録完了ページ
Route::get('/logout' , 'Auth\LoginController@logout'); //ログアウト
Route::get('/order/complete', 'ecController@orderComplete'); //注文完了

Route::group(['middleware' => 'auth'], function () {
Route::post('/order', 'ecController@order')->name('order');
Route::get('/order', 'ecController@order');
Route::get('/logout' , 'Auth\LoginController@logout'); //ログアウト
});

//twitter
Route::get('/login/twitter', 'Auth\SocialController@getTwitterAuth');
Route::get('/login/twitter/callback', 'Auth\SocialController@getTwitterAuthCallback');

//facebook
Route::get('/login/facebook', 'Auth\SocialController@getFacebookAuth');
Route::get('/login/facebook/callback', 'Auth\SocialController@getFacebookAuthCallback');

//google
Route::get('/login/google', 'Auth\SocialController@getGoogleAuth');
Route::get('/login/google/callback', 'Auth\SocialController@getGoogleAuthCallback');

//basic mail
Route::get('/mail', 'MailController@basic_email');

