<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeders.
     *
     * @return void
     */
    public function run()
    {
        foreach (config('categories') as $category) {
            if (\App\Models\Category::find($category['cat_id']) == null) {
                $category['image'] = 'images/default/category-dummy.png';
                $category['level'] = 0;
                DB::table('categories')->insert($category);
            }
        }
    }
}
