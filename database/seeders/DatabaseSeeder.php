<?php

namespace Database\Seeders;

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
        Service::factory(1)->create();
        // User::factory(10)->create();
        // php artisan migrate:fresh seeder
    }
}
