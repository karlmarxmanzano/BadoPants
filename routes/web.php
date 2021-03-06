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

Route::resource('items', 'ItemController');

Route::resource('categories', 'CategoryController');

Route::resource('orders', 'OrderController');
Route::resource('items.orders', 'ItemOrderController');

// Route::resource('carts', 'CartController');

Route::resource('stores', 'StoreController');