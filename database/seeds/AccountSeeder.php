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
            ['username' => 'dangdinhque', 'password' =>  bcrypt('password'), 'status' => 1],
            ['username' => 'dangthigiangnhi', 'password' => bcrypt('password'), 'status' => 0],
            ['username' => 'dangthiquyen', 'password' => bcrypt('password'), 'status' => 1],
            ['username' => 'trandangkhoa', 'password' => bcrypt('password'), 'status' => 1],
            ['username' => 'tranhaidang', 'password' => bcrypt('password'), 'status' => 0],
            ['username' => 'tranthanhdiep', 'password' => bcrypt('password'), 'status' => 1],
            ['username' => 'letuanthanh', 'password' => bcrypt('password'), 'status' => 1],
            ['username' => 'ninhhoangcuong', 'password' => bcrypt('password'), 'status' => 0],
            ['username' => 'tranquanghuy', 'password' => bcrypt('password'), 'status' => 1],
            ['username' => 'vuvanthinh', 'password' => bcrypt('password'), 'status' => 1],
            ['username' => 'nguyenngocduy', 'password' => bcrypt('password'), 'status' => 1],
            ['username' => 'lynatra', 'password' => bcrypt('password'), 'status' => 0],
            ['username' => 'admin', 'password' => bcrypt('password'), 'status' => 1],
            ['username' => 'admin2', 'password' => bcrypt('password'), 'status' => 1],
            ['username' => 'seller', 'password' => bcrypt('password'), 'status' => 1],
            ['username' => 'seller2', 'password' => bcrypt('password'), 'status' => 1],
            ['username' => 'storemanager', 'password' => bcrypt('password'), 'status' => 1],
            ['username' => 'storemanager2', 'password' => bcrypt('password'), 'status' => 1],
            ['username' => 'seniormanager', 'password' => bcrypt('password'), 'status' => 1],
            ['username' => 'seller3', 'password' => bcrypt('password'), 'status' => 1],
            ['username' => 'seller4', 'password' => bcrypt('password'), 'status' => 1],
            ['username' => 'storemanager3', 'password' => bcrypt('password'), 'status' => 1],
            ['username' => 'telesale', 'password' => bcrypt('password'), 'status' => 1]
        ]);
    }
}
