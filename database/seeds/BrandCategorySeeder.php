<?php

use Illuminate\Database\Seeder;

class BrandCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('brand_category')->insert([
            ['brandsid' => 1, 'categoriesid' => 1],
            ['brandsid' => 2, 'categoriesid' => 1],
            ['brandsid' => 2, 'categoriesid' => 2],
            ['brandsid' => 3, 'categoriesid' => 1],
            ['brandsid' => 4, 'categoriesid' => 2],
            ['brandsid' => 5, 'categoriesid' => 2],
            ['brandsid' => 5, 'categoriesid' => 3],
            ['brandsid' => 6, 'categoriesid' => 3],
            ['brandsid' => 7, 'categoriesid' => 3],
            ['brandsid' => 8, 'categoriesid' => 4],
            ['brandsid' => 9, 'categoriesid' => 4]
        ]);
    }
}
