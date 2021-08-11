<?php

namespace App\Http\Controllers\Api;

use App\Interfaces\Customer\ProductInterface;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class SearchController extends Controller
{
    protected $productRepository;

    public function __construct(ProductInterface $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    public function search(Request $request)
    {
        try {
            $products = $this->productRepository->getProductsBySearchAll($request->keyword, 50);
            if($products->isEmpty())
                throw new \Exception('We couldn\'t find any matches!');
            return array('status' => '1', 'message' => 'Products found', 'data' => $products);
        } catch (\Exception $e) {
            return array('status' => '0', 'message' => $e->getMessage(), 'data' => []);
        }
    }
}
