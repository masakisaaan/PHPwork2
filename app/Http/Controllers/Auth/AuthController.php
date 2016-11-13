<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;

use Socialite;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class AuthController extends Controller
{
    /**
     * ユーザーをTwitterの認証ページにリダイレクトする
     *
     * @return Response
     */
    public function redirectToProvider()
    {
        return Socialite::driver('twitter')->redirect();
    }

    /**
     * Twitterからユーザー情報を取得する
     *
     * @return Response
     */
    public function handleProviderCallback()
    {
        $user = Socialite::driver('twitter')->user();

        $response =
            "id: ".$user->id
            ."<br/>name: ".$user->name
            ."<br/>Email: ".$user->email

            . "<br/><br/>";

        // OAuth Two Providers
      //  $response .= print_r($user, true);

        return $response;
    }
}