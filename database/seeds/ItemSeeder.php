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
            ['quantity' => 5, 'product_branchid' => 3, 'ordersid' => 1],
            ['quantity' => 5, 'product_branchid' => 5, 'ordersid' => 1],
            ['quantity' => 1, 'product_branchid' => 5, 'ordersid' => 2],
            ['quantity' => 1, 'product_branchid' => 6, 'ordersid' => 2],
            ['quantity' => 1, 'product_branchid' => 7, 'ordersid' => 2],
            ['quantity' => 1, 'product_branchid' => 8, 'ordersid' => 2],
            ['quantity' => 2, 'product_branchid' => 1, 'ordersid' => 3],
            ['quantity' => 2, 'product_branchid' => 2, 'ordersid' => 3],
            ['quantity' => 2, 'product_branchid' => 3, 'ordersid' => 3]
        ]);
    }
}
