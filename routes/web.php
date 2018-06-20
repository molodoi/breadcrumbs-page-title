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

Route::get('/',  'MainController@home')->name('home');

Route::get('/continent/{name}',  'MainController@continent')->name('continent');

Route::get('/country/{name}',  'MainController@country')->name('country');

Route::get('/city/{name}',  'MainController@city')->name('city');
