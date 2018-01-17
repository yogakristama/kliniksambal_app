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

//home
Route::get('/', "HomeController@index");

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/cart/content', 'CartController@getContent');

Route::post('/cart/add-content', 'CartController@addContent');