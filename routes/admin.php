<?php
Route::prefix('admin')->group(function () {
    Route::get('/login', 'Auth\LoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\LoginController@login')->name('admin.login.attempt');

    Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');

    Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
    Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('admin.password.reset');
    Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('admin.password.update');

    Route::middleware(['admin'])->group(function () {
        Route::get('/', 'HomeController@dashboard')->name('admin.dashboard');
        Route::get('logout', 'Auth\LoginController@logout')->name('admin.logout');
        Route::get('profile', 'ProfileController@adminProfile')->name('prof');
        Route::post('profile/update/{id}', 'ProfileController@adminUpdateProfile')->name('updateprof');
        Route::get('password/change', 'ProfileController@adminChangePass')->name('passchange');
        Route::post('password/update/{id}', 'ProfileController@adminChangePassword')->name('updatepass');

/////settings/////
        Route::get('app_details', 'SettingsController@app_details')->name('app_details');
        Route::post('app_details/update', 'SettingsController@updateappdetails')->name('updateappdetails');

        Route::get('msgby', 'SettingsController@msg91')->name('msg91');
        Route::post('msg91/update', 'SettingsController@updatemsg91')->name('updatemsg91');
        Route::post('twilio/update', 'TwilioController@updatetwilio')->name('updatetwilio');
        Route::post('msgoff', 'TwilioController@msgoff')->name('msgoff');

        Route::get('map_api', 'SettingsController@mapapi')->name('mapapi');
        Route::post('map_api/update', 'SettingsController@updatemap')->name('updatemap');

        Route::get('fcm', 'SettingsController@fcm')->name('fcm');
        Route::post('fcm/update', 'SettingsController@updatefcm')->name('updatefcm');

        Route::get('del_charge', 'SettingsController@del_charge')->name('del_charge');
        Route::post('del_charge/update', 'SettingsController@updatedel_charge')->name('updatedel_charge');

        Route::get('Notification', 'NotificationController@adminNotification')->name('adminNotification');
        Route::post('Notification/send', 'NotificationController@adminNotificationSend')->name('adminNotificationSend');

        Route::get('currency', 'SettingsController@currency')->name('currency');
        Route::post('currency/update', 'SettingsController@updatecurrency')->name('updatecurrency');

        Route::get('Notification_to_store', 'NotificationController@Notification_to_store')->name('Notification_to_store');
        Route::post('Notification_to_store/send', 'NotificationController@Notification_to_store_Send')->name('adminNotificationSendtostore');
///////category////////
        Route::get('category/list', 'CategoryController@list')->name('catlist');
        Route::get('category/add', 'CategoryController@AddCategory')->name('AddCategory');
        Route::post('category/add/new', 'CategoryController@AddNewCategory')->name('AddNewCategory');
        Route::get('category/edit/{category_id}', 'CategoryController@EditCategory')->name('EditCategory');
        Route::post('category/update/{category_id}', 'CategoryController@UpdateCategory')->name('UpdateCategory');
        Route::get('category/delete/{category_id}', 'CategoryController@DeleteCategory')->name('DeleteCategory');


///////Product////////
        Route::get('product/list', 'ProductController@list')->name('productlist');
        Route::get('product/add', 'ProductController@AddProduct')->name('AddProduct');
        Route::post('product/add/new', 'ProductController@AddNewProduct')->name('AddNewProduct');
        Route::get('product/edit/{product_id}', 'ProductController@EditProduct')->name('EditProduct');
        Route::post('product/update/{product_id}', 'ProductController@UpdateProduct')->name('UpdateProduct');
        Route::get('product/delete/{product_id}', 'ProductController@DeleteProduct')->name('DeleteProduct');

        /**
         * Product Varient
         */
        Route::get('varient/{id}', 'VarientController@varient')->name('variant');
        Route::get('varient/add/{id?}', 'VarientController@Addproduct')->name('add-varient');
        Route::post('varient/add/new', 'VarientController@AddNewproduct')->name('AddNewvarient');
        Route::get('varient/edit/{id}', 'VarientController@Editproduct')->name('edit-varient');
        Route::post('varient/update/{id}', 'VarientController@Updateproduct')->name('update-varient');
        Route::get('varient/delete/{id}', 'VarientController@deleteproduct')->name('delete-varient');

        /**
         * Orders Module Routes
         */
        Route::resource('order', 'OrderController', ['as' => 'admin']);
        Route::get('order-invoice/print/{order_id}', 'OrderController@printInvoice')->name('admin.order.print-invoice');
        Route::get('order-invoice/download/{order_id}', 'OrderController@downloadInvoice')->name('admin.order.download-invoice');
        Route::get('order-invoice/resend/{order_id}', 'OrderController@resendInvoice')->name('admin.order.resend-invoice');

///////Delivery Boy////////
        Route::get('d_boy/list', 'DeliveryController@list')->name('d_boylist');
        Route::get('d_boy/add', 'DeliveryController@AddD_boy')->name('AddD_boy');
        Route::post('d_boy/add/new', 'DeliveryController@AddNewD_boy')->name('AddNewD_boy');
        Route::get('d_boy/edit/{id}', 'DeliveryController@EditD_boy')->name('EditD_boy');
        Route::post('d_boy/update/{id}', 'DeliveryController@UpdateD_boy')->name('UpdateD_boy');
        Route::get('d_boy/delete/{id}', 'DeliveryController@DeleteD_boy')->name('DeleteD_boy');

///////Deal Product////////
        Route::get('deal/list', 'DealController@list')->name('deallist');
        Route::get('deal/add', 'DealController@AddDeal')->name('AddDeal');
        Route::post('deal/add/new', 'DealController@AddNewDeal')->name('AddNewDeal');
        Route::get('deal/edit/{id}', 'DealController@EditDeal')->name('EditDeal');
        Route::post('deal/update/{id}', 'DealController@UpdateDeal')->name('UpdateDeal');
        Route::get('deal/delete/{id}', 'DealController@DeleteDeal')->name('DeleteDeal');

        /**
         * Customers Management Routes
         */
        Route::get('user/list', 'UserController@list')->name('userlist');
        Route::get('user/block/{id}', 'UserController@block')->name('userblock');
        Route::get('user/unblock/{id}', 'UserController@unblock')->name('userunblock');

        /**
         * Admin Management Routes
         */
        Route::resource('admins', 'AdminUserController', ['as' => 'admin']);


        Route::resource('countries', 'CountriesController', ['as' => 'admin']);
        Route::resource('stateOrProvince', 'StateOrProvinceController', ['as' => 'admin']);
        Route::resource('cities', 'CitiesController', ['as' => 'admin']);

        /**
         * Banners
         */
        Route::get('bannerlist', 'BannerController@bannerlist')->name('bannerlist');
        Route::get('banner', 'BannerController@banner')->name('banner');
        Route::post('banneradd', 'BannerController@banneradd')->name('banneradd');
        Route::get('banneredit/{banner_id}', 'BannerController@banneredit')->name('banneredit');
        Route::post('bannerupdate/{banner_id}', 'BannerController@bannerupdate')->name('bannerupdate');
        Route::get('bannerdelete/{society_id}', 'BannerController@bannerdelete')->name('bannerdelete');

        /**
         * for coupon
         */
        Route::get('couponlist', 'CouponController@couponlist')->name('couponlist');
        Route::get('coupon', 'CouponController@coupon')->name('coupon');
        Route::post('addcoupon', 'CouponController@addcoupon')->name('addcoupon');
        Route::get('editcoupon/{coupon_id}', 'CouponController@editcoupon')->name('editcoupon');
        Route::post('updatecoupon', 'CouponController@updatecoupon')->name('updatecoupon');
        Route::get('deletecoupon/{coupon_id}', 'CouponController@deletecoupon')->name('deletecoupon');
// for minimum order
        // Route::get('bannerlist','SocietyController@societylist')->name('societylist');

// for delivery time
        Route::get('timeslot', 'TimeSlotController@timeslot')->name('timeslot');
        Route::post('timeslotupdate', 'TimeSlotController@timeslotupdate')->name('timeslotupdate');
        Route::get('closehour', 'ClosehourController@closehour')->name('closehour');
        Route::post('closehrsupdate', 'ClosehourController@closehrsupdate')->name('closehrsupdate');
// for store
        Route::get('admin/store/list', 'StoreController@storeclist')->name('storeclist');
        Route::get('admin/store/add', 'StoreController@store')->name('store');
        Route::post('admin/store/added', 'StoreController@storeadd')->name('storeadd');
        Route::get('admin/store/edit/{store_id}', 'StoreController@storedit')->name('storedit');
        Route::post('admin/store/update/{store_id}', 'StoreController@storeupdate')->name('storeupdate');
        Route::get('admin/store/delete/{store_id}', 'StoreController@storedelete')->name('storedelete');

        /**
         * store orders
         */
        Route::get('admin/store/orders/{id}', 'AdminorderController@admin_store_orders')->name('admin_store_orders');

        Route::get('admin/store/cancelledorders', 'AdminorderController@store_cancelled')->name('store_cancelled');

        /**
         * Assign store
         */
        Route::post('admin/store/assign/{id}', 'AdminorderController@assignstore')->name('store_assign');

        Route::get('finance', 'FinanceController@finance')->name('finance');
        Route::post('store_pay/{store_id}', 'FinanceController@store_pay')->name('store_pay');

        /**
         * pages
         */
        Route::get('about_us', 'PagesController@about_us')->name('about_us');
        Route::post('about_us/update', 'PagesController@updateabout_us')->name('updateabout_us');

        Route::get('terms', 'PagesController@terms')->name('terms');
        Route::post('terms/update', 'PagesController@updateterms')->name('updateterms');

        Route::get('prv', 'SettingsController@prv')->name('prv');
        Route::post('prv/update', 'SettingsController@updateprv')->name('updateprv');

// for reward
        Route::get('RewardList', 'RewardController@RewardList')->name('RewardList');
        Route::get('reward', 'RewardController@reward')->name('reward');
        Route::post('rewardadd', 'RewardController@rewardadd')->name('rewardadd');
        Route::get('rewardedit/{reward_id}', 'RewardController@rewardedit')->name('rewardedit');
        Route::post('rewardupate', 'RewardController@rewardupate')->name('rewardupate');
        Route::get('rewarddelete/{reward_id}', 'RewardController@rewarddelete')->name('rewarddelete');

// for reedem
        Route::get('reedem', 'ReedemController@reedem')->name('reedem');
        Route::post('reedemupdate', 'ReedemController@reedemupdate')->name('reedemupdate');

////store payout////
        Route::get('payout_req', 'PayoutController@pay_req')->name('pay_req');
        Route::post('payout_req/{req_id}', 'PayoutController@store_pay')->name('com_payout');

// for  Secondary banner
        Route::get('secbannerlist', 'SecondaryBannerController@secbannerlist')->name('secbannerlist');
        Route::get('secbanner', 'SecondaryBannerController@secbanner')->name('secbanner');
        Route::post('secbanneradd', 'SecondaryBannerController@secbanneradd')->name('secbanneradd');
        Route::get('secbanneredit/{sec_banner_id}', 'SecondaryBannerController@secbanneredit')->name('secbanneredit');
        Route::post('secbannerupdate/{sec_banner_id}', 'SecondaryBannerController@secbannerupdate')->name('secbannerupdate');
        Route::get('secbannerdelete/{sec_banner_id}', 'SecondaryBannerController@secbannerdelete')->name('secbannerdelete');

        Route::get('admin/d_boy/orders/{id}', 'AdminorderController@admin_dboy_orders')->name('admin_dboy_orders');

        //assign delivery boy//
        Route::post('admin/d_boy/assign/{id}', 'AdminorderController@assigndboy')->name('dboy_assign');

        Route::get('secretlogin/{id}', 'SecretloginController@secretlogin')->name('secret-login');
        Route::post('admin/reject/order/{id}', 'AdminorderController@rejectorder')->name('admin_reject_order');
        Route::get('admin/cancelled_orders', 'AdminorderController@admin_can_orders')->name('admin_can_orders');
        Route::get('payment_gateway', 'PayController@payment_gateway')->name('gateway');
        Route::post('payment_gateway/update', 'PayController@updatepymntvia')->name('updategateway');

        /**
         * Configuration Management
         */
        Route::get('configuration', 'ConfigurationController@index')->name('admin.configuration.index');
        Route::post('configuration', 'ConfigurationController@update')->name('admin.configuration.update');

        /**
         * Page Management
         */
        Route::resource('page', 'PageController', ['as' => 'admin']);

        /**
         * Email Templates Related Routes
         */
        Route::get('email-templates', 'EmailTemplatesController@index')->name('admin.email_templates');
        Route::get('email-templates/add', 'EmailTemplatesController@add')->name('admin.email_templates.add');
        Route::post('email-templates/store', 'EmailTemplatesController@store')->name('admin.email_templates.store');
        Route::get('email-templates/edit/{id}', 'EmailTemplatesController@edit')->name('admin.email_templates.edit');
        Route::post('email-templates/update/{id}', 'EmailTemplatesController@update')->name('admin.email_templates.update');
        Route::get('email-templates/delete/{id}', 'EmailTemplatesController@delete')->name('admin.email_templates.delete');

        Route::get('database-settings', 'DatabaseController@index')->name('database-settings.index');
        Route::post('database-settings/import-products', 'DatabaseController@importProducts')->name('admin.products.import');
        Route::get('database-settings/import-products/status', 'DatabaseController@importProductsStatus')->name('admin.products.import.status');

        /*Route::get('database-settings', function () {
            return view('admin.database_settings.index');
        })->name('database-settings.index');*/
    });
});
