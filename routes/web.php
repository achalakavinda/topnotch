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

Route::get('/', 'PageController@index');
Route::get('/shop', 'PageController@product');
Route::get('/shop/{id}', 'PageController@products');
Route::get('/product-details','PageController@productDetails');
Route::get('/cart','PageController@cart');
Route::get('/checkout','PageController@checkout');

Route::get('/admin','System\AdminController@index');
Route::resource('/admin/category','System\CategoryController');
Route::resource('/admin/brand','System\BrandController');
Route::resource('/admin/tag','System\TagController');
Route::resource('/admin/product','System\ProductController');
Route::resource('/admin/order','System\OrderController');
Route::resource('/admin/pre-order','System\PreOrderController');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
