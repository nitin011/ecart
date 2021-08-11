<?php

namespace App\Console\Commands;

use App\Models\Category;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;

class importCategoriess extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'import:categories';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Import Categories from external sources for scrapping purpose.';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        Category::query()->truncate();
        $this->info('==============HEK=================');
        $this->info('| Category Data Insertion Started|');
        $this->info('==================================');
        $bar = $this->output->createProgressBar(count(config('categories')));
        $bar->start();

        foreach (config('categories') as $category) {
            try {
                Category::query()->updateOrCreate([
                    'cat_id' => $category['id']
                ], [
                    'cat_id' => $category['id'],
                    'parent' => $category['parentId'],
                    'title' => str_replace('Sainsbury\'s', '', $category['name']),
                    'slug' => Str::slug($category['name']),
                    'image' => 'images/default/category-dummy.png',
                    'level' => $category['parentId'] == 0 ? 0 : 1,
                    'description' => $category['name'],
                    'status' => 1
                ]);
            } catch (\Exception $e) {
                \Log::error('CATEGORY IMPORT ERROR: ' . $e->getMessage() . ' LINE NO::' . $e->getLine() . '::' . $category);
            }
            $bar->advance();
        }
        $bar->finish();
        $this->info('All Categories Inserted successfully.');
        return 0;
    }
}
