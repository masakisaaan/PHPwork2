<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

// we will use Mail namespace
use Mail;

class MailController extends Controller
{
    // first, we create function for send Basics email
    public function basic_email(){
        $data=['name'=>'masaki'];
        Mail::send(['text'=>'mail'], $data, function($message){
            $message->to('masaki.ecsite@gmail.com','Masaki')->subject('laravelでメール送信するおおおおお');
           // $message->from('B5163@oic.jp','Nabila');
        });
        echo 'メール送信完了!';
    }
}