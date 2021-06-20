<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class DataGetController extends Controller
{
//    public function data_get(Request $request){
//        return $request->session()->get('namekey');
//    }
    public function data_get(Request $request){
        return Cookie::get('namekey');
    }
}
