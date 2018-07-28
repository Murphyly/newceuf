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

Route::get('event/create', function () {
    return view('event.new');
})->name('eventcreate');

Route::get('/', function () {
    return view('start.start');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('event/index', 'Api\EventController@index');

Route::get('event/show/{event}', 'Api\EventController@show')->name('event/show');

Route::post('event/search', 'Api\EventController@search')->name('search');

Route::post('event/destroy', 'Api\EventController@destroy')->name('eventdestroy');