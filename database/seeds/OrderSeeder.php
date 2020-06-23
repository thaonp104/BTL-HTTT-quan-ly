<?php

use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('orders')->insert([
            ['date' => '2019-12-11', 'address' => 'số 7, ngõ 10, đường Bà Triệu', 'total' => 148000000, 'status' => 2, 'customersid' =>1, 'branchesid' => 1],
            ['date' => '2020-07-06', 'address' => 'học viện Công nghệ Bưu chính Viễn thông', 'total' => 60000000, 'status' => 2, 'customersid' =>3, 'branchesid' => 2],
            ['date' => '2020-10-07', 'address' => 'học viện Công nghệ Bưu chính Viễn thông', 'total' => 301000000, 'status' => 2, 'customersid' =>4, 'branchesid' => 2],
            ['date' => '2020-10-07', 'address' => 'học viện Công nghệ Bưu chính Viễn thông', 'total' => 301000000, 'status' => 0, 'customersid' =>1, 'branchesid' => null],
            ['date' => '2020-10-07', 'address' => 'học viện Công nghệ Bưu chính Viễn thông', 'total' => 301000000, 'status' => 0, 'customersid' =>1, 'branchesid' => null]
        ]);
    }
}
