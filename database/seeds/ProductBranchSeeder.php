<?php

use Illuminate\Database\Seeder;

class ProductBranchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_branch')->insert([
//            1-10
            ['quantity' => 50, 'productsid' => 1, 'branchesid' => 1],
            ['quantity' => 30, 'productsid' => 1, 'branchesid' => 2],
            ['quantity' => 20, 'productsid' => 1, 'branchesid' => 3],
            ['quantity' => 50, 'productsid' => 2, 'branchesid' => 1],
            ['quantity' => 50, 'productsid' => 2, 'branchesid' => 2],
            ['quantity' => 100, 'productsid' => 3, 'branchesid' => 1],
            ['quantity' => 50, 'productsid' => 3, 'branchesid' => 2],
            ['quantity' => 50, 'productsid' => 3, 'branchesid' => 3],
            ['quantity' => 100, 'productsid' => 4, 'branchesid' => 2],
            ['quantity' => 100, 'productsid' => 4, 'branchesid' => 3],

//            11-20
            ['quantity' => 100, 'productsid' => 5, 'branchesid' => 1],
            ['quantity' => 10, 'productsid' => 5, 'branchesid' => 2],
            ['quantity' => 90, 'productsid' => 5, 'branchesid' => 3],
            ['quantity' => 100, 'productsid' => 6, 'branchesid' => 2],
            ['quantity' => 20, 'productsid' => 7, 'branchesid' => 1],
            ['quantity' => 50, 'productsid' => 7, 'branchesid' => 2],
            ['quantity' => 30, 'productsid' => 7, 'branchesid' => 3],
            ['quantity' => 50, 'productsid' => 8, 'branchesid' => 1],
            ['quantity' => 50, 'productsid' => 8, 'branchesid' => 2],
            ['quantity' => 20, 'productsid' => 9, 'branchesid' => 1],

//            21-30
            ['quantity' => 20, 'productsid' => 9, 'branchesid' => 2],
            ['quantity' => 60, 'productsid' => 9, 'branchesid' => 3],
            ['quantity' => 50, 'productsid' => 10, 'branchesid' => 2],
            ['quantity' => 150, 'productsid' => 10, 'branchesid' => 3],
            ['quantity' => 50, 'productsid' => 11, 'branchesid' => 1],
            ['quantity' => 100, 'productsid' => 11, 'branchesid' => 2],
            ['quantity' => 50, 'productsid' => 11, 'branchesid' => 3],
            ['quantity' => 100, 'productsid' => 12, 'branchesid' => 2],
            ['quantity' => 100, 'productsid' => 12, 'branchesid' => 3],
            ['quantity' => 100, 'productsid' => 13, 'branchesid' => 1],

            //            31-40
            ['quantity' => 50, 'productsid' => 13, 'branchesid' => 2],
            ['quantity' => 50, 'productsid' => 13, 'branchesid' => 3],
            ['quantity' => 100, 'productsid' => 14, 'branchesid' => 1],
            ['quantity' => 50, 'productsid' => 14, 'branchesid' => 2],
            ['quantity' => 50, 'productsid' => 14, 'branchesid' => 3],
            ['quantity' => 100, 'productsid' => 15, 'branchesid' => 1],
            ['quantity' => 50, 'productsid' => 15, 'branchesid' => 2],
            ['quantity' => 50, 'productsid' => 15, 'branchesid' => 3],
            ['quantity' => 50, 'productsid' => 16, 'branchesid' => 1],
            ['quantity' => 50, 'productsid' => 16, 'branchesid' => 2],

            //            41-50
            ['quantity' => 150, 'productsid' => 16, 'branchesid' => 3],
            ['quantity' => 50, 'productsid' => 17, 'branchesid' => 1],
            ['quantity' => 50, 'productsid' => 17, 'branchesid' => 2],
            ['quantity' => 150, 'productsid' => 17, 'branchesid' => 3],
            ['quantity' => 50, 'productsid' => 18, 'branchesid' => 1],
            ['quantity' => 50, 'productsid' => 18, 'branchesid' => 2],
            ['quantity' => 150, 'productsid' => 18, 'branchesid' => 3],
            ['quantity' => 100, 'productsid' => 19, 'branchesid' => 1],
            ['quantity' => 70, 'productsid' => 19, 'branchesid' => 2],
            ['quantity' => 30, 'productsid' => 19, 'branchesid' => 3],

            //            51-60
            ['quantity' => 100, 'productsid' => 20, 'branchesid' => 1],
            ['quantity' => 70, 'productsid' => 20, 'branchesid' => 2],
            ['quantity' => 30, 'productsid' => 20, 'branchesid' => 3],
            ['quantity' => 100, 'productsid' => 21, 'branchesid' => 1],
            ['quantity' => 70, 'productsid' => 21, 'branchesid' => 2],
            ['quantity' => 30, 'productsid' => 21, 'branchesid' => 3],
            ['quantity' => 20, 'productsid' => 22, 'branchesid' => 1],
            ['quantity' => 50, 'productsid' => 22, 'branchesid' => 2],
            ['quantity' => 150, 'productsid' => 22, 'branchesid' => 3],
            ['quantity' => 20, 'productsid' => 23, 'branchesid' => 1],

            //            61-70
            ['quantity' => 50, 'productsid' => 23, 'branchesid' => 2],
            ['quantity' => 150, 'productsid' => 23, 'branchesid' => 3],
            ['quantity' => 20, 'productsid' => 24, 'branchesid' => 1],
            ['quantity' => 50, 'productsid' => 24, 'branchesid' => 2],
            ['quantity' => 150, 'productsid' => 24, 'branchesid' => 3],
            ['quantity' => 100, 'productsid' => 25, 'branchesid' => 1],
            ['quantity' => 100, 'productsid' => 25, 'branchesid' => 2],
            ['quantity' => 100, 'productsid' => 26, 'branchesid' => 1],
            ['quantity' => 100, 'productsid' => 26, 'branchesid' => 3],
            ['quantity' => 100, 'productsid' => 27, 'branchesid' => 2],

            //            71-80
            ['quantity' => 100, 'productsid' => 27, 'branchesid' => 3],
            ['quantity' => 50, 'productsid' => 28, 'branchesid' => 1],
            ['quantity' => 50, 'productsid' => 28, 'branchesid' => 2],
            ['quantity' => 100, 'productsid' => 28, 'branchesid' => 3],
            ['quantity' => 50, 'productsid' => 29, 'branchesid' => 1],
            ['quantity' => 50, 'productsid' => 29, 'branchesid' => 2],
            ['quantity' => 100, 'productsid' => 29, 'branchesid' => 3],
            ['quantity' => 50, 'productsid' => 30, 'branchesid' => 1],
            ['quantity' => 50, 'productsid' => 30, 'branchesid' => 2],
            ['quantity' => 50, 'productsid' => 31, 'branchesid' => 1],

            //            81-90
            ['quantity' => 50, 'productsid' => 31, 'branchesid' => 2],
            ['quantity' => 100, 'productsid' => 31, 'branchesid' => 3],
            ['quantity' => 30, 'productsid' => 32, 'branchesid' => 1],
            ['quantity' => 20, 'productsid' => 32, 'branchesid' => 2],
            ['quantity' => 50, 'productsid' => 32, 'branchesid' => 3],
            ['quantity' => 30, 'productsid' => 33, 'branchesid' => 1],
            ['quantity' => 20, 'productsid' => 33, 'branchesid' => 2],
            ['quantity' => 50, 'productsid' => 33, 'branchesid' => 3],
            ['quantity' => 50, 'productsid' => 34, 'branchesid' => 1],
            ['quantity' => 150, 'productsid' => 34, 'branchesid' => 2],

            //            91-100
            ['quantity' => 50, 'productsid' => 34, 'branchesid' => 3],
            ['quantity' => 50, 'productsid' => 35, 'branchesid' => 1],
            ['quantity' => 150, 'productsid' => 35, 'branchesid' => 2],
            ['quantity' => 50, 'productsid' => 35, 'branchesid' => 3],
            ['quantity' => 50, 'productsid' => 36, 'branchesid' => 1],
            ['quantity' => 150, 'productsid' => 36, 'branchesid' => 2],
            ['quantity' => 50, 'productsid' => 36, 'branchesid' => 3],
            ['quantity' => 50, 'productsid' => 37, 'branchesid' => 1],
            ['quantity' => 150, 'productsid' => 37, 'branchesid' => 2],
            ['quantity' => 50, 'productsid' => 37, 'branchesid' => 3],

            //            101-103
            ['quantity' => 50, 'productsid' => 38, 'branchesid' => 1],
            ['quantity' => 150, 'productsid' => 38, 'branchesid' => 2],
            ['quantity' => 50, 'productsid' => 38, 'branchesid' => 3]
        ]);
    }
}
