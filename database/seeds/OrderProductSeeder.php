<?php

use Illuminate\Database\Seeder;

class OrderProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('order_product')->insert([
            ['order_id' => 1, 'customer_order_id' => 0, 'money' => 22000000, 'c_date' => '2018-08-13 19:45:04', 'customer_id' => 1, 'status' => 1],
            ['order_id' => 2, 'customer_order_id' => 0, 'money' => 12000000, 'c_date' => '2018-08-13 20:22:44', 'customer_id' => 1, 'status' => 1],
            ['order_id' => 3, 'customer_order_id' => 1, 'money' => 12000000, 'c_date' => '2018-08-13 20:30:51', 'customer_id' => 0, 'status' => 0],
            ['order_id' => 4, 'customer_order_id' => 2, 'money' => 11600000, 'c_date' => '2018-08-14 09:18:50', 'customer_id' => 0, 'status' => 0],
            ['order_id' => 5, 'customer_order_id' => 0, 'money' => 58800000, 'c_date' => '2018-08-14 09:24:47', 'customer_id' => 2, 'status' => 1],
            ['order_id' => 6, 'customer_order_id' => 3, 'money' => 4200000, 'c_date' => '2018-08-16 07:31:18', 'customer_id' =>0, 'status' => 0],
            ['order_id' => 7, 'customer_order_id' => 0, 'money' => 9200000, 'c_date' => '2018-08-16 08:13:00', 'customer_id' => 1, 'status' => 1],
            ['order_id' => 8, 'customer_order_id' => 4, 'money' => 9200000, 'c_date' => '2018-08-16 09:30:09', 'customer_id' => 0, 'status' => 0]
        ]);

    }
}
