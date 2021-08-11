<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::group(['prefix' => '', ['middleware' => ['XSS']], 'namespace' => 'Api'], function () {
    //app logo and name
    Route::get('app_configurations', 'AppController@appConfigurations');

    /**
     * User Authorization Routes
     */
    Route::post('register', 'UserController@signUp');
    Route::post('verify_phone', 'UserController@verifyPhone');
    Route::post('forget_password', 'UserController@forgotPassword');
    Route::post('verify_otp', 'UserController@verifyOtp');
    Route::post('change_password', 'UserController@changePassword');
    Route::post('login', 'UserController@login');
    Route::post('checkotp', 'UserController@checkOTP');

    Route::group(['middleware' => ['auth_token']], function () {
        Route::post('myprofile', 'UserController@myprofile');

        /**
         * Address
         */
        Route::post('add_address', 'AddressController@address');
        Route::get('countries', 'AddressController@countries');
        Route::post('show_address', 'AddressController@addresses');
        Route::post('select_address', 'AddressController@select_address');
        Route::post('edit_address', 'AddressController@updateAddress');
        Route::post('remove_address', 'AddressController@destroyAddress');

        /**
         * Category product, product_varient
         */
        Route::get('cat', 'CategoryController@cat');
        Route::post('varient', 'CategoryController@varient');
        Route::post('dealproduct', 'CategoryController@dealproduct');

        /**
         * Orders Related Routes
         */
        Route::post('make_an_order', 'OrderController@order');
        Route::post('ongoing_orders', 'OrderController@ongoing');
        Route::get('cancelling_reasons', 'OrderController@cancel_for');
        Route::post('delete_order', 'OrderController@delete_order');
        Route::post('top_selling', 'OrderController@top_selling');
        Route::post('checkout', 'OrderController@checkout');
        Route::post('completed_orders', 'OrderController@completed_orders');
        Route::post('recent_selling', 'OrderController@recentSelling');

        /**
         * Coupon Related Routes
         */
        Route::post('couponlist', 'CouponController@coupon_list');
        Route::post('apply_coupon', 'CouponController@apply_coupon');
        // Route::post('walletamount', 'WalletController@walletamount');

        /**
         * Search API
         */
        Route::post('search', 'SearchController@search');

        /**
         * Currency
         */
        Route::get('currency', 'CurrencyController@currency');
        /////time slot//////
        Route::post('timeslot', 'TimeslotController@timeslot');

        //////minimum/maximum order value///////
        Route::get('minmax', 'CartvalueController@minmax');

        /////rating/////
        Route::post('review_on_delivery', 'RatingController@review_on_delivery');

        ////pages//
        Route::get('about_us', 'PagesController@appaboutus');
        Route::get('terms_and_conditions', 'PagesController@appTerms');

        //banner//
        Route::get('banner', 'BannerController@bannersList');

        Route::get('categories', 'CategoryController@cate');
        Route::post('products_by_category', 'CategoryController@categoryProducts');

        //wallet
        /*Route::post('recharge_wallet', 'WalletController@add_credit');
        Route::post('totalbill', 'WalletController@totalbill');
        Route::post('show_recharge_history', 'WalletController@show_recharge_history');*/


        /**
         * notification by
         */
        Route::post('notify_by', 'NotifybyController@notifyby');
        Route::post('update_or_create_notify_by', 'NotifybyController@updateOrCreateNotifyBy');

        /**
         * Second Banner
         */
        Route::get('promotional_banners', 'BannerController@promotionalBanners');

        // redeem rewards//
        // Route::post('redeem_rewards', 'RewardController@redeem');
        // Route::get('rewardvalues', 'RewardController@rewardvalues');

        /**
         * Notifications
         */
        Route::post('notifications', 'UsernotificationController@notifications');
        Route::post('notification_seen', 'UsernotificationController@notificationSeen');
        Route::post('mark_all_as_read', 'UsernotificationController@markAllAsRead');
        Route::post('delete_all_notifications', 'UsernotificationController@deleteAll');

        /**
         * cancel order list
         */
        Route::post('cancelled_orders', 'OrderController@cancelledOrders');

        /**
         * Profile Edit
         */
        Route::post('edit_profile', 'UserController@editProfile');
        ///////what's new//////
        Route::post('whatsnew', 'OrderController@whatsnew');

        ////rewardlines////
        Route::post('rewardlines', 'RewardController@rewardlines');

        //top six categories//
        Route::post('topsix', 'CategoryController@top_six');

        //Delivery fee info////
        Route::get('delivery_info', 'AppController@delivery_info');

        /////user_block_check////
        Route::post('user_block_check', 'UserController@user_block_check');

        Route::post('forgot_password', 'forgotpasswordController@forgot_password');
        Route::get('checkotponoff', 'forgotpasswordController@checkotponoff');
        Route::get('pymnt_via', 'PaymentController@pymnt_via');
        Route::get('mapby', 'MapsetController@mapby');
        Route::get('google_map', 'MapsetController@google_map');
        Route::get('mapbox', 'MapsetController@mapbox');
        Route::post('homecat', 'CategoryController@homecat');
        Route::get('countrycode', 'FirebaseController@countrycode');
        Route::get('firebase', 'FirebaseController@firebase');
        Route::get('app_notice', 'FirebaseController@app_notice');
        Route::post('firebase_otp_ver', 'forgotpasswordController@verifyOtp3');
        Route::post('checknum', 'forgotpasswordController@checknum');
        Route::post('verify_via_firebase', 'UserController@verifyotpfirebase');
        Route::post('homepage', 'CategoryController@homepage');
    });
});

