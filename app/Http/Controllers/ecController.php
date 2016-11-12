<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

use App\Http\Requests;

class ecController extends Controller
{
    public function index(){
        $alcohol = \DB::table('alcohol')->get();
        return view('index',compact('alcohol'));
    }

    public function detail(Request $request){
        $id = $request->get("id");
        $alcohol = DB::table('alcohol')->where('id', $id)->first();
        return view('detail/index',compact('alcohol'));
    }

     public function cart(){
     $alcohols = session()->get("alcohols",[]);
     return view('cart/index',compact('alcohols'));
    }

    public function insertCart(Request $request){
        $id = $request->get("id");
        $alcohol = \DB::table('alcohol')->where('id', $id)->first();
        $alcohols = session()->get("alcohols",[]);
        $alcohols[] = $alcohol;
        session()->put("alcohols", $alcohols);
        return redirect()->route('cart');
    }

     public function clearCart() {
        session()->flush();
        return redirect()->route('cart');
    }
}