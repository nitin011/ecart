<?php


namespace App\Interfaces\Customer;


use App\Models\Category;
use App\Models\Product;

interface ProductInterface
{
    public function getAll($perPage = null);

    public function getAllBySorting($filter, $perPage= null);

    public function getTrendingProducts();

    public function getTrendingNProducts($perPage = 10);

    public function getNProductsByCategorySlug($category_slug, $perPage = 10);

    public function getDetails($product_id);

    public function getByCategorySlug($category_slug);

    public function getRandomCategoryProducts($category_id, $count);

    public function getProductsBySearchAll($string, $perPage = null);

    public function getProductsBySearchAllSorting($string, $filter, $perPage = null);

    public function getProductsByCategory($category_id, $string = null, $perPage = null, $ignored_products = null);

    public function getRandomProducts($count = 10);

    public function getByCategoryId($cat_id, $perPage = null);

    public function getByCategoryIdSorting($cat_id, $filter, $perPage = null);
}
