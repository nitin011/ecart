<?php

namespace App\Http\Livewire\Admin;

use App\Jobs\ImportProducts;
use App\Models\FlagTable;
use App\Models\Product;
use App\Repositories\ImageRepository;
use App\Services\ImportProductsService;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithFileUploads;

class DatabaseSettings extends Component
{
    use WithFileUploads;

    public $is_active_progress = false, $percent_done, $progress,
        $storage_path, $table_name, $file_name, $chunks, $rowData, $file,
        $upload = 0, $count = 0, $message = null, $total_rows;

    public function mount()
    {
        $this->storage_path = 'public/products/files';
    }

    public function render()
    {
        self::getProgress();
        return view('livewire.admin.database-settings');
    }

    public function upload()
    {
        $this->validate([
            'file' => 'required|max:50000|mimes:xlsx,txt,csv,xls'
        ]);

        $this->file_name = Str::random() . '.csv';
        $temp_filename = $this->file->store($this->storage_path);
        Storage::move($temp_filename, $this->storage_path . '/' . $this->file_name);

        FlagTable::query()->create([
            'id' => 1000,
            'file_name' => $this->file_name,
            'imported' => 0,
            'rows_imported' => 0,
            'total_rows' => 0,
            'properties' => json_encode(['message']),
        ]);
        ImportProducts::dispatch(new ImportProductsService());
        $this->reset('file');
        /*self::getProgress();*/
        return redirect()->to('admin/database-settings');
    }

    public function getProgress()
    {
        $progress = FlagTable::find(1000);
        $this->is_active_progress = FlagTable::where('id', 1000)->exists();

        if (is_null($progress)) {
            return;
        }
        $this->progress = $progress->first();
        $this->percent_done = ($this->progress->total_rows != 0) ? (($this->progress->rows_imported / $this->progress->total_rows) * 100) : 0;
    }

    public function deleteProductImageGarbage()
    {
        $files = \File::allFiles(public_path('storage/products'));
        foreach ($files as $file) {
            if (!Product::where('product_image', 'storage/products/' . $file->getBasename())->exists()) {
                \File::delete($file);
            }
        }
        return;
    }
}
