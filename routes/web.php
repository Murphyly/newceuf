<?php

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

Route::get('event/create', function () {
    return view('event.new');
});

/*Route::resource('event/index', function () {
    return view('event.index');
});*/

Route::resource('event', 'Api\EventController')->only([
    'index', 'show'
]);


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('event/search/', 'Api\EventController@search')->name('search');