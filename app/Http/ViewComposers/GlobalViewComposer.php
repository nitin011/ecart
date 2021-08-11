<?php

namespace App\Http\ViewComposers;

use App\Interfaces\Admin\CategoryInterface;
use App\Interfaces\ConfigurationInterface;
use App\Interfaces\Customer\CouponInterface;
use App\Models\Category;
use App\Models\Currency;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\View\View;

class GlobalViewComposer
{
    protected $configurationRepository, $couponRepository, $cartRepository, $categoryRepository;

    public function __construct(ConfigurationInterface $configurationRepository, CategoryInterface $categoryRepository, CouponInterface $couponRepository)
    {
        $this->configurationRepository = $configurationRepository;
        $this->couponRepository = $couponRepository;
        $this->categoryRepository = $categoryRepository;
    }

    /**
     * Bind data to the view.
     *
     * @param View $view
     * @return void
     */

    public function compose(View $view)
    {
        $site_configurations = $this->configurationRepository->getConfigurationsValues();
        $coupons = $this->couponRepository->getActiveCoupons();
        $currency = Currency::firstOrCreate(['currency_sign' => '£'], ['currency_name' => 'Pound']);
        $view->with('currency', $currency)->with('coupons', $coupons)
            ->with('site_configurations', $site_configurations);
    }
}
