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
Route::pattern('product', '[0-9]+');
Route::pattern('id', '[0-9]+');

Auth::routes();

Route::get('/', 'ProductController@index')->name('index');
Route::get('/product', 'ProductController@index')->name('product.index');
Route::get('/product/{product}', 'ProductController@show')->name('product.show');
Route::post('/cart', 'CartController@store')->name('cart.store');
Route::get('/cart', 'CartController@index')->name('cart.index');
Route::delete('/cart/{id}', 'CartController@destroy')->name('cart.destroy');
Route::get('/home', 'ProductController@index')->name('home');
Route::post('/order/store', 'OrderController@store')->name('order.store');
