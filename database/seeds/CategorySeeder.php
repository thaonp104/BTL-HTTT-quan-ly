<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            ['name' => 'Điện thoại di động'],
            ['name' => 'Máy tính bảng'],
            ['name' => 'Laptop'],
            ['name' => 'Phụ kiện ']
        ]);
    }
}
