<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ecController extends Controller
{
    public function index(){
        return view ('index');
    }
}
