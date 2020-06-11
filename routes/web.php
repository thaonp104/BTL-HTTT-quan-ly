<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'Customer\UserController@login');

//Customer
Route::prefix('customer')->group(function (){
    //index
    Route::get('/', function () {
        return view('customer.index');
    })->name('customer.index');

    //account
    Route::get('login/{alert}', 'Customer\UserController@login')->name('customer.login');
    Route::post('login', 'Customer\UserController@loginCustomer')->name('customer.loginCustomer');
    Route::get('register/{alert}', 'Customer\UserController@register')->name('customer.register');
    Route::get('logout', 'Customer\UserController@logout')->name('customer.logout');
    Route::post('register','Customer\UserController@create')->name('customer.createAccount');
    Route::get('myAccount', 'Customer\UserController@myAccount')->name('customer.myAccount');
    Route::get('inforAccount', 'Customer\UserController@inforAccount')->name('customer.inforAccount');
    Route::get('editAccount', 'Customer\UserController@editAccount')->name('customer.editAccount');
    Route::post('updateAccount', 'Customer\UserController@updateAccount')->name('customer.updateAccount');
    Route::get('editPassword/{alert}', 'Customer\UserController@editPassword')->name('customer.editPassword');
    Route::post('updatePassword', 'Customer\UserController@updatePassword')->name('customer.updatePassword');

    //cart
    Route::get('cart', 'Customer\CartController@showCart')->name('customer.cart');
    Route::get('addCart/{pk_product_id}', 'Customer\CartController@add')->name('customer.addCart');
    Route::post('updateCart', 'Customer\CartController@update')->name('customer.updateCart');
    Route::get('deleteCart', 'Customer\CartController@delete')->name('customer.deleteCart');

    //Store
    Route::get('aboutUs', 'Customer\StoreController@showAboutUs')->name('customer.aboutus');
    Route::get('products', 'Customer\StoreController@showProducts')->name('customer.products');
    Route::get('news', 'Customer\StoreController@showNews')->name('customer.news');
    Route::get('map', 'Customer\StoreController@showMap')->name('customer.map');
    Route::get('contact', 'Customer\StoreController@showContact')->name('customer.contact');

    //Product
    Route::get('favorite', 'Customer\ProductController@showFavoriteProducts')
        ->name('customer.favorite');
    Route::get('groupProducts/{id}', 'Customer\ProductController@showGroupProducts')
        ->name('customer.groupProducts');
    Route::get('search/{key}', 'Customer\ProductController@search')->name('customer.search');
    Route::get('products/category/{category}', 'Customer\ProductController@showCategoryProducts')
        ->name('customer.productsCategory');
    Route::get('product/detail/{id}','Customer\ProductController@showDetail')->name('customer.detailProduct');

    //Orders
    Route::get('myOrders','Customer\OrderController@myOrders')->name('customer.myOrders');
    Route::prefix('order')->group(function () {
        Route::get('create','Customer\OrderController@create')->name('customer.order.create');
        Route::post('store','Customer\OrderController@store')->name('customer.order.store');
        Route::get('show/{id}','Customer\OrderController@show')->name('customer.order.show');
        Route::get('destroy/{id}','Customer\OrderController@destroy')->name('customer.order.destroy');
    });

    //favorite
    Route::get('addFavorite/{id}', 'Customer\ProductController@addFavoriteProduct')
        ->name('customer.addFavorite');
    Route::get('deleteFavorite/{id}', 'Customer\ProductController@deleteFavoriteProduct')
        ->name('customer.deleteFavorite');
});


