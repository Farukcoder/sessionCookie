<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/save','DataSaveController@data_save');
Route::get('/get','DataGetController@data_get');
Route::get('/clear','DataClearController@data_clear');

Route::get('/', function () {
    return view('welcome');
});
