<?php

namespace Database\Seeders;

use App\Models\Configuration;
use Illuminate\Database\Seeder;

class ConfigurationTableSeeder extends Seeder
{
    public function run()
    {
        Configuration::query()->truncate();
        foreach (config('default_configurations') as $key => $setting) {
            $setting['key'] = $key;
            Configuration::query()->create($setting);
        }
    }
}
