<?php

namespace App\Jobs;

use App\Models\FlagTable;
use App\Services\ImportProductsService;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class ImportProducts implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $importProductsService;

    /**
     * Create a new job instance.
     * @param ImportProductsService $importProductsService
     */
    public function __construct(ImportProductsService $importProductsService)
    {
        $this->importProductsService = $importProductsService;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {

        try {
            $this->importProductsService->upload();
        } catch (\Exception $e) {
            FlagTable::create([
                'file_name' => 'error_log',
                'imported' => 0,
                'rows_imported' => 0,
                'total_rows' => 0,
                'properties' => json_encode([$e->getMessage()]),
            ]);
        }
    }
}
