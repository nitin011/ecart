<?php

use Illuminate\Support\Facades\Route;

/**
 * Auth Routes
 */
// Authentication Routes...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('customer.login');
Route::post('login', 'Auth\LoginController@login')->name('customer.login.verify');

/**
 * Password Reset Routes...
 */
Route::get('forget-password', 'Auth\ForgotPasswordController@getEmail')->name('customer.password.email');
Route::post('forget-password', 'Auth\ForgotPasswordController@postEmail')->name('customer.forgot-password.post-email');
Route::post('verify/resend-email', 'Auth\ForgotPasswordController@postEmail')->name('customer.forgot-password.resend-email');

Route::get('reset-password/{token}', 'Auth\ResetPasswordController@getPassword')->name('customer.reset-password');
Route::post('reset-password', 'Auth\ResetPasswordController@updatePassword')->name('customer.password.update');

/**
 * Registration Routes...
 */
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('customer.register');
Route::post('register', 'Auth\RegisterController@register');

Route::get('register-confirm-email/{token}', 'Auth\RegisterController@validateCustomerEmail')->name('customer.registration.confirm-email');

Route::get('unsubscribe-email/{email_id}', 'Customer/CustomerController@unsubscribeEmail')->name('customer.unsubscribe-email');

 Route::get('/', 'HomeController@index')->name('customer.index');
/*Route::get('/', function () {
    return view('web.pages.index');
})->name('customer.index');*/

/**
 * Products Routes
 */
Route::get('products', 'ProductController@index')->name('customer.products.index');
Route::get('products/by-category/{id}', 'ProductController@byCategory')->name('customer.products.by-category');
Route::get('products/by-search', 'ProductController@bySearch')->name('customer.products.by-search');
Route::get('product/{id}', 'ProductController@show')->name('customer.product.show');
Route::get('products/{slug}', 'ProductController@bySlug')->name('customer.products.by-slug');

/**
 * Cart Routes
 */
Route::get('cart', 'CartController@index')->name('customer.cart.index');
Route::get('cart/add', 'CartController@insert')->name('customer.cart.add');
Route::post('cart/update', 'CartController@update')->name('customer.cart.update');
Route::get('cart/delete/{id}', 'CartController@delete')->name('customer.cart.delete');
Route::get('cart/delete', 'CartController@deleteItemAjax')->name('customer.cart.ajax-delete');

Route::post('/cart/apply-coupon', 'CartController@applyCoupon')->name('customer.apply-coupon');
Route::get('/cart/delete-coupon', 'CartController@deleteCoupon')->name('customer.delete-coupon');

Route::group(['middleware' => 'auth'], function () {
    Route::post('logout', 'Auth\LoginController@logout')->name('customer.logout');

    /**
     * Checkout Routes
     */
    Route::get('checkout', 'OrderController@checkout')->name('customer.checkout.proceed');
    Route::post('checkout', 'OrderController@confirmCheckout')->name('customer.checkout.confirm');
    // Route::get('checkout/confirm', 'OrderController@confirmCheckout')->name('customer.checkout.confirm');
    Route::post('checkout/transaction-store', 'TransactionController@transactionStore')->name('customer.order.transaction.store');

    /**
     *Get Orders List
     */
    Route::get('orders', 'OrderController@index')->name('customer.order.index');

    /**
     * Customer Profile Related Routes
     */
    Route::get('profile', 'CustomerController@show')->name('customer.profile.show');
    Route::get('profile/update/{id}', 'CustomerController@edit')->name('customer.profile.edit');
    Route::post('profile/update', 'CustomerController@update')->name('customer.profile.update');
    Route::post('profile/update/otp-verify', 'CustomerController@profileUpdateOtpVerify')->name('customer.profile.update.otp-verify');

    /**
     * Manage Addresses
     */
    Route::resource('address', 'AddressController', ['as' => 'customer']);
    Route::get('address/default-status/{id}', 'AddressController@updateDefault')->name('customer.address.default');
    Route::post('address/store', 'AddressController@store')->name('customer.store.address');

    /**
     * Order Related Routes
     */
    Route::get('orders', 'OrderController@index')->name('customer.order.index');
});

Route::get('page/{slug}', 'HomeController@page')->name('page.view');
