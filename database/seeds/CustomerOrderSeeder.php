<?php

use Illuminate\Database\Seeder;

class CustomerOrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('customer_order')->insert([
            ['c_name' => 'Hoàng Khánh Linh', 'c_phone' => 1252371933, 'c_adress' => 'Tân Khang nông cống thanh hóa'],
            ['c_name' => 'lê xuân haii', 'c_phone' => 964171903, 'c_adress' => 'Thanh hóa'],
            ['c_name' => 'lê xuân haii', 'c_phone' => 82612723, 'c_adress' => 'Hà nội'],
            ['c_name' => 'lê xuân haii', 'c_phone' => 964161702, 'c_adress' => 'Thanh hóa']
        ]);
    }
}
