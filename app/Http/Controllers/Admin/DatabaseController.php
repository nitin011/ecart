<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Interfaces\ImageInterface;
use App\Models\FlagTable;
use App\Models\Product;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Config;
use Maatwebsite\Excel\Facades\Excel;
use JonnyW\PhantomJs\Client;


class DatabaseController extends Controller
{


    public const IMG_PATH = "app/public/queue_file/";

    protected $imageRepository;

    public function __construct(ImageInterface $imageRepository)
    {
        $this->imageRepository = $imageRepository;
    }

    public function index()
    {
        /// $html_url = 'https://www.sainsburys.co.uk/gol-ui/product/drinks-fresh-milk/sainsburys-british-whole-milk-568ml-1-pint-';
        return view('admin.database_settings.index');
    }

    public function import()
    {
        $records = [];
        $path = base_path('resources/pendingproducts');
        foreach (glob($path . '/*.csv') as $file) {
            $file = new \SplFileObject($file, 'r');
            $file->seek(PHP_INT_MAX);
            $records[] = $file->key();
        }
        $toImport = array_sum($records);

        return view('import', compact('toImport'));
    }


    public function importProducts(Request $request)
    {
        $request->validate([
            'excel_file' => 'required'
        ]);
        // Excel::import(new ImportProduct, request()->excel_file);
        $this->imageRepository->removeImage('excel_file', self::IMG_PATH);
        $this->imageRepository->store($request->excel_file, self::IMG_PATH, 'excel_file');
        // Artisan::call('import:products');
        return redirect()->route("database-settings.index")->with('success', 'File Queued and is being upload.');
    }

    public function importProductsStatus(Request $request): JsonResponse
    {
        $flag_table = FlagTable::query()->orderBy('created_at', 'desc')->first();
        if (empty($flag)) {
            return response()->json(['msg' => 'done']); //nothing to do
        }
        if ($flag_table->imported === 1) {
            return response()->json(['msg' => 'done']);
        } else {
            $status = $flag_table->rows_imported . ' excel rows have been imported out of a total of ' . $flag_table->total_rows;
            return response()->json(['msg' => $status]);
        }
    }

    protected function startProcess()
    {
        $file = FlagTable::query()->where('imported', '=', '0')
            ->orderBy('created_at', 'DESC')
            ->first();

        $file_path = Config::get('filesystems.disks.local.root') . '/' . $file->file_name;

        // let's first count the total number of rows
        Excel::load($file_path, function ($reader) use ($file) {
            $objWorksheet = $reader->getActiveSheet();
            $file->total_rows = $objWorksheet->getHighestRow() - 1; //exclude the heading
            $file->save();
        });

        //now let's import the rows, one by one while keeping track of the progress
        Excel::filter('chunk')
            ->selectSheetsByIndex(0)
            ->load($file_path)
            ->chunk($this->chunkSize, function ($result) use ($file) {
                $rows = $result->toArray();
                // let's do more processing (change values in cells) here as needed
                $counter = 0;
                foreach ($rows as $k => $row) {
                    foreach ($row as $c => $cell) {
                        $rows[$k][$c] = $cell . ':)'; //altered value :)
                    }
                    dd($rows[$k]);
                    Product::query()->insert($rows[$k]);
                    $counter++;
                }
                $file = $file->fresh(); //reload from the database
                $file->rows_imported = $file->rows_imported + $counter;
                $file->save();
            }
            );

        $file->imported = 1;
        $file->save();
        return 1;
    }
}
