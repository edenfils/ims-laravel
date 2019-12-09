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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', 'PageController@index');


/***** ADMIN ROUTES *****/
Route::get('/admin/products', 'Admin\ProductController@index')->middleware('auth');
Route::post('/admin/products', 'Admin\ProductController@store')->name('product.store');
Route::get('/admin/products/create', 'Admin\ProductController@create')->middleware('auth');
Route::get('/admin/products/{id}', 'Admin\ProductController@show')->name('product.show')->middleware('auth');
Route::get('/admin/products/{id}/edit', 'Admin\ProductController@edit')->middleware('auth');
Route::put('/admin/products/{id}', 'Admin\ProductController@update')->name('product.update');
Route::get('/admin/products/{id}/delete', 'Admin\ProductController@destroy')->name('product.delete')->middleware('auth');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
