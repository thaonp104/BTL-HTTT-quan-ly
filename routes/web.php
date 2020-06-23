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

Route::get('/', 'HomeController@index');

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


//Employee
Route::get('/employee/changepw', 'Employee\AccountController@editPW')->middleware(['auth','checkemployee']);

Route::post('/employee/updatePW', 'Employee\AccountController@updatePW')->middleware(['auth','checkemployee']);

Route::get('/logout', 'Auth\Logincontroller@logout');
Route::get('/employee/home', 'Homecontroller@index');

Route::prefix('seller')->middleware('checkseller')->group(function (){
    Route::get('/manageproduct', 'Employee\Seller\ProductController@index')->name('seller.ManageProduct');

    Route::get('/managebill', function () {
        return view('employee.seller.ManageBill');
    })->name('seller.ManageBill');

    Route::get('/manageproduct/detail/{id}', 'Employee\Seller\ProductController@show')->name('seller.DetailProduct');

    Route::get('/managebill/detail/{id}', function () {
        return view('employee.seller.DetailBill');
    })->name('seller.DetailBill');

    Route::get('/managebill/addbill', function () {
        return view('employee.seller.AddBill');
    })->name('seller.AddBill');

    Route::get('/managebill/updatebill/{id}', function () {
        return view('employee.seller.updateBill');
    })->name('seller.AddBill');
});

Route::prefix('storemanager')->middleware('checkstoremanager')->group(function (){

    Route::get('/manageproduct', 'Employee\StoreManager\ProductController@index')->name('storemanager.ManageProduct');

    Route::get('/managebill', 'Employee\StoreManager\BillController@index')->name('storemanager.ManageBill');

    Route::get('/manageproduct/detail/{id}', 'Employee\StoreManager\ProductController@show')->name('storemanager.DetailProduct');

    Route::get('/managebill/detail/{id}', 'Employee\StoreManager\BillController@show')->name('storemanager.DetailBill');

    Route::get('/manageseller', function () {
        return view('employee.storemanager.ManageSeller');
    })->name('storemanager.ManageSeller');

    Route::get('/manageseller/addseller', function () {
        return view('employee.storemanager.addSeller');
    })->name('storemanager.addSeller');

    Route::get('/manageseller/detail/{id}', function () {
        return view('employee.storemanager.DetailSeller');
    })->name('storemanager.DetailSeller');

    Route::get('/manageseller/update/{id}', function () {
        return view('employee.storemanager.updateSeller');
    })->name('storemanager.updateSeller');

    Route::get('/managereportstore', 'Employee\StoreManager\ReportController@index')->name('storemanager.ManageReportStore');
});

Route::prefix('seniormanager')->middleware('checkseniormanager')->group(function (){
    Route::get('/manageproduct', 'Employee\SeniorManager\ProductController@index')->name('seniormanager.ManageProduct');

    Route::get('/manageproduct/detail/{id}', 'Employee\SeniorManager\ProductController@show')->name('seniormanager.DetailProduct');

    Route::get('/manageproduct/update/{id}', 'Employee\SeniorManager\ProductController@edit')->name('seniormanager.updateProduct');

    Route::post('/manageproduct/update', 'Employee\SeniorManager\ProductController@update');

    Route::get('/manageproduct/addproduct', 'Employee\SeniorManager\ProductController@create')->name('seniormanager.AddProduct');

    Route::post('/managerproduct/storeproduct', 'Employee\SeniorManager\ProductController@store');

    Route::get('/managestore', function () {
        return view('employee.seniormanager.ManageStore');
    })->name('seniormanager.ManageStore');

    Route::get('/managestore/detail/{id}', function () {
        return view('employee.seniormanager.DetailStore');
    })->name('seniormanager.DetailStore');

    Route::get('/managestore/update/{id}', function () {
        return view('employee.seniormanager.updateStore');
    })->name('seniormanager.updateStore');

    Route::get('/managestore/addstore', function () {
        return view('employee.seniormanager.AddStore');
    })->name('seniormanager.AddStore');

    Route::get('/managereport', function () {
        return view('employee.seniormanager.ManageReport');
    })->name('seniormanager.ManageReport');
});

Route::prefix('admin')->middleware('checkadmin')->group(function (){
    Route::get('/manageaccount', function () {
        return view('employee.admin.ManageAccount');
    })->name('admin.ManageAccount');

    Route::get('/manageaccount/detail/{id}', function () {
        return view('employee.admin.DetailAccount');
    })->name('admin.DetailAccount');

    Route::get('/manageaccount/create', function () {
        return view('employee.admin.addAccount');
    })->name('admin.createAccount');

    Route::get('/manageaccount/edit/{id}', function () {
        return view('employee.admin.editAccount');
    })->name('admin.editAccount');
});

Route::prefix('telesale')->middleware('checktelesale')->group(function (){
    Route::get('/managebill', 'Employee\Telesale\BillController@index')->name('processer.ManageBill');

    Route::get('/managebill/detail/{id}', 'Employee\Telesale\BillController@show')->name('telesale.DetailBill');

    Route::get('/managebill/update/{id}', function () {
        return view('employee.telesale.updateBill');
    })->name('telesale.updateBill');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


