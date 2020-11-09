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
            Route::get('stock/mycart', 'ShopController@myCart');
            Route::post('/mycart', 'ShopController@addMycart');
            Route::post('stock/mycart', 'ShopController@addMycart');
            Route::post('/cartdelete', 'ShopController@deleteCart');
            Route::post('stock/cartdelete', 'ShopController@deleteCart');
            Route::post('/checkout', 'ShopController@checkout');
            Route::post('stock/checkout', 'ShopController@checkout');
            Route::post('/sendData', 'ShopController@sendData');
            Route::post('stock/sendData', 'ShopController@sendData');
            Route::post('/complete','ShopController@complete');
            Route::post('stock/complete','ShopController@complete');
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
        Route::get('index','AdminController@index')->name('index');
        Route::get('list','AdminController@list')->name('list');
        Route::get('edit/list','AdminController@list')->name('list');
        Route::get('create','AdminController@create')->name('create');
        Route::post('store','AdminController@store')->name('store');
        Route::get('{stock}','AdminController@show')->name('show');
        Route::get('edit/{id}','AdminController@edit')->name('edit');
        Route::post('update/{id}','AdminController@update')->name('update');
        Route::post('destroy/{id}','AdminController@destroy')->name('destroy');
        
    });
});