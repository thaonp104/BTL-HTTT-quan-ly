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
            ['quantity' => 2, 'product_branchid' => 1, 'ordersid' => 1],
            ['quantity' => 5, 'product_branchid' => 6, 'ordersid' => 1],
            ['quantity' => 5, 'product_branchid' => 11, 'ordersid' => 1],
            ['quantity' => 1, 'product_branchid' => 12, 'ordersid' => 2],
            ['quantity' => 1, 'product_branchid' => 14, 'ordersid' => 2],
            ['quantity' => 1, 'product_branchid' => 16, 'ordersid' => 2],
            ['quantity' => 1, 'product_branchid' => 19, 'ordersid' => 2],
            ['quantity' => 2, 'product_branchid' => 2, 'ordersid' => 3],
            ['quantity' => 2, 'product_branchid' => 5, 'ordersid' => 3],
            ['quantity' => 2, 'product_branchid' => 7, 'ordersid' => 3]
        ]);
    }
}
