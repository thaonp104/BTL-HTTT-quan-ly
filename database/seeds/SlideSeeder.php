<?php

use Illuminate\Database\Seeder;

class SlideSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('slide')->insert([
            ['c_name' => 'slide1', 'c_url' => 'slide1.jpg'],
            ['c_name' => 'slide2', 'c_url' => 'slide2.jpg'],
            ['c_name' => 'slide3', 'c_url' => 'lide3.jpg']
        ]);
    }
}
