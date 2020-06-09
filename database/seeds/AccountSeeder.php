<?php

use Illuminate\Database\Seeder;

class AccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('accounts')->insert([
            ['username' => 'dangdinhque', 'password' => md5('123456'), 'status' => 1],
            ['username' => 'dangthigiangnhi', 'password' => md5('123456'), 'status' => 0],
            ['username' => 'dangthiquyen', 'password' => md5('123456'), 'status' => 1],
            ['username' => 'trandangkhoa', 'password' => md5('123456'), 'status' => 1],
            ['username' => 'tranhaidang', 'password' => md5('123456'), 'status' => 0],
            ['username' => 'tranthanhdiep', 'password' => md5('123456'), 'status' => 1],
            ['username' => 'letuanthanh', 'password' => md5('123456'), 'status' => 1],
            ['username' => 'ninhhoangcuong', 'password' => md5('123456'), 'status' => 0],
            ['username' => 'tranquanghuy', 'password' => md5('123456'), 'status' => 1],
            ['username' => 'vuvanthinh', 'password' => md5('123456'), 'status' => 1],
            ['username' => 'nguyenngocduy', 'password' => md5('123456'), 'status' => 1],
            ['username' => 'lynatra', 'password' => md5('123456'), 'status' => 0],
            ['username' => 'admin', 'password' => md5('123456'), 'status' => 1],
            ['username' => 'admin2', 'password' => md5('123456'), 'status' => 1],
            ['username' => 'seller', 'password' => md5('123456'), 'status' => 1],
            ['username' => 'seller2', 'password' => md5('123456'), 'status' => 1],
            ['username' => 'storemanager', 'password' => md5('123456'), 'status' => 1],
            ['username' => 'storemanager2', 'password' => md5('123456'), 'status' => 1],
            ['username' => 'seniormanager', 'password' => md5('123456'), 'status' => 1],
            ['username' => 'seller3', 'password' => md5('123456'), 'status' => 1],
            ['username' => 'seller4', 'password' => md5('123456'), 'status' => 1],
            ['username' => 'storemanager3', 'password' => md5('123456'), 'status' => 1]
        ]);
    }
}
