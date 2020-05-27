<?php

use Illuminate\Database\Seeder;

class CategoryProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('category_product')->insert([
            'group_product_id' => 1,
            'c_name' => 'Iphone',
        ]);
        DB::table('category_product')->insert([
            'group_product_id' => 1,
            'c_name' => 'SamSung',
        ]);
        DB::table('category_product')->insert([
            'group_product_id' => 1,
            'c_name' => 'Nokia',
        ]);
        DB::table('category_product')->insert([
            'group_product_id' => 2,
            'c_name' => 'Ipad',
        ]);
        DB::table('category_product')->insert([
            'group_product_id' => 2,
            'c_name' => 'Lenovo',
        ]);
        DB::table('category_product')->insert([
            'group_product_id' => 2,
            'c_name' => 'SamSung',
        ]);
        DB::table('category_product')->insert([
            'group_product_id' => 3,
            'c_name' => 'Acer',
        ]);
        DB::table('category_product')->insert([
            'group_product_id' => 3,
            'c_name' => 'Lenovo',
        ]);
        DB::table('category_product')->insert([
            'group_product_id' => 3,
            'c_name' => 'Dell',
        ]);
        DB::table('category_product')->insert([
            'group_product_id' => 4,
            'c_name' => 'Phụ kiện điện thoại',
        ]);
        DB::table('category_product')->insert([
            'group_product_id' => 4,
            'c_name' => 'Phụ kiện máy tính',
        ]);
    }
}
