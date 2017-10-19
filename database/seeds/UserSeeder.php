<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
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
                'id' => 1,
                'name' => 'Abdul Rohim',
                'email' => 'abdulrohim@araydeveloper.com',
                'password' => 'abdulrohim',
                'created_at' => Carbon::now('Asia/Jakarta')->toDateTimeString(),
                'updated_at' => Carbon::now('Asia/Jakarta')->toDateTimeString()
            ],
            [
                'id' => 2,
                'name' => 'Angga Dwi Hariadi',
                'email' => 'angga@araydeveloper.com',
                'password' => 'anggadwihariadi',
                'created_at' => Carbon::now('Asia/Jakarta')->toDateTimeString(),
                'updated_at' => Carbon::now('Asia/Jakarta')->toDateTimeString()
            ],
        ];
        DB::table('users')->insert($datas);
    }
}
