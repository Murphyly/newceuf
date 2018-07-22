<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('users', 'Api\UserController@index');
Route::get('events', 'Api\EventController@index');
 
Route::get('event/{event}', 'Api\EventController@show');
 
Route::post('event','Api\EventController@store');
 
Route::put('event/{event}','Api\EventController@update');
 
Route::delete('event/{event}', 'Api\EventController@destroy');