<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(BannersSeeder::class);
        $this->call(CompaniesSeeder::class);
        $this->call(ServiceSeeder::class);
    }
}
