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

Route::get('/admin', function () {
    return "hello fathi this admin";
});

Route::get('/admin', function () {
    return "hello fathi this admin";
});

/*Route::get('login', function () {
    return "login here";
})->name('login');*/
Route::group(["namespace"=>"Admin"],function(){


Route::get('main','Main@showpage') ;
});
/*Route::group(['middleware'=>'auth'],function (){

    Route::get('main','Admin\Main@showpage') ;
});*/
