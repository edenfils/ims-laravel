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
Route::get('/admin/products', 'Admin\ProductController@index');
Route::post('/admin/products', 'Admin\ProductController@store');
Route::get('/admin/products/create', 'Admin\ProductController@create');
Route::get('/admin/products/{id}', 'Admin\ProductController@show');
Route::get('/admin/products/{id}/edit', 'Admin\ProductController@edit');
Route::put('/admin/products/{id}/edit', 'Admin\ProductController@update');
Route::delete('/admin/products/{id}/delete', 'Admin\ProductController@destroy');


