<?php

use Illuminate\Database\Seeder;

class OrderDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('order_detail')->insert([
            ['order_id' => 1, 'product_id' => 37, 'number' => 2],
            ['order_id' => 2, 'product_id' => 38, 'number' => 1],
            ['order_id' => 3, 'product_id' => 38, 'number' => 1],
            ['order_id' => 4, 'product_id' => 47, 'number' => 1],
            ['order_id' => 4, 'product_id' => 44, 'number' => 1],
            ['order_id' => 5, 'product_id' => 40, 'number' => 1],
            ['order_id' => 5, 'product_id' => 43, 'number' => 1],
            ['order_id' => 6, 'product_id' => 47, 'number' => 1],
            ['order_id' => 7, 'product_id' => 47, 'number' => 1],
            ['order_id' => 7, 'product_id' => 46, 'number' => 1],
            ['order_id' => 8, 'product_id' => 46, 'number' => 1],
            ['order_id' => 8, 'product_id' => 47, 'number' => 1]
        ]);
    }
}
