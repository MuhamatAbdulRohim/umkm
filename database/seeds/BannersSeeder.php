<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class BannersSeeder extends Seeder
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
                'title' => 'Flat UI',
                'sub_title' => 'Flat Design for Your User Interface',
                'description' => 'Flat Design',
                'image_url' => 'bn-1.jpg',
                'created_at' => Carbon::now('Asia/Jakarta')->toDateTimeString(),
                'updated_at' => Carbon::now('Asia/Jakarta')->toDateTimeString()
            ],
            [
                'title' => 'Responsive Style',
                'sub_title' => 'Make Your Website Responsive',
                'description' => 'Responsive Website',
                'image_url' => 'bn-2.jpg',
                'created_at' => Carbon::now('Asia/Jakarta')->toDateTimeString(),
                'updated_at' => Carbon::now('Asia/Jakarta')->toDateTimeString()
            ],
            [
                'title' => 'Mobile App',
                'sub_title' => 'Make Your Own App',
                'description' => 'Mobile App',
                'image_url' => 'bn-3.jpg',
                'created_at' => Carbon::now('Asia/Jakarta')->toDateTimeString(),
                'updated_at' => Carbon::now('Asia/Jakarta')->toDateTimeString()
            ]
        ];
        DB::table('banners')->insert($datas);
    }
}
