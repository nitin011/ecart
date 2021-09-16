<?php

namespace App\Http\Controllers\Customer;

use App\Interfaces\Admin\BannerInterface;
use App\Interfaces\Admin\CategoryInterface;
use App\Interfaces\Customer\ProductInterface;
use App\Interfaces\Customer\ProductVariantInterface;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    protected $bannerRepository, $categoryRepository, $productVariantRepository, $productRepository;

    public function __construct(BannerInterface $bannerRepository, CategoryInterface $categoryRepository,
                                ProductVariantInterface $productVariantRepository,
                                ProductInterface $productRepo)
    {
        $this->bannerRepository = $bannerRepository;
        $this->productRepository = $productRepo;
        $this->productVariantRepository = $productVariantRepository;
        $this->categoryRepository = $categoryRepository;
    }

    public function index(Request $request)
    {
        if ($request->filled('sort_by')){
            $sortby= explode(':',$request->get('sort_by'));

            $products = $this->productRepository->getAllBySorting($sortby[0], $sortby[1], 8);
        }else{
            $products = $this->productRepository->getAll(8);
        }
        if ($request->ajax()) {
            if (!$products->isEmpty()) {
                $view = view('web.pages.product.partial.product_block', compact('products'))->render();
            }
            return response()->json(['status' => (!$products->isEmpty()), 'html' => $view ?? null]);
        }
        return view('web.pages.product.product-list', compact('products'));
    }

    public function bySearch(Request $request)
    {
        $search = $request->search;
        if ($request->filled('sort_by')){
            $sortby= explode(':',$request->get('sort_by'));
            $products =$this->productRepository->getProductsBySearchAllSorting($search, $sortby[0], $sortby[1], 8);
        }else{
            $products = $this->productRepository->getProductsBySearchAll($search, 8);
        }
        if (request()->ajax()) {
            if (!$products->isEmpty()) {
                $view = view('web.pages.product.partial.product_block', compact('products'))->render();
            }
            return response()->json(['status' => (!$products->isEmpty()), 'html' => $view ?? null]);
        }
        return view('web.pages.product.by_search', compact('products', 'search'));
    }


    public function byCategory($category_id)
    {
        $categories = $this->categoryRepository->getAll();
        $current_category = $this->categoryRepository->getById($category_id);

        if (request()->filled('sort_by')){
            $sortby= explode(':',request()->get('sort_by'));
            $products= $this->productRepository->getByCategoryIdSorting($category_id, $sortby[0], $sortby[1], 8);
        }else{
            $products = $this->productRepository->getByCategoryId($category_id, 8);
        }
        if (request()->ajax()) {
            if (!$products->isEmpty()) {
                $view = view('web.pages.product.partial.product_block', compact('products'))->render();
            }
            return response()->json(['status' => (!$products->isEmpty()), 'html' => $view ?? null]);
        }
        return view('web.pages.product.by_category', compact('categories', 'current_category', 'products'));
    }

    public function bySlug($slug)
    {
        if ($slug == 'trending_products') {
            $products = $this->productRepository->getTrendingNProducts();
        } else if ($slug == 'snack_store_banner') {
            $products = $this->bannerRepository->getByType('snack_store_banner');
        } else {
            $products = $this->productRepository->getNProductsByCategorySlug($slug, 12);
        }
        return view('customer.pages.product.shop', compact('products'));
    }

    public function show($id)
    {
        $variant = $this->productVariantRepository->getById($id);
        $featured_products = $this->productRepository->getRandomCategoryProducts($variant->product->category_id, 12);
        return view('web.pages.product.product-details', compact('variant', 'featured_products'));
    }

    public function pluckTitleByCategoryId(Request $request)
    {
        if ($request->ajax()) {
            $category_id = isset($request->category_id) ? $request->category_id : null;
            $search_string = isset($request->search) ? $request->search : null;
            $data = $this->productRepository->getProductsByCategory($category_id, $search_string)->select('id', 'title')->get();
            return response()->json($data);
        }
    }

    public function getVariants(Request $request)
    {
        if ($request->ajax()) {
            if (isset($request->product_id)) {
                $data = $this->productVariantRepository->getByProductId($request->product_id)->get();
            }
            if (isset($data) && !$data->isEmpty()) {
                return response()->json(['status' => true, 'variants' => $data]);
            }
            return response()->json(['status' => false, 'variants' => $data ?? null]);
        }
    }
}
