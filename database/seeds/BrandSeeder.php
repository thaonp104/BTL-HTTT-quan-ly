<?php

use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('brands')->insert([
            ['name' => 'iphone'],
            ['name' => 'samsung'],
            ['name' => 'nokia'],
            ['name' => 'ipad'],
            ['name' => 'lenovo'],
            ['name' => 'acer'],
            ['name' => 'dell'],
            ['name' => 'phụ kiện điện thoại'],
            ['name' => 'phụ kiện máy tính']
        ]);
    }
}
