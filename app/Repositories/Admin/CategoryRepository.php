<?php


namespace App\Repositories\Admin;


use App\Interfaces\Admin\CategoryInterface;
use App\Models\Category;
use App\Models\Product;

class CategoryRepository implements CategoryInterface
{
    public function getAll()
    {
        return Category::all();
    }

    public function getWithProducts()
    {
        return Category::whereHas('products')->get();
    }

    public function getWithActiveProducts()
    {
        return Category::whereHas('products')->where('status', 1)->get();
    }

    public function getParentWise()
    {
        return Category::with(['categories' => function ($q) {
            $q->with(['categories' => function ($q) {
                $q->with(['categories' => function ($q) {
                    $q->whereHas('products')->take(30)->get();
                }, 'products'])->whereHas('products')->take(30)->get();
            }, 'products'])->whereHas('products')->take(10)->get();
        }, 'products'])->whereHas('products')->take(10)->get()->sortBy(function ($category) {
            return $category->products->count();
        })->toArray();
    }

    public function getById($category_id)
    {
        return Category::findOrFail($category_id);
    }

}
