<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class DataClearController extends Controller
{
//    public function data_clear(Request $request){
//        return $request->session()->forget('namekey');
//    }
    public function data_clear(Request $request){

        Cookie::queue(cookie::forget('namekey'));
    }
}
