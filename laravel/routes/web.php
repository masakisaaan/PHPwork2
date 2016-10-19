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

Route::get('/',function(){
  $alcohol = DB::table('alcohol')->get();
  return view("home");
});

Route::get('/detail', function(Request $request){
    $id = $request->get("id");
    $alcohol = DB::table('alcohol')->where('id', $id)->first();
    return view('detail', [
        "alcohol" => $alcohol
    ]);
});
Auth::routes();

