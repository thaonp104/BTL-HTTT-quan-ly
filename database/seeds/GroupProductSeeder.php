<?php

use Illuminate\Database\Seeder;

class GroupProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('group_product')->insert([
            ['c_name' => 'Điện thoại di động'],
            ['c_name' => 'Máy tính bảng'],
            ['c_name' => 'Laptop'],
            ['c_name' => 'Phụ kiện']
        ]);
    }
}
