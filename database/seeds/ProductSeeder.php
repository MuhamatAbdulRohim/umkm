<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datas = [
            [
                'product_name' => 'Jaket Bomber',
                'unit_price' => 100000,
                'description' => 'Jaket Ini tebuat dari Kai Katun Asli',
                'image_url' => 'pd_1.jpg',
                'created_at' => Carbon::now('Asia/Jakarta')->toDateTimeString(),
                'updated_at' => Carbon::now('Asia/Jakarta')->toDateTimeString()
            ],
            [
                'product_name' => 'Hijab',
                'unit_price' => 50000,
                'description' => 'Hijab Ini tebuat dari Kai Katun Asli',
                'image_url' => 'pd_2.jpg',
                'created_at' => Carbon::now('Asia/Jakarta')->toDateTimeString(),
                'updated_at' => Carbon::now('Asia/Jakarta')->toDateTimeString()
            ],
            [
                'product_name' => 'Kaos',
                'unit_price' => 70000,
                'description' => 'Kaos Ini tebuat dari Kai Katun Asli',
                'image_url' => 'pd_3.jpg',
                'created_at' => Carbon::now('Asia/Jakarta')->toDateTimeString(),
                'updated_at' => Carbon::now('Asia/Jakarta')->toDateTimeString()
            ]
        ];
        DB::table('products')->insert($datas);
    }
}
