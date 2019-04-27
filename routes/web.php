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

//dashboard routs
Route::get('/', 'DashboardController@index');


//products routs
Route::group(['prefix' => 'products'] , function(){
Route::get('/create','ProductController@create');
Route::post('/store','ProductController@store')->name('product.store');
Route::get('/delete','ProductController@destroy');
Route::get('/edit','ProductController@edit');
});
