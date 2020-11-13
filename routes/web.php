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
Route::get('/', function () { return view('top');});

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
            Route::get('/shop', 'ShopController@index')->name('index');
            Route::post('/shop', 'ShopController@search')->name('search');
            Route::get('/stock/{stock}', 'ShopController@show')->name('show');
            Route::get('/mycart', 'ShopController@myCart')->name('myCart');
            Route::get('stock/mycart', 'ShopController@myCart')->name('myCart');
            Route::post('/mycart', 'ShopController@addMycart')->name('addmMycart');
            Route::post('stock/mycart', 'ShopController@addMycart')->name('addmMycart');
            Route::post('/cartdelete', 'ShopController@deleteCart')->name('deleteCart');
            Route::post('stock/cartdelete', 'ShopController@deleteCart')->name('deleteCart');
            Route::post('/checkout', 'ShopController@checkout')->name('checkout');
            Route::post('stock/checkout', 'ShopController@checkout')->name('checkout');
            Route::post('/sendData', 'ShopController@sendData')->name('sendData');
            Route::post('stock/sendData', 'ShopController@sendData')->name('sendData');
            Route::post('/complete','ShopController@complete')->name('complete');
            Route::post('stock/complete','ShopController@complete')->name('complete');
            
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
        Route::get('customer_list','AdminController@customer_list')->name('customer_list');
        Route::get('edit/list','AdminController@list')->name('list');
        Route::get('create','AdminController@create')->name('create');
        Route::post('store','AdminController@store')->name('store');
        Route::get('{stock}','AdminController@show')->name('show');
        // Route::get('{customer}','AdminController@customer_show')->name('customer_show');
        Route::get('edit/{id}','AdminController@edit')->name('edit');
        Route::post('update/{id}','AdminController@update')->name('update');
        Route::post('destroy/{id}','AdminController@destroy')->name('destroy');
        
    });
});