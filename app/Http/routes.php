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

/*
Route::get('/', function () {
    Debugbar::error('Error!');
    Debugbar::warning('Watch out…');
    Debugbar::addMessage('Another message', 'mylabel');
    return view('welcome');
});

Route::get('test','Test\ServiceProviders\TestController@index');
*/

Route::get('/','StaticPagesController@home');
Route::get('/help', 'StaticPagesController@help');
Route::get('/about','StaticPagesController@about');