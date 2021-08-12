<?php

namespace App\Http\Controllers\Customer;

use App\Interfaces\Admin\BannerInterface;
use App\Interfaces\Admin\CategoryInterface;
use App\Interfaces\Admin\PageInterface;
use App\Interfaces\Customer\ProductInterface;
use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    protected $pageRepository, $bannerRepository, $productRepository, $categoryRepository;

    /**
     * Create a new controller instance.
     *
     * @param PageInterface $pageRepository
     * @param BannerInterface $bannerRepository
     * @param ProductInterface $productRepository
     * @param CategoryInterface $categoryRepository
     */
    public function __construct(PageInterface $pageRepository, BannerInterface $bannerRepository, ProductInterface $productRepository, CategoryInterface $categoryRepository)
    {
        $this->pageRepository = $pageRepository;
        $this->bannerRepository = $bannerRepository;
        $this->productRepository = $productRepository;
        $this->categoryRepository = $categoryRepository;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $home_slider_banners = $this->bannerRepository->getByType('home_main_slider');
        $trending_products = $this->productRepository->getTrendingNProducts(5);
        $snack_store_banner = $this->bannerRepository->getByType('snack_store_banner');
        $fruits_and_vegetables = $this->productRepository->getNProductsByCategorySlug('Fruits-and-Vegetables', 4);
        $daily_staples = $this->productRepository->getNProductsByCategorySlug('Your-Daily-Staples', 4);
        $drinks_beverages = $this->bannerRepository->getByType('drinks_beverages');
        $cleaning_household = $this->productRepository->getNProductsByCategorySlug('Cleaning-and-Household', 5);
        $beauty_and_hygiene = $this->productRepository->getNProductsByCategorySlug('Beauty-and-Hygiene', 4);
        $home_kitchen = $this->productRepository->getNProductsByCategorySlug('Home-and-kitchen', 5);
        return view('web.pages.index', compact('home_slider_banners',
            'trending_products', 'snack_store_banner', 'fruits_and_vegetables',
            'daily_staples', 'drinks_beverages', 'cleaning_household', 'beauty_and_hygiene', 'home_kitchen'));
    }

    public function page($slug)
    {
        $page = $this->pageRepository->getBySlug($slug);
        return view('customer.pages.page', compact('page'));
    }
}
