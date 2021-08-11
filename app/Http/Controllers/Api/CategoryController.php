<?php

namespace App\Http\Controllers\Api;

use App\Interfaces\Admin\CategoryInterface;
use App\Interfaces\Customer\ProductInterface;
use App\Models\Banner;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductVariant;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Carbon\Carbon;

class CategoryController extends Controller
{
    protected $categoryRepository, $productRepository;

    public function __construct(CategoryInterface $categoryRepository, ProductInterface $productRepository)
    {
        $this->categoryRepository = $categoryRepository;
        $this->productRepository = $productRepository;
    }

    public function cate(Request $request)
    {
        try {
            $categories = $this->categoryRepository->getParentWise();
            if (count($categories) <= 0)
                throw new \Exception('No Categories Exists');
            return array('status' => 1, 'message' => 'Categories List', 'data' => $categories);

        } catch (\Exception $e) {
            return array('status' => 0, 'message' => $e->getMessage(), 'data' => []);
        }
    }

    public function categoryProducts(Request $request)
    {
        try {
            $products = Product::whereHas('variants')->where('cat_id', $request->category_id)->get();
            if ($products->count() > 0)
                return array('status' => 1, 'message' => "Products List", 'data' => $products);
            throw new \Exception('No products exists.');
        } catch (\Exception $e) {
            return array('status' => 0, 'message' => $e->getMessage(), 'data' => []);
        }
    }

    public function cat()
    {
        $categories = Category::with(['categories' => function ($q) {
            $q->with(['categories' => function ($q) {
                $q->with(['categories' => function ($q) {
                    $q->whereHas('products')->take(30)->get();
                }, 'products'])->whereHas('products')->take(30)->get();
            }, 'products'])->whereHas('products')->take(10)->get();
        }, 'products'])->whereHas('products')->take(10)->get()->sortBy(function ($category) {
            return $category->products->count();
        })->toArray();
        return array('status' => '1', 'message' => 'data found', 'data' => $categories);
    }

    public function varient(Request $request)
    {
        /*$prod_id = $request->product_id;
        $lat = $request->lat;
        $lng = $request->lng;
        $cityname = $request->city;
        $city = ucfirst($cityname);
        $nearbystore = DB::table('store')
            ->select('store_id', DB::raw("6371 * acos(cos(radians(" . $lat . "))
                    * cos(radians(store.lat))
                    * cos(radians(store.lng) - radians(" . $lng . "))
                    + sin(radians(" . $lat . "))
                    * sin(radians(store.lat))) AS distance"))
            ->where('store.del_range', '>=', 'distance')
            ->where('store.city', $city)
            ->orderBy('distance')
            ->first();
        $varient = DB::table('store_products')
            ->join('product_varient', 'store_products.varient_id', '=', 'product_varient.varient_id')
            ->Leftjoin('deal_product', 'product_varient.varient_id', '=', 'deal_product.varient_id')
            ->select('store_products.store_id', 'store_products.stock', 'product_varient.varient_id', 'product_varient.description', 'product_varient.price', 'product_varient.mrp', 'product_varient.varient_image', 'product_varient.unit', 'product_varient.quantity', 'deal_product.deal_price', 'deal_product.valid_from', 'deal_product.valid_to')
            ->where('product_id', $prod_id)
            ->where('store_products.store_id', $nearbystore->store_id)
            ->get();
        if (count($varient) > 0) {
            $message = array('status' => '1', 'message' => 'varients', 'data' => $varient);
            return $message;
        } else {
            $message = array('status' => '0', 'message' => 'data not found', 'data' => []);
            return $message;
        }*/
        try {
            $variants = ProductVariant::with('product')->where('product_id', $request->product_id)->get();
            return ['status' => 1, 'message' => 'Product Variants List', 'data' => $variants];
        } catch (\Exception $e) {
            return ['status' => 0, 'message' => $e->getMessage(), 'data' => []];
        }
    }


