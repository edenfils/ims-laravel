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


/***** Products ROUTES *****/
Route::get('/admin/products', 'Admin\ProductController@index')->name('products')->middleware('auth');
Route::post('/admin/products', 'Admin\ProductController@store')->name('product.store');
Route::get('/admin/products/create', 'Admin\ProductController@create')->middleware('auth');
Route::get('/admin/products/{id}', 'Admin\ProductController@show')->name('product.show')->middleware('auth');
Route::get('/admin/products/{id}/edit', 'Admin\ProductController@edit')->middleware('auth');
Route::put('/admin/products/{id}', 'Admin\ProductController@update')->name('product.update');
Route::get('/admin/products/{id}/delete', 'Admin\ProductController@destroy')->name('product.delete')->middleware('auth');


/***** Products ROUTES *****/

Route::get('/admin/brands', 'Admin\BrandController@index')->name('brands')->middleware('auth');
Route::post('/admin/brands', 'Admin\BrandController@store')->name('brand.store');
Route::get('/admin/brands/create', 'Admin\BrandController@create')->middleware('auth');
Route::get('/admin/brands/{id}', 'Admin\BrandController@show')->name('brand.show')->middleware('auth');
Route::get('/admin/brands/{id}/edit', 'Admin\BrandController@edit')->name('brand.edit')->middleware('auth');
Route::put('/admin/brands/{id}', 'Admin\BrandController@update')->name('brand.update');
Route::get('/admin/brands/{id}/delete', 'Admin\BrandController@destroy')->name('brand.delete')->middleware('auth');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
