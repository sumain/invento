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

//Route::get('/new-login',function(){
//    return view('newLogin');
//});
//
//Route::get('/new-register',function(){
//    return view('newRegister');
//});
//
//Route::get('/reset-Password',function(){
//    return view('newForget');
//});

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('generated-link', 'ShortLinkController@index')->name('generated-link');
Route::get('new-link', 'ShortLinkController@create')->name('new-link');
Route::post('generated-link', 'ShortLinkController@store')->name('saveTheLink');

Route::get('task1', 'TaskController@index');
