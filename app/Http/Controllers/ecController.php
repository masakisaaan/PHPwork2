<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Requests;
use APP\Item;

class ecController extends Controller
{
    public function index(){ //トップページ。商品情報をDBから取得する。
        $item = DB::table('item_master')->get();
        return view('index',compact('item'));
    }

    public function detail(Request $request){ //商品詳細ページ
        $id = $request->get("id");
        $item = DB::table('item_master')->where('id', $id)->first();
        return view('detail/index',compact('item'));
    }

// カート処理

     public function cart(Request $request){ //カートページ,合計金額表示
        $items = session()->get("items",[]);
        $total = 0;
        foreach($items as $item){
        $prices = $item->price;
        $total += $prices;
        }
        return view('cart/index',compact('items','total'));
    }

     public function insertCart(Request $request){ //カートを追加する
        $id = $request->get("id");
        $item = DB::table('item_master')->where('id', $id)->first();
        $items = session()->get("items",[]);
        $items[] = $item;
        session()->put("items", $items);
        return redirect()->route('cart');
    }

     public function deleteCart(Request $request){ //カートないの商品を削除する
        $index = $request->get("index");
        session()->forget("items.$index"); //sessionから選んだ商品を削除。例えば$items[0]の削除は items.0 と指定できる。
        return redirect()->route('cart');
    }

     public function clearCart() { //カートをクリア。
        session()->flush();
        return redirect()->route('cart');
    }

    public function order(Request $request){ //注文確認　
        $items = session()->get("items",[]);
        $total = 0;
        foreach($items as $item){
        $prices = $item->price;
        $postprice = 600;
        $total += $prices;
        $ntotal = $total+$postprice;
        }
        return view('order/index',compact('items','total','ntotal'));
    }

    public function orderComplete(){
        return view('order/complete');
    }

    public function paycredit(){
         　\Stripe\Stripe::setApiKey("sk_test_UekOSzhEuI6BCg28Lk49Jfwk");
         /* 以下「Creating Charges」からのコピペ */

    // Get the credit card details submitted by the form
    $token = $_POST['stripeToken'];

    // Create a charge: this will charge the user's card
    try {
      $charge = \Stripe\Charge::create(array(
        "amount" => 1000, // 課金額はココで調整
        "currency" => "jpy",
        "source" => $token,
        "description" => "Example charge"
        ));
    } catch(\Stripe\Error\Card $e) {
      // The card has been declined
    }

    // サンクスメール送る...

    return redirect('/order');
    }
}