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
Route::get('/', 'DashboardController@index')->name('index');


//products routs
Route::group(['prefix' => 'products'] , function(){
    Route::get('/create',['uses' => 'ProductController@create','as' => 'product.create']);
Route::post('/store','ProductController@store')->name('product.store');
Route::get('/','ProductController@index')->name('product.index');
Route::post('/delete/{id}','ProductController@destroy')->name('product.destroy');
Route::get('/edit/{id}','ProductController@edit')->name('product.edit');
Route::put('/update/{id}','ProductController@update')->name('product.update');
Route::get('/show/{id}','ProductController@show')->name('product.show');

});
