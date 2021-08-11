<?php


namespace App\Services;


use App\Models\Category;
use App\Models\FlagTable;
use App\Models\Product;
use App\Models\ProductVariant;
use App\Repositories\ImageRepository;
use Exception;
use File;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ImportProductsService
{
    public $chunks, $rowData, $csv_columns, $total_rows, $flag_table, $fileService;

    public function __construct()
    {
        $this->fileService = new ImageRepository();
    }

    public function getTableColumns($table)
    {
        return DB::table($table);
    }

    public function upload()
    {
        try {
            self::getCsvData();

            foreach ($this->rowData as $value) {
                $row = self::filterRow($value);
                self::syncCategory($row['product']);
                self::storeProduct($row);
                $this->flag_table->increment('rows_imported');
            }
        } catch (Exception $e) {
        }
        $this->flag_table->delete();
    }

    public function getCsvData()
    {
        $this->flag_table = FlagTable::findOrFail(1000);
        $file_name = $this->flag_table->file_name;

        $fileD = fopen(public_path('storage/products/files/' . $file_name), "r");
        $this->csv_columns = fgetcsv($fileD);
        $rowData = [];
        while (!feof($fileD)) {
            $rowData[] = fgetcsv($fileD);
        }
        // Remove CSV FIle From Server
        $this->fileService->removeImage($file_name, 'app/public/products/files/');
        $this->rowData = $rowData;
        $rowData = collect($this->rowData); // Make a collection to use the chunk method
        // it will chunk the dataset in smaller collections containing 500 values each.
        // Play with the value to get best result
        $this->chunks = $rowData->chunk(100);
        $this->total_rows = count($rowData);
        $this->flag_table->update(['total_rows' => $this->total_rows]);
    }

    public function syncCategory($product)
    {
        $category = Category::find($product['cat_id']);

        if (is_null($category)) {
            // Create New Category
            Category::create([
                'cat_id' => $product['cat_id'],
                'title' => $product['product_name'],
                'slug' => Str::random(),
                'image' => $product['product_image'],
                'parent' => $product['cat_id'], // Category::orderBy('cat_id', 'desc')->first()->cat_id,
                'level' => 10,
                'description' => $product['product_name'] . ' and more.',
                'status' => 1,
            ]);
        }
    }

    public function storeDefaultVariant($variantData)
    {
        return ProductVariant::create($variantData);
    }

    public function storeProduct($data)
    {
        $product = Product::find($data['product']['product_id']);
        if ($product != null) {
            // update
            $product->update($data);
            $this->fileService->removeImage($product->product_image, Product::IMG_PATH);
            Product::findOrFail($data['product']['product_id']);
            return;
        }
        // Create
        $product = Product::create($data['product']);
        $variantData = $data['variant'];
        $variantData['product_id'] = $product->product_id;
        self::storeDefaultVariant($variantData);
        return;
    }

    public function filterRow($value)
    {
        $pricePerUnit = $value[9];
        $productImage = $this->uploadImage($value['image'] ?? $value['product_image'] ?? $value[8]);
        $row['product']['product_id'] = $value['productId'] ?? $value['product_id'] ?? $value[0];
        $row['product']['cat_id'] = $value['catEntryId'] ?? $value['cat_id'] ?? $value[6];
        $row['product']['product_name'] = str_replace('Sainsbury\'s ', '', $value['title'] ?? $value['product_name'] ?? $value[1]);
        $row['product']['product_image'] = $productImage;
        // $row['cat_id'] = $value['catEntryId'] ?? $value['cat_id'];

        $mrp_with_unit = str_replace('£', '', $pricePerUnit);
        $mrp = substr($mrp_with_unit, 0, strpos($mrp_with_unit, "/"));

        $array = explode('/', $pricePerUnit);

        $row['variant'] = [
            'quantity' => 1,
            'unit' => end($array),
            'mrp' => (float)$mrp,
            'price' => (float)$mrp,
            'short_description' => $row['product']['product_name'],
            'description' => $row['product']['product_name'],
            'varient_image' => $productImage,
        ];
        return $row;
    }

    /**
     * @param $url
     * @return string
     */
    public function uploadImage($url)
    {
        ini_set('max_execution_time', '1000');
        $url = 'https:' . $url;
        $contents = file_get_contents($url);
        $old_name = substr($url, strrpos($url, '/') + 1);
        $array = explode('.', $old_name);
        $ext = end($array);
        $name = Str::random() . '.' . $ext;
        Storage::put('public/products/' . $name, $contents);
        return 'storage/products/' . $name;
    }

    /**
     * @return bool
     */
    public function syncImages()
    {
        try {
            foreach (Product::where('product_image', 'like', '%www.sainsburys.co.uk%')->get() as $product) {
                $url = 'https:' . $product->product_image;
                $name = self::uploadImage($url);
                Product::find($product->product_id)->update(['product_image' => 'storage/products/' . $name]);
            }
        } catch (Exception $e) {
        }
        return true;
    }
}
