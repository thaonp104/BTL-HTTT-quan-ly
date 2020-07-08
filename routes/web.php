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
    Route::get('myAccount', 'Customer\UserController@myAccount')->name('customer.myAccount')->middleware(['auth']);
    Route::get('inforAccount', 'Customer\UserController@inforAccount')->name('customer.inforAccount')->middleware(['auth']);
    Route::get('editAccount', 'Customer\UserController@editAccount')->name('customer.editAccount')->middleware(['auth']);
    Route::post('updateAccount', 'Customer\UserController@updateAccount')->name('customer.updateAccount')->middleware(['auth']);
    Route::get('editPassword/{alert}', 'Customer\UserController@editPassword')->name('customer.editPassword')->middleware(['auth']);
    Route::post('updatePassword', 'Customer\UserController@updatePassword')->name('customer.updatePassword')->middleware(['auth']);

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
    Route::get('products/category/{category}/{group}', 'Customer\ProductController@showCategoryProducts')
        ->name('customer.productsCategory');
    Route::get('product/detail/{id}','Customer\ProductController@showDetail')->name('customer.detailProduct');

    //Orders
    Route::get('myOrders','Customer\OrderController@myOrders')->name('customer.myOrders')->middleware(['auth']);
    Route::prefix('order')->middleware(['auth'])->group(function () {
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

    //payment
    Route::get('cancelpayment', 'Customer\PaymentController@cancel');
    Route::get('vnpay', 'Customer\PaymentController@index');
    Route::post('vnpay', 'Customer\PaymentController@vnpay');
    Route::post('vnpayqr/success', 'Customer\PaymentController@store');
    Route::post('atm/accuracy', 'Customer\PaymentController@accuracy');
    Route::post('atm/success', 'Customer\PaymentController@store');
});


//Employee
Route::get('/employee/changepw', 'Employee\AccountController@editPW')->middleware(['auth','checkemployee', 'checkwork']);

Route::post('/employee/updatePW', 'Employee\AccountController@updatePW')->middleware(['auth','checkemployee', 'checkwork']);

//Route::get('/logout', 'Auth\Logincontroller@logout');
Route::get('/employee/home', 'Homecontroller@index')->middleware(['checkwork']);

Route::prefix('seller')->middleware('checkseller', 'checkwork')->group(function (){
    Route::get('/manageproduct', 'Employee\Seller\ProductController@index')->name('seller.ManageProduct');

    Route::get('/managebill', 'Employee\Seller\BillController@index')->name('seller.ManageBill');

    Route::get('/manageproduct/detail/{id}', 'Employee\Seller\ProductController@show')->name('seller.DetailProduct');

    Route::get('/managebill/detail/{id}', 'Employee\Seller\BillController@show')->name('seller.DetailBill');

    Route::get('/managebill/addbill', 'Employee\Seller\BillController@create')->name('seller.AddBill');

    Route::get('/managebill/updatebill/{id}', 'Employee\Seller\BillController@edit')->name('seller.AddBill');

    Route::post('/managebill/updatebill', 'Employee\Seller\BillController@update');

    Route::post('/managebill/store', 'Employee\Seller\BillController@store');
});

Route::prefix('storemanager')->middleware('checkstoremanager', 'checkwork')->group(function (){

    Route::get('/manageproduct', 'Employee\StoreManager\ProductController@index')->name('storemanager.ManageProduct');

    Route::get('/managebill', 'Employee\StoreManager\BillController@index')->name('storemanager.ManageBill');

    Route::get('/manageproduct/detail/{id}', 'Employee\StoreManager\ProductController@show')->name('storemanager.DetailProduct');

    Route::get('/managebill/detail/{id}', 'Employee\StoreManager\BillController@show')->name('storemanager.DetailBill');

    Route::get('/managereportstore', 'Employee\StoreManager\ReportController@index')->name('storemanager.ManageReportStore');
});

Route::prefix('seniormanager')->middleware('checkseniormanager', 'checkwork')->group(function (){
    Route::get('/manageproduct', 'Employee\SeniorManager\ProductController@index')->name('seniormanager.ManageProduct');

    Route::get('/manageproduct/detail/{id}', 'Employee\SeniorManager\ProductController@show')->name('seniormanager.DetailProduct');

    Route::get('/manageproduct/update/{id}', 'Employee\SeniorManager\ProductController@edit')->name('seniormanager.updateProduct');

    Route::post('/manageproduct/update', 'Employee\SeniorManager\ProductController@update');

    Route::get('/manageproduct/addproduct', 'Employee\SeniorManager\ProductController@create')->name('seniormanager.AddProduct');

    Route::post('/managerproduct/storeproduct', 'Employee\SeniorManager\ProductController@store');

    Route::get('/managestore', 'Employee\SeniorManager\StoreController@index')->name('seniormanager.ManageStore');

    Route::get('/managestore/detail/{id}', 'Employee\SeniorManager\StoreController@show')->name('seniormanager.DetailStore');

    Route::get('/managestore/update/{id}', 'Employee\SeniorManager\StoreController@edit')->name('seniormanager.updateStore');

    Route::post('/managestore/update', 'Employee\SeniorManager\StoreController@update');

    Route::get('/managestore/addstore', 'Employee\SeniorManager\StoreController@create')->name('seniormanager.AddStore');

    Route::post('/managestore/addstore', 'Employee\SeniorManager\StoreController@store');

    Route::get('/managereport', 'Employee\SeniorManager\ReportController@index');

    Route::get('/managestock', 'Employee\SeniorManager\StockController@showin');

    Route::get('/managestockout', 'Employee\SeniorManager\StockController@showout');

    Route::post('/managestockout', 'Employee\SeniorManager\StockController@out');

    Route::post('/managestockin', 'Employee\SeniorManager\StockController@in');
});

Route::prefix('admin')->middleware('checkadmin', 'checkwork')->group(function (){
    Route::get('/managecustomer', 'Employee\Admin\CustomerController@index');

    Route::get('/managecustomer/detail/{id}', 'Employee\Admin\CustomerController@show');

    Route::get('/managecustomer/edit/{id}', 'Employee\Admin\CustomerController@edit');

    Route::post('/managecustomer/update', 'Employee\Admin\CustomerController@update');

    Route::get('/manageemployee', 'Employee\Admin\EmployeeController@index');

    Route::get('/manageemployee/detail/{id}', 'Employee\Admin\EmployeeController@show');

    Route::get('/manageemployee/edit/{id}', 'Employee\Admin\EmployeeController@edit');

    Route::post('/manageemployee/update', 'Employee\Admin\EmployeeController@update');

    Route::get('/manageemployee/create', 'Employee\Admin\EmployeeController@create');

    Route::post('/manageemployee/store', 'Employee\Admin\EmployeeController@store');
});

Route::prefix('telesale')->middleware('checktelesale')->group(function (){
    Route::get('/managebill', 'Employee\Telesale\BillController@index')->name('processer.ManageBill');

    Route::get('/managebill/detail/{id}', 'Employee\Telesale\BillController@show')->name('telesale.DetailBill');

    Route::get('/managebill/update/{id}', 'Employee\Telesale\BillController@edit')->name('telesale.updateBill');

    Route::post('/managebill/update', 'Employee\Telesale\BillController@update');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


