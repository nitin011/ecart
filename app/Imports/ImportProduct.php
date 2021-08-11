<?php

namespace App\Imports;

use App\Models\Category;
use App\Models\Product;
use App\Models\ProductVariant;
use App\Services\FileService;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Log;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Maatwebsite\Excel\Concerns\WithProgressBar;

class ImportProduct implements ToCollection, WithChunkReading, WithProgressBar
{
    use Importable;

    protected $fileService;

    public function batchSize(): int
    {
        return 500;
    }

    public function chunkSize(): int
    {
        return 500;
    }

    public function uniqueBy()
    {
        return 'product_id';
    }

    public function collection(Collection $rows)
    {
        $this->fileService = new FileService();
        Product::query()->truncate();
        ProductVariant::query()->truncate();
        $file = new Filesystem;
        $file->cleanDirectory('storage/app/public/products');
        $file->cleanDirectory('storage/app/public/product_variants/');

        foreach ($rows as $row) {
            try {
                $title = str_replace('Sainsbury\'s', '', $row[2]);
                $product_id = $row[0];
                $category_id = $row[14]??null;
                $category = Category::query()->find($category_id);

                if (is_null($category)) {
                    Log::alert("Cannot create product Because Category Not Found: PRODUCT_ID::{$product_id}**** TITLE::{$title}***** Category Title::{$category_id}");
                    continue;
                }

                $image = $this->fileService->uploadFileFromUrl('https:' . $row[9], Product::IMG_PATH);
                $variant_image = $this->fileService->uploadFileFromUrl('https:' . $row[9], ProductVariant::IMG_PATH);
                $category_id = $category->cat_id;
                $pricePerUnit = $row[10];
                $mrp_with_unit = str_replace('£', '', $pricePerUnit);
                $mrp = substr($mrp_with_unit, 0, strpos($mrp_with_unit, "/"));
                $array = explode('/', $pricePerUnit);
                $unit = end($array);

                Product::query()->updateOrCreate([
                    'product_id' => $product_id
                ], [
                    'product_id' => $product_id,
                    'cat_id' => $category_id,
                    'product_name' => $title,
                    'product_image' => $image,
                ]);
                ProductVariant::query()->create([
                    'quantity' => 1,
                    'product_id' => $product_id,
                    'unit' => $unit,
                    'mrp' => (float)$mrp,
                    'price' => (float)$mrp,
                    'short_description' => $title,
                    'description' => $title,
                    'varient_image' => $variant_image,
                ]);
            } catch (\Exception $e) {
                Log::error("Product Import Error: {$e->getMessage()}*********At Line Number: {$e->getLine()}" . ($category_id??'null category _id') ?? '******');
                return 0;
            }
        }
    }

}
