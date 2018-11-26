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

Route::group(['prefix' => '/temp1'], function () {
    Route::get('/pages/sub-pages-view/{page_id}',array('uses' => 'PageRouteController@pageRoute'));
    Route::get('/pages/gallery-details',array('uses' => 'PageRouteController@galleryRoute'));
    Route::get('/pages/events-details',array('uses' => 'PageRouteController@eventRoute'));
    Route::get('/pages/about-us-details',array('uses' => 'PageRouteController@aboutUsRoute'));
    Route::get('/pages/contact-us-view',array('uses' => 'PageRouteController@contactUsRoute'));
});