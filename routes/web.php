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

Route::get('about', function () {
    return view('start.includes.about');
});

Route::get('testes', function () {
    return view('testes');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('event/index', 'Api\EventController@index');

Route::get('event/show/{event}', 'Api\EventController@show')->name('event/show');

Route::get('event/edit/{event}', 'Api\EventController@edit')->name('eventedit');

Route::post('event/store','Api\EventController@store')->name('event.store');

Route::post('event/update/{event}', 'Api\EventController@update')->name('eventupdate');

Route::post('event/search', 'Api\EventController@search')->name('search');

Route::post('event/destroy', 'Api\EventController@destroy')->name('eventdestroy');

