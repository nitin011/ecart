<?php

namespace Database\Seeders;


use App\Models\Page;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DefaultPagesSeeder extends Seeder
{
    /**
     * Run the database seeders.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pages')->truncate();
        foreach (config('default_pages') as $page) {
            Page::query()->create($page);
        }
    }
}
