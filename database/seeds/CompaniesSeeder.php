<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class CompaniesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datas = [
            'company_name' => 'Aray Developer',
            'about_company' => 'Aray Developer adalah unit usaha yang bergerak di bidang Software Development, kami berdiri sejak Desember 2016.',
            'address' => 'Kebonsari Indah Blok DD18',
            'city' => 'Jember',
            'maps' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2724.0694570748947!2d7.455080415208266!3d46.94067397914616!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x478e39d0cf20e8d1%3A0x9daac4cd3043d067!2sThunstrasse+50%2C+3005+Bern%2C+Switzerland!5e0!3m2!1sen!2sin!4v1496749852928',
            'facebook_url' => 'www.facebook.com',
            'instagram_url' => 'www.instagram.com',
            'twitter_url' => 'www.twitter.com',
            'email' => 'info@araydeveloper.com',
            'handphone' => '085604946242',
            'created_at' => Carbon::now('Asia/Jakarta')->toDateTimeString(),
            'updated_at' => Carbon::now('Asia/Jakarta')->toDateTimeString()
        ];
        DB::table('companies')->insert($datas);
    }
}
