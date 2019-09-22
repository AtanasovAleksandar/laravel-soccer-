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

Route::get('/', 'PagesController@home');

// *****************

Route::get('/players', 'playersController@index');

Route::post('/players', 'playersController@store');

Route::get('players/create', 'playersController@create');


// ****************
Route::get('/about', 'aboutController@about');

Route::get('/contact', 'contactController@contact');

