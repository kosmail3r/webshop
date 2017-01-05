<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/index/', 'MainController@indexAction');
Route::get('/category/{id}', 'MainController@categoryAction');
Route::get('/goods/{id}', 'MainController@goodAction');

