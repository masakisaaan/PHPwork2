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
  return view("home",["alcohol" => $alcohol]);
});

Route::get('/cart',function(){
    return view("cart");
});

Route::get('/detail', function(Request $request){
    $id = $request->get("id");
    $alcohol = DB::table('alcohol')->where('id', $id)->first();
    return view('detail', [
        "alcohol" => $alcohol
    ]);
});

// カートを空にする
Route::get('/delete/all', function(){
    session()->flush(); //sessionの全データを削除
    return redirect("/cart"); //カートのページへリダイレクト
});

// カートに入れる
Route::post('/cart', function(Request $request){
    $id = $request->get("id"); //idを取得
    $alcohol = DB::table('alcohol')->where('id', $id)->first(); //idが一致するものをvegetableテーブルから検索、取得
    $alcohols = session()->get("alcohol",[]); //セッションデータを取得、nullの場合は空の配列
    $alcohols[] = $alcohol; // 取得したデータにオブジェクトを保存
    session()->put("alcohols", $alcohols); //取得したデータをsessionに保存。 $_SESSION["items"] に保存するのと同じ
    return redirect("/cart"); //カートのページへリダイレクト
});
// カートの中を一覧表示
Route::get('/cart', function(){
    $alcohols = session()->get("alcohols",[]); //セッションデータを取得、nullの場合は空の配列
    return view("/cart", [ //データを渡してビューを表示
        "alcohols" => $alcohols
    ]);

});

/*
// 商品を削除
Route::get('/delete', function(Request $request){
    $index = $request->get("index"); //削除した商品のindexを取得
    session()->forget("alcohol.$index"); //sessionから選んだ商品を削除。例えば$items[0]の削除は items.0 と指定できる。
    return redirect("/cart");
});
*/