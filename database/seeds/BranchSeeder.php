<?php

use Illuminate\Database\Seeder;

class BranchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('branches')->insert([
            ['name' => 'Chi nhánh Đống Đa', 'address' => '402 Xã Đàn - Đống Đa', 'phone' => '0982715444'],
            ['name' => 'Chi nhánh Ba Đình', 'address' => ' 48 Vạn Bảo - Ba Đình', 'phone' => '0982715555'],
            ['name' => 'Chi nhánh Cầu Giấy', 'address' => ' 481 Hoàng Quốc Việt, Cầu Giấy', 'phone' => '0982715666']
        ]);
    }
}