Route::group(['prefix' => 'store', ['middleware' => ['XSS']], 'namespace' => 'Storeapi'], function () {

    Route::post('store_login', 'StoreloginController@store_login');
    Route::post('store_profile', 'StoreloginController@storeprofile');

    Route::post('storetoday_orders', 'StoreorderController@todayorders');
    Route::post('storenextday_orders', 'StoreorderController@nextdayorders');
    Route::post('productcancelled', 'StoreorderController@productcancelled');
    Route::post('order_rejected', 'StoreorderController@order_rejected');
    Route::post('storeconfirm', 'AssignController@storeconfirm');


    Route::post('productselect', 'AddproductController@productselect');
    Route::post('storeproducts', 'AddproductController@store_products');
    Route::post('store_stock_update', 'AddproductController@stock_update');
    Route::post('store_delete_product', 'AddproductController@delete_product');
    Route::post('store_add_products', 'AddproductController@add_products');
    Route::post('earn', 'AmountController@earn');

    //notifications//
    Route::post('notificationlist', 'NotificationController@notificationlist');
    Route::post('read_by_store', 'NotificationController@read_by_store');
    Route::post('all_as_read', 'NotificationController@all_as_read');
    Route::post('delete_all_notification', 'NotificationController@delete_all');
    Route::post('nearbydboys', 'AssignController@delivery_boy_list');
    Route::post('cart_invoice', 'StoreinvoiceController@cart_invoice');

});


Route::group(['prefix' => 'driver', ['middleware' => ['XSS']], 'namespace' => 'Driverapi'], function () {
    Route::post('driver_login', 'DriverloginController@driver_login');
    Route::post('driver_profile', 'DriverloginController@driverprofile');
    Route::post('ordersfortoday', 'DriverorderController@ordersfortoday');
    Route::post('ordersfornextday', 'DriverorderController@ordersfornextday');
    Route::post('out_for_delivery', 'DriverorderController@delivery_out');
    Route::post('delivery_completed', 'DriverorderController@delivery_completed');
    Route::post('avg_rating', 'RatingController@avg_rating');
    Route::get('map_api', 'MapController@map_api_key');
    Route::post('completed_orders', 'DriverorderController@completed_orders');
    Route::post('update_status', 'DriverstatusController@status');

});


Route::group(['prefix' => '', ['middleware' => ['XSS']], 'namespace' => 'Ios'], function () {


    // for user
    Route::post('ios_register', 'UserController@ios_signUp');
    Route::post('ios_com', 'IosordersController@completed_orders');
    Route::post('ios_on', 'IosordersController@ongoing');
    Route::post('ios_cart_add', 'CartController@add_to_cart');
    Route::post('ios_make_order', 'CartController@make_an_order');
    Route::post('show_cart', 'CartController@show_cart');
});

