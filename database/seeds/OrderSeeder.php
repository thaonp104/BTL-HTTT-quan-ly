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
            ['method' => 'COD', 'atmsid' => null, 'atm_type' => null ,'date' => '2019-12-11', 'address' => 'số 7, ngõ 10, đường Bà Triệu', 'fullname' => 'Nguyen van A', 'phone' => '033123123', 'total' => 148000000, 'status' => 2, 'customersid' =>1, 'branchesid' => 1],
            ['method' => 'QRPAY', 'atmsid' => null, 'atm_type' => null ,'date' => '2020-07-06', 'address' => 'học viện Công nghệ Bưu chính Viễn thông', 'fullname' => 'Nguyen van C', 'phone' => '033123124', 'total' => 60000000, 'status' => 2, 'customersid' =>3, 'branchesid' => 2],
            ['method' => 'ATM', 'atmsid' => 1, 'atm_type' => 'cash' ,'date' => '2020-10-07', 'address' => 'học viện Công nghệ Bưu chính Viễn thông', 'fullname' => 'Nguyen van B', 'phone' => '033123125', 'total' => 301000000, 'status' => 2, 'customersid' =>4, 'branchesid' => 2],
            ['method' => 'COD', 'atmsid' => null, 'atm_type' => null,'date' => '2020-10-07', 'address' => 'học viện Công nghệ Bưu chính Viễn thông', 'fullname' => 'Nguyen van D', 'phone' => '033123126', 'total' => 301000000, 'status' => 0, 'customersid' =>1, 'branchesid' => null],
            ['method' => 'COD', 'atmsid' => null, 'atm_type' => null, 'date' => '2020-10-07', 'address' => 'học viện Công nghệ Bưu chính Viễn thông', 'fullname' => 'Nguyen van E', 'phone' => '033123127', 'total' => 301000000, 'status' => 0, 'customersid' =>1, 'branchesid' => null]
        ]);
    }
}
