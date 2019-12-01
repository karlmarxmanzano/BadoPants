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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('item', 'ItemController');

Route::resource('category', 'CategoryController');

Route::resource('order', 'OrderController')->except(['store']);
Route::post('order/{item}', 'OrderController@store')->name('order.store');

Route::resource('cart', 'CartController')->except(['store']);
Route::post('cart/{item}', 'CartController@store')->name('cart.store');