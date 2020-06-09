<?php

use Illuminate\Database\Seeder;

class BillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bills')->insert([
            ['employeesid' => 3, 'ordersid' => 1],
            ['employeesid' => 4, 'ordersid' => 2],
            ['employeesid' => 3, 'ordersid' => 3]
        ]);
    }
}
