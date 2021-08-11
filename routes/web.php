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

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;


Route::get('/clear-cache', function () {
    Artisan::call('config:cache');
    return "Cache is cleared";
});
//Auth::routes(['verify' => true, 'register' => false, 'login' => false]);

/*Route::group(['prefix' => 'web', ['middleware' => ['XSS']], 'namespace' => 'Web'], function () {
    // for login
    Route::get('/', 'UserloginController@userlogin')->name('userLogin');
    Route::post('custloginCheck', 'UserloginController@logincheck')->name('custLoginCheck');

    Route::get('sign-up', 'RegisterController@register_user')->name('userregister');
    Route::post('registration', 'RegisterController@usersignup')->name('user_registration');
    Route::post('registration/otp_verify', 'RegisterController@web_verify_otp')->name('web_verify_otp');

    Route::group(['middleware' => 'bamaCust'], function () {
        Route::get('about', 'WebHomeController@aboutus')->name('webabout');
        Route::get('terms', 'WebHomeController@terms')->name('terms');
        Route::get('home/', 'WebHomeController@web')->name('webhome');
        Route::get('/', 'WebHomeController@web')->name('webhome');
        Route::get('products', 'AllProductController@products')->name('products');
        Route::get('products/{cat_id}', 'AllProductController@cate')->name('catee');
        Route::get('user/logout', 'UserloginController@logout')->name('userlogout');
    });
});


Route::group(['prefix' => 'api', 'namespace' => 'Api'], function () {
    Route::post('forgot_password1/{id}', 'forgotpasswordController@forgot_password1')->name('forgot_password1');
    Route::get('change_pass/{id}', 'forgotpasswordController@change_pass')->name('change_pass');
});


Route::group(['prefix' => 'store', ['middleware' => ['XSS']], 'namespace' => 'Store'], function () {
    // for login
    Route::get('/', 'LoginController@storeLogin')->name('storeLogin');
    Route::post('loginCheck', 'LoginController@storeLoginCheck')->name('storeLoginCheck');

    Route::group(['middleware' => 'bamaStore'], function () {
        Route::get('home', 'HomeController@storeHome')->name('storeHome');
        Route::get('product/add', 'ProductController@sel_product')->name('sel_product');
        Route::post('product/added', 'ProductController@added_product')->name('added_product');
        Route::get('product/delete/{id}', 'ProductController@delete_product')->name('delete_product');
        Route::post('product/stock/{id}', 'ProductController@stock_update')->name('stock_update');
        Route::get('logout', 'LoginController@logout')->name('storelogout');
        Route::get('orders/next_day', 'AssignorderController@orders')->name('storeOrders');
        Route::get('orders/today', 'AssignorderController@assignedorders')->name('storeassignedorders');
        Route::post('orders/confirm/{cart_id}', 'AssignorderController@confirm_order')->name('store_confirm_order');
        Route::get('orders/reject/{cart_id}', 'OrderController@reject_order')->name('store_reject_order');
        Route::get('orders/products/cancel/{store_order_id}', 'OrderController@cancel_products')->name('store_cancel_product');

        Route::get('products', 'ProductController@st_product')->name('st_product');
        Route::get('payout/request', 'PayoutController@payout_req')->name('payout_req');
        Route::post('payout/request/sent', 'PayoutController@req_sent')->name('payout_req_sent');

       
        Route::get('store/invoice/{cart_id}', 'InvoiceController@invoice')->name('invoice');

       
        Route::get('store/pdf/invoice/{cart_id}', 'InvoiceController@pdfinvoice')->name('pdfinvoice');
    });

});  */

Route::get('get-image', function () {
    $url = 'https://www.sainsburys.co.uk/wcsstore7.58.9/ExtendedSitesCatalogAssetStore/images/catalog/productImages/58/0000000181358/0000000181358_L.jpeg';
    $file = file_get_contents($url);
    $fileName = \Illuminate\Support\Str::uuid() . '.' . pathinfo(storage_path($url), PATHINFO_EXTENSION);
    Storage::put('public/test/' . $fileName, $file);
    dd($fileName);
});
