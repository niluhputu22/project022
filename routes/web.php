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
//route untuk portofolio
Route::get('/', function () {
    return view('welcome');
});

//route untuk product
Route::get('product', 'ProductController@index')->name('product.index');
Route::get('product/add', 'ProductController@add')->name('product.add');
Route::post('product/save', 'ProductController@save')->name('product.save');

Route::get('/category', 'CategoryController@index')->name('category.index');
Route::get('/category/add', 'CategoryController@add')->name('category.add');
Route::post('/category/save', 'CategoryController@save')->name('category.save');

