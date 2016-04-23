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
Route::get('logout','HomeController@logout');

Route::get('/', 'HomeController@getlogin');
Route::post('/', 'HomeController@postlogin');

Route::get('dashboard','HomeController@index');
Route::get('add','HomeController@getadd');

Route::post('add','HomeController@postadd');
Route::get('rud','HomeController@getrud');

Route::get('delete/{id}','HomeController@deleterecord');
Route::get('details/{id}','HomeController@viewrecord');

Route::get('update/{id}','HomeController@updaterecordg');
Route::post('update/{id}','HomeController@updaterecordp');
