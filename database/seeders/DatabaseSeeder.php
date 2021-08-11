<?php

namespace Database\Seeders;

use Database\Seeders\ConfigurationTableSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(CategoryTableSeeder::class);
        $this->call(ConfigurationTableSeeder::class);
        $this->call(StatusSeeder::class);
        $this->call(EmailTemplateSeeder::class);
        $this->call(DefaultPagesSeeder::class);
    }
}
