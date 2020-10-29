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

Route::get('/', 'ShopController@index');
Route::get('/stock/{stock}', 'ShopController@show');
Route::get('/home', 'HomeController@index')->name('home');

Auth::routes([
    'register' => true,
    'reset' => false,
    'verify' => false
]);

// ユーザー側
Route::group(['middleware' => ['auth:user']], function () {

    Route::get('/mycart', 'ShopController@myCart');
    Route::post('/mycart', 'ShopController@addMycart');
    Route::post('/cartdelete', 'ShopController@deleteCart');
    Route::post('/checkout', 'ShopController@checkout');
    Route::get('/buy', 'BuyController@index');
    Route::post('/buy', 'BuyController@store');
});

// 管理側

Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function(){

    Auth::routes([
        'register' => true,
        'reset' => false,
        'verify' => false
    ]);

    Route::middleware('auth:admin')->group(function(){
        Route::resource('home','HomeController',['only' => 'index']);
    });
});
