<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdvSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('advs')->insert([
            'c_name' => 'nokia',
            'c_img' => 'bannernokia.jpg',
            'c_url' => 'https://www.thegioididong.com/'
        ]);
        DB::table('advs')->insert([
            'c_name' => 'sony',
            'c_img' => 'bannersony.jpg',
            'c_url' => 'https://www.thegioididong.com/'
        ]);
    }
}
