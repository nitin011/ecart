<?php


namespace App\Repositories\Customer;


use App\Interfaces\Customer\ProductInterface;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductVariant;

class ProductRepository implements ProductInterface
{

    public function getAll($perPage = null)
    {
        return Product::whereHas('variants')->paginate($perPage ?? 10);
    }

    public function getTrendingProducts()
    {
        try {
            return Product::whereHas('variants')->inRandomOrder()->limit(5)->get();
        } catch (\Exception $e) {
            return Product::whereHas('variants')->get();
        }
    }

    public function getTrendingNProducts($perPage = 10)
    {
        return Product::whereHas('variants')->paginate($perPage);
    }

    public function getDetails($product_id)
    {
        return Product::findOrFail($product_id);
    }

    public function getByCategorySlug($category_slug)
    {

        if (!is_null($this->categoryBySlug($category_slug))) {
            return Product::where('cat_id', $this->categoryBySlug($category_slug)->cat_id)->first();
        }
        return Product::first();

    }

    public function categoryBySlug($slug)
    {
        return Category::where('slug', 'LIKE', "%$slug%")->first();
    }

    public function getNProductsByCategorySlug($category_slug, $perPage = 10)
    {
        $products = Product::whereHas('variants')->whereHas('category', function ($q) use ($category_slug) {
            $q->where('slug', $category_slug);
        });
        return $products->paginate($perPage);
    }

    public function getRandomCategoryProducts($category_id, $count)
    {
        try {
            return Product::where('cat_id', $category_id)->get()->random($count);
        } catch (\Exception $e) {
            return Product::paginate(10);
        }
    }

    public function getRandomProducts($count = 10)
    {
        try {
            return ProductVariant::all()->random($count)->filter(function ($variant) {
                $variant->store_id = 19;
                $variant->stock = 785;
                $variant->product_name = $variant->product->product_name;
                $variant->product_image = $variant->product->product_image;
                $variant->valid_to = null;
                $variant->valid_from = null;
                $variant->count = 10;
                $variant->timediff = null;
                $variant->hoursmin = null;
                unset($variant->product, $variant->order_variants);
                return $variant;
            });
        } catch (\Exception $e) {
            return ProductVariant::paginate(10)->filter(function ($variant) {
                $variant->store_id = 19;
                $variant->stock = 785;
                $variant->product_name = $variant->product->product_name;
                $variant->product_image = $variant->product->product_image;
                $variant->valid_to = null;
                $variant->valid_from = null;
                $variant->count = 10;
                $variant->timediff = null;
                $variant->hoursmin = null;
                unset($variant->product, $variant->order_variants);
                return $variant;
            });
        }
    }

    public function getProductsBySearchAll($string, $perPage = null)
    {
        $this->search_string = $string;
        $products = Product::whereHas('variants')->where('product_name', 'LIKE', "%$string%")
            ->orWhereHas('category', function ($query) use ($string) {
                $query->where('title', 'LIKE', "%$string%");
            });
        return $perPage ? $products->paginate($perPage) : $products->get();
    }

    public function getProductsByCategory($category_id, $string = null, $perPage = null, $ignored_products = null)
    {
        $products = Product::with('variants');
        if (isset($category_id)) {
            $products->where('cat_id', $category_id);
        }
        if ($string != null) {
            $products->where('title', 'LIKE', "%" . $string . "%");
        }
        if (!is_null($ignored_products)) {
            $products->where('id', '!=', $ignored_products);
        }
        if ($perPage != null) {
            return $products->paginate($perPage);
        }
        return $products;
    }

    public function getByCategoryId($cat_id, $perPage = null)
    {
        $products = Product::whereHas('variants')->where('cat_id', $cat_id);
        if (!is_null($perPage)) {
            $products = $products->paginate($perPage);
        } else {
            $products = $products->get();
        }
        return $products;
    }

}
