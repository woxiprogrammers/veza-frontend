<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('index');
});
Route::get('/events',function(){
   return view('events');
});
Route::get('/aboutUs',function(){
    return view('aboutUs');
});
Route::get('/subPage',function(){
    return view('subPage')->with(compact('id'));
});
Route::get('/contactUs',function(){
    return view('contactUs');
});
Route::get('/gallery',function(){
    return view('gallery');
});

Route::group(['prefix' => '/temp1'], function () {
    Route::get('/pages/sub-pages-view/{page_id}',array('uses' => 'PageRouteController@pageRoute'));
});