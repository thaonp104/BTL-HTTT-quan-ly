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

//Route::get('/', 'TestController@index');

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

    //News
    Route::get('news/detail/{id}','Customer\NewsController@detail')->name('customer.detailNews');
    Route::get('news/category/{id}','Customer\NewsController@category')->name('customer.categoryNews');

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

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::prefix('seller')->group(function (){
    Route::get('/manageproduct', function () {
        return view('seller.ManageProduct');
    })->name('seller.ManageProduct');

    Route::get('/managebill', function () {
        return view('seller.ManageBill');
    })->name('seller.ManageBill');
    
    Route::get('/manageproduct/detail/{id}', function () {
        return view('seller.DetailProduct');
    })->name('seller.DetailProduct');
    
    Route::get('/managebill/detail/{id}', function () {
        return view('seller.DetailBill');
    })->name('seller.DetailBill');

    Route::get('/managebill/addbill', function () {
        return view('seller.AddBill');
    })->name('seller.AddBill');
});

Route::prefix('storemanager')->group(function (){
    Route::get('/manageproduct', function () {
        return view('storemanager.ManageProduct');
    })->name('storemanager.ManageProduct');

    Route::get('/managebill', function () {
        return view('storemanager.ManageBill');
    })->name('storemanager.ManageBill');
    
    Route::get('/manageproduct/detail/{id}', function () {
        return view('storemanager.DetailProduct');
    })->name('storemanager.DetailProduct');
    
    Route::get('/managebill/detail/{id}', function () {
        return view('storemanager.DetailBill');
    })->name('storemanager.DetailBill');

    Route::get('/manageseller', function () {
        return view('storemanager.ManageSeller');
    })->name('storemanager.ManageSeller');

    Route::get('/manageseller/detail/{id}', function () {
        return view('storemanager.DetailSeller');
    })->name('storemanager.DetailSeller');

    Route::get('/managereportstore', function () {
        return view('storemanager.ManageReportStore');
    })->name('storemanager.ManageReportStore');
});

Route::prefix('seniormanager')->group(function (){
    Route::get('/manageproduct', function () {
        return view('seniormanager.ManageProduct');
    })->name('seniormanager.ManageProduct');

    Route::get('/manageproduct/detail/{id}', function () {
        return view('seniormanager.DetailProduct');
    })->name('seniormanager.DetailProduct');
    
    Route::get('/manageproduct/addproduct', function () {
        return view('seniormanager.AddProduct');
    })->name('seniormanager.AddProduct');

    Route::get('/managestore', function () {
        return view('seniormanager.ManageStore');
    })->name('seniormanager.ManageStore');

    Route::get('/managestore/detail/{id}', function () {
        return view('seniormanager.DetailStore');
    })->name('seniormanager.DetailStore');

    Route::get('/managestore/addstore', function () {
        return view('seniormanager.AddStore');
    })->name('seniormanager.AddStore');

    Route::get('/managereport', function () {
        return view('seniormanager.ManageReport');
    })->name('seniormanager.ManageReport');
});

Route::prefix('admin')->group(function (){
    Route::get('/manageaccount', function () {
        return view('admin.ManageAccount');
    })->name('admin.ManageAccount');

    Route::get('/manageaccount/detail/{id}', function () {
        return view('admin.DetailAccount');
    })->name('admin.DetailAccount');
    
    // Route::get('/manageproduct/addproduct', function () {
    //     return view('seniormanager.AddProduct');
    // })->name('seniormanager.AddProduct');

    // Route::get('/managestore', function () {
    //     return view('seniormanager.ManageStore');
    // })->name('seniormanager.ManageStore');

    // Route::get('/managestore/detail/{id}', function () {
    //     return view('seniormanager.DetailStore');
    // })->name('seniormanager.DetailStore');

    // Route::get('/managestore/addstore', function () {
    //     return view('seniormanager.AddStore');
    // })->name('seniormanager.AddStore');

    // Route::get('/managereport', function () {
    //     return view('seniormanager.ManageReport');
    // })->name('seniormanager.ManageReport');
});