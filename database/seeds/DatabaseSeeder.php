<?php

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
        //$this->call(documents::class);
        //$this->call(userTableSeeder::class);
        $this->call(service_types::class);
    }
}
