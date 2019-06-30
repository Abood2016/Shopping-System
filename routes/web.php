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

Route::group(['prefix' => 'admin'], function(){

Route::group(['middleware' => ['auth:admin']], function () {

    //dashboard routs
Route::get('/', 'DashboardController@index')->name('index');

//admin profile routes
Route::get('profile', 'ProfileController@profile')->name('profile.index');
Route::get('profile/edit/{id}', 'ProfileController@edit')->name('profile.edit');
Route::put('profile/update/{id}', 'ProfileController@update')->name('admin.update');

//products routes
Route::group(['prefix' => 'products'] , function(){
Route::get('/create',['uses' => 'ProductController@create','as' => 'product.create']);
Route::post('/store','ProductController@store')->name('product.store');
Route::get('/','ProductController@index')->name('product.index');
Route::post('/delete/{id}','ProductController@destroy')->name('product.destroy');
Route::get('/edit/{id}','ProductController@edit')->name('product.edit');
Route::put('/update/{id}','ProductController@update')->name('product.update');
//Route::get('/show/{id}','ProductController@show')->name('product.show');
//Route::get('/show/{id}','ProductController@show')->name('product.show');
});

//Order routes
Route::group(['prefix' => 'orders'] , function(){
Route::get('/confirm/{id}','OrderController@confirm')->name('order.confirm');    
Route::get('/pending/{id}','OrderController@pending')->name('order.pending');    
Route::get('/show/{id}','OrderController@show')->name('order.show');    
Route::get('/','OrderController@index')->name('order.index');
});

//User routes
Route::group(['prefix' => 'users'],function(){
Route::get('/','UserController@index')->name('user.index');
Route::get('/active/{id}','UserController@active')->name('user.active');
Route::get('/block/{id}','UserController@block')->name('user.block');
Route::get('/show/{id}','UserController@show')->name('user.show');
});

      // Logout
    Route::get('/logout','AdminUserController@logout')->name('logout');
      
});

//login routes
Route::get('login','AdminUserController@index');
Route::post('login','AdminUserController@store')->name('admin.store');

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//Front controller
Route::get('/','Front\homeController@index');

//user Registration
Route::get('/user/register','Front\RegisterController@index')->name('userRegiater');
Route::post('/user/register','Front\RegisterController@store')->name('user.register');

//user login
Route::get('user/login','Front\UserLoginController@index')->name('userLogin');
Route::post('user/login','Front\UserLoginController@store')->name('user.login');

Route::get('user/logout','Front\UserLoginController@logout')->name('user.logout');

//edit user
Route::get('user/edit/{id}','Front\RegisterController@edit')->name('user.edit');
Route::post('user/update/{id}','Front\RegisterController@update')->name('user.update');

Route::get('user/profile','Front\UserProfileController@index')->name('user.profile');

Route::get('user/order/{id}','Front\UserProfileController@show')->name('user.Profileshow');
