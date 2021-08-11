<?php

namespace App\Console\Commands;

use App\Repositories\ImageRepository;
use Illuminate\Console\Command;
use App\Imports\ImportProduct as ProductImportExcel;

class ImportProducts extends Command
{
    protected $signature = 'import:products';

    protected $description = 'HEK Product importer from excel file.';

    public function handle()
    {
        $file_url = 'public/storage/queue_file/excel_file.xlsx';
        if (!file_exists($file_url)) {
            $this->alert('File Not Exists!');
            return false;
        }
        $this->output->title('Starting import');
        (new ProductImportExcel)->withOutput($this->output)->import($file_url);
        $fileService = new ImageRepository();
        $fileService->removeImage('excel_file.xlsx', 'app/public/queue_file/');
        $this->info('excel_file.xlsx Deleted Successfully.');
        $this->output->success('Import successful');
    }
}
