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
// ユーザー側
    Route::namespace('User')->prefix('user')->name('user.')->group(function () {
        // ログイン認証関連
        Auth::routes([
            'register' => true,
            'reset'    => false,
            'verify'   => false
        ]);
        // ログイン認証後
        Route::middleware('auth:user')->group(function () {
            // TOPページ
            Route::resource('home', 'HomeController', ['only' => 'index']);
            Route::get('/shop', 'ShopController@index');
            Route::get('/stock/{stock}', 'ShopController@show');
            Route::get('/mycart', 'ShopController@myCart');
            Route::post('/mycart', 'ShopController@addMycart');
            Route::post('/cartdelete', 'ShopController@deleteCart');
            Route::post('/checkout', 'ShopController@checkout');
            Route::post('/complete','ShopController@complete');
            Route::post('/sendData', 'ShopController@sendData');
        });
    });

// 管理側
Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function(){
    // ログイン認証関連
    Auth::routes([
        'register' => true,
        'reset' => false,
        'verify' => false
    ]);
    // ログイン認証後
    Route::middleware('auth:admin')->group(function(){
        // TOPページ
        Route::resource('home','HomeController',['only' => 'index']);
        Route::get('create','AdminController@create')->name('admin.create');
        Route::post('store','AdminController@store')->name('admin.store');
    });
});