<?php

namespace App\Providers;

use App\Interfaces\Admin\AdminUserInterface;
use App\Interfaces\Admin\BannerInterface;
use App\Interfaces\Admin\CategoryInterface;
use App\Interfaces\Admin\OrderStatusInterface;
use App\Interfaces\Admin\PageInterface;
use App\Interfaces\ConfigurationInterface;
use App\Interfaces\Customer\AddressInterface;
use App\Interfaces\Customer\CartInterface;
use App\Interfaces\Customer\CouponInterface;
use App\Interfaces\Customer\CustomerInterface;
use App\Interfaces\Customer\OrderInterface;
use App\Interfaces\Customer\OrderItemInterface;
use App\Interfaces\Admin\OrderInterface as AdminOrderInterface;
use App\Interfaces\Admin\OrderItemInterface as AdminOrderItemInterface;
use App\Interfaces\Customer\ProductInterface;
use App\Interfaces\Customer\ProductVariantInterface;
use App\Interfaces\Customer\TransactionInterface;
use App\Interfaces\ImageInterface;
use App\Repositories\Admin\AdminUserRepository;
use App\Repositories\Admin\BannerRepository;
use App\Repositories\Admin\CategoryRepository;
use App\Repositories\Admin\OrderStatusRepository;
use App\Repositories\Admin\PageRepository;
use App\Repositories\ConfigurationRepository;
use App\Repositories\Customer\AddressRepository;
use App\Repositories\Customer\CartRepository;
use App\Repositories\Customer\CouponRepository;
use App\Repositories\Customer\CustomerRepository;
use App\Repositories\Customer\OrderItemRepository;
use App\Repositories\Customer\OrderRepository;
use App\Repositories\Admin\OrderItemRepository as AdminOrderItemRepository;
use App\Repositories\Admin\OrderRepository as AdminOrderRepository;
use App\Repositories\Customer\ProductRepository;
use App\Repositories\Customer\ProductVariantRepository;
use App\Repositories\Customer\TransactionRepository;
use App\Repositories\ImageRepository;
use App\Services\EmailService;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind(AddressInterface::class, AddressRepository::class);
        $this->app->bind(CartInterface::class, CartRepository::class);
        $this->app->bind(CustomerInterface::class, CustomerRepository::class);
        $this->app->bind(OrderInterface::class, OrderRepository::class);
        $this->app->bind(OrderItemInterface::class, OrderItemRepository::class);
        $this->app->bind(ProductInterface::class, ProductRepository::class);
        $this->app->bind(ProductVariantInterface::class, ProductVariantRepository::class);
        $this->app->bind(CategoryInterface::class, CategoryRepository::class);
        $this->app->bind(TransactionInterface::class, TransactionRepository::class);
        $this->app->bind(CouponInterface::class, CouponRepository::class);

        /**
         * Admin Repositories Bindings
         */
        $this->app->bind(BannerInterface::class, BannerRepository::class);
        $this->app->bind(AdminOrderInterface::class, AdminOrderRepository::class);
        $this->app->bind(AdminOrderItemInterface::class, AdminOrderItemRepository::class);
        $this->app->bind(OrderStatusInterface::class, OrderStatusRepository::class);
        $this->app->bind(AdminUserInterface::class, AdminUserRepository::class);

        /**
         * Global Repositories Bindings
         */
        $this->app->bind(ImageInterface::class, ImageRepository::class);
        $this->app->bind(ConfigurationInterface::class, ConfigurationRepository::class);
        $this->app->bind(PageInterface::class, PageRepository::class);
    }
}