    public function dealproduct(Request $request)
    {
        $d = Carbon::Now();
        $lat = $request->lat;
        $lng = $request->lng;
        $cityname = $request->city;
        $city = ucfirst($cityname);

        $nearbystore = DB::table('store')
            ->select('store_id', DB::raw("6371 * acos(cos(radians(" . $lat . "))
                    * cos(radians(store.lat))
                    * cos(radians(store.lng) - radians(" . $lng . "))
                    + sin(radians(" . $lat . "))
                    * sin(radians(store.lat))) AS distance"))
            ->where('store.del_range', '>=', 'distance')
            ->where('store.city', $city)
            ->orderBy('distance')
            ->first();
        if ($nearbystore) {
            $deal_p = DB::table('deal_product')
                ->join('store_products', 'deal_product.varient_id', '=', 'store_products.varient_id')
                ->join('product_varient', 'store_products.varient_id', '=', 'product_varient.varient_id')
                ->join('product', 'product_varient.product_id', '=', 'product.product_id')
                ->select('store_products.store_id', 'store_products.stock', 'deal_product.deal_price as price', 'product_varient.varient_image', 'product_varient.quantity', 'product_varient.unit', 'product_varient.mrp', 'product_varient.description', 'product.product_name', 'product.product_image', 'product_varient.varient_id', 'product.product_id', 'deal_product.valid_to', 'deal_product.valid_from')
                ->groupBy('store_products.store_id', 'store_products.stock', 'deal_product.deal_price', 'product_varient.varient_image', 'product_varient.quantity', 'product_varient.unit', 'product_varient.mrp', 'product_varient.description', 'product.product_name', 'product.product_image', 'product_varient.varient_id', 'product.product_id', 'deal_product.valid_to', 'deal_product.valid_from')
                ->where('store_products.store_id', $nearbystore->store_id)
                ->whereDate('deal_product.valid_from', '<=', $d->toDateString())
                ->WhereDate('deal_product.valid_to', '>', $d->toDateString())
                ->get();


            if (count($deal_p) > 0) {
                $result = array();
                $i = 0;
                $j = 0;
                foreach ($deal_p as $deal_ps) {
                    array_push($result, $deal_ps);

                    $val_to = $deal_ps->valid_to;
                    $diff_in_minutes = $d->diffInMinutes($val_to);
                    $totalDuration = $d->diff($val_to)->format('%H:%I:%S');
                    $result[$i]->timediff = $diff_in_minutes;
                    $i++;
                    $result[$j]->hoursmin = $totalDuration;
                    $j++;
                }

                $message = array('status' => '1', 'message' => 'Products found', 'data' => $deal_p);
                return $message;
            } else {
                $message = array('status' => '0', 'message' => 'Products not found', 'data' => []);
                return $message;
            }
        } else {
            $message = array('status' => '2', 'message' => 'No Products Found Nearby', 'data' => []);
            return $message;
        }

    }


    public function top_six(Request $request)
    {
        $lat = $request->lat;
        $lng = $request->lng;
        $cityname = $request->city;
        $city = ucfirst($cityname);
        $nearbystore = DB::table('store')
            ->select('store_id', DB::raw("6371 * acos(cos(radians(" . $lat . "))
                    * cos(radians(store.lat))
                    * cos(radians(store.lng) - radians(" . $lng . "))
                    + sin(radians(" . $lat . "))
                    * sin(radians(store.lat))) AS distance"))
            ->where('store.del_range', '>=', 'distance')
            ->where('store.city', $city)
            ->orderBy('distance')
            ->first();
        if ($nearbystore) {
            $topsix = DB::table('store_products')
                ->join('product_varient', 'store_products.varient_id', '=', 'product_varient.varient_id')
                ->join('product', 'product_varient.product_id', '=', 'product.product_id')
                ->Leftjoin('store_orders', 'product_varient.varient_id', '=', 'store_orders.varient_id')
                ->Leftjoin('orders', 'store_orders.order_cart_id', '=', 'orders.cart_id')
                ->join('categories', 'product.cat_id', '=', 'categories.cat_id')
                ->select('categories.title', 'categories.image', 'categories.description', 'categories.cat_id', DB::raw('count(store_orders.varient_id) as count'))
                ->groupBy('categories.title', 'categories.image', 'categories.description', 'categories.cat_id')
                ->where('store_products.store_id', $nearbystore->store_id)
                ->orderBy('count', 'desc')
                ->limit(6)
                ->get();
            if (count($topsix) > 0) {
                $message = array('status' => '1', 'message' => 'Top Six Categories', 'data' => $topsix);
                return $message;
            } else {
                $message = array('status' => '0', 'message' => 'Nothing in Top Six', 'data' => []);
                return $message;
            }
        } else {
            $message = array('status' => '2', 'message' => 'No Products Found Nearby', 'data' => []);
            return $message;
        }
    }

    public function homecat(Request $request)
    {
        return self::cat($request);
    }

    public function homepage()
    {
        $banner = Banner::where('type', 'hero_banner')->get();
        $banner2 = Banner::where('type', 'promotional_banner')->get();
        $top_selling = Product::whereHas('variants')->with(['variants' => function ($q) {
            $q->whereHas('orderVariants');
        }])->paginate(10);
        $top_selling = ProductVariant::whereHas('orderVariants')->take(10)->get()->filter(function ($variant) {
            $variant->store_id = 19;
            $variant->stock = 785;
            $variant->product_name = $variant->product->product_name;
            $variant->product_image = $variant->product->product_image;
            $variant->valid_to = null;
            $variant->valid_from = null;
            $variant->count = 10;
            $variant->timediff = null;
            $variant->hoursmin = null;
            unset($variant->product);
            return $variant;
        });

        $recentselling = ProductVariant::whereHas('orderVariants')
            ->take(10)->get()->sortBy(function ($product) {
                if (!is_null($product->orderVariants)) {
                    return $product->orderVariants->count();
                }
            })->filter(function ($variant) {
                $variant->store_id = 19;
                $variant->stock = 785;
                $variant->product_name = $variant->product->product_name;
                $variant->product_image = $variant->product->product_image;
                $variant->valid_to = null;
                $variant->valid_from = null;
                $variant->count = 10;
                $variant->timediff = null;
                $variant->hoursmin = null;
                unset($variant->product,$variant->order_variants);
                return $variant;
            });
        $recentselling = array_values($recentselling->toArray());

        $new =  ProductVariant::whereHas('orderVariants')->orderBy('product_id', 'desc')->paginate(10)->filter(function ($variant) {
            $variant->store_id = 19;
            $variant->stock = 785;
            $variant->product_name = $variant->product->product_name;
            $variant->product_image = $variant->product->product_image;
            $variant->valid_to = null;
            $variant->valid_from = null;
            $variant->count = 10;
            $variant->timediff = null;
            $variant->hoursmin = null;
            unset($variant->product,$variant->order_variants);
            return $variant;
        });
        $deal_p = $this->productRepository->getRandomProducts(10);
        $topsix = $this->productRepository->getRandomProducts(10);

        try {
            return [
                'status' => 1,
                'message' => 'Home Screen API',
                'banner1' => $banner,
                'banner2' => $banner2,
                'top_selling' => $top_selling,
                'recentselling' => $recentselling,
                'whats_new' => $new,
                'deal_products' => $deal_p,
                'top_category' => $topsix,
            ];

        } catch (\Exception $e) {
            return array('status' => 0, 'message' => $e->getMessage(), 'data' => []);

        }
    }

}
