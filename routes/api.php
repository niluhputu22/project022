<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('password', function(){
return bcrypt('putu');
});

//Product
Route::get('barang','API\ProductController@index'); //lihat data semua
Route::get('barang/{id}','API\ProductController@show'); //lihat data pake id
Route::post('barang','API\ProductController@store'); //tambah data
Route::delete('barang/{id}', 'API\ProductController@destroy'); //hapus data

//Category
Route::get('jenis','API\CategoryController@index');//->middleware('auth:api');
Route::get('jenis/{id}','API\CategoryController@show'); 
Route::post('jenis','API\CategoryController@store'); 
Route::delete('jenis/{id}', 'API\CategoryController@destroy'); 

Route::group(['middleware' => 'api', 'prefix' => 'auth'], function ($router) {
    Route::post('login', 'AuthController@login');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('me', 'AuthController@me');
    Route::post('wajib', 'AuthController@wajib');
});