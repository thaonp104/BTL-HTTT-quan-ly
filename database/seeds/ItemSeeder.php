<?php

use Illuminate\Database\Seeder;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('items')->insert([
            ['quantity' => 2, 'product_branchid' => 1 , 'productsid' => null, 'ordersid' => 1],
            ['quantity' => 5, 'product_branchid' => 6, 'productsid' => null, 'ordersid' => 1],
            ['quantity' => 5, 'product_branchid' => 11, 'productsid' => null, 'ordersid' => 1],
            ['quantity' => 1, 'product_branchid' => 12,  'productsid' => null,'ordersid' => 2],
            ['quantity' => 1, 'product_branchid' => 14, 'productsid' => null, 'ordersid' => 2],
            ['quantity' => 1, 'product_branchid' => 16, 'productsid' => null, 'ordersid' => 2],
            ['quantity' => 1, 'product_branchid' => 19, 'productsid' => null, 'ordersid' => 2],
            ['quantity' => 2, 'product_branchid' => 2,  'productsid' => null,'ordersid' => 3],
            ['quantity' => 2, 'product_branchid' => 5, 'productsid' => null, 'ordersid' => 3],
            ['quantity' => 2, 'product_branchid' => 7, 'productsid' => null, 'ordersid' => 3],
            ['quantity' => 2, 'product_branchid' => null, 'productsid' => 1, 'ordersid' => 4],
            ['quantity' => 2, 'product_branchid' => null, 'productsid' => 2, 'ordersid' => 4],
            ['quantity' => 2, 'product_branchid' => null, 'productsid' => 3, 'ordersid' => 4],
            ['quantity' => 2, 'product_branchid' => null, 'productsid' => 1, 'ordersid' => 5],
            ['quantity' => 2, 'product_branchid' => null, 'productsid' => 2, 'ordersid' => 5],
            ['quantity' => 2, 'product_branchid' => null, 'productsid' => 3, 'ordersid' => 5]
        ]);
    }
}
