<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class DataSaveController extends Controller
{
//    public function data_save(Request $request){
//
//        $request->session()->put('namekey','faruk');
//
//    }
    public function data_save(Request $request){

        Cookie::queue('namekey','faruk',4000);
    }
}
