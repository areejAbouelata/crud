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


Route::get('category/create' , 'CategoryController@create');
Route::post('/category' , 'CategoryController@stor');
Route::get('/' , 'CategoryController@index');
Route::get('categories/{cat}' , 'CategoryController@display');
Route::get('category/{cat}/product', 'ProductController@add');
Route::post('create/{cat}/product' , 'ProductController@stor');