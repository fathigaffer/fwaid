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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/test1', function () {
    return "welcomeeeee";
});


Route::get('/test2/{idf}', function ($idf) {
    return $idf;
});


 Route::get('/test3/{idf?}', function () {
    return "welocom    msm";
})->name('fathi');

 Route::resource('news','News');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
