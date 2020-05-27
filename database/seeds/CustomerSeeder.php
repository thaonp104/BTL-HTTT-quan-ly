<?php

use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('customers')->insert([
            ['c_name' => 'Lê việt anh', 'c_birthday' => '1996-01-12', 'c_adress' => 'Số nhà 20 ngõ 17 đường Nguyễn Trãi', 'c_phone' => 935212685],
            ['c_name' => 'hạ ngọc lan', 'c_birthday' => '1997-01-12', 'c_adress' => 'Hà nội', 'c_phone' => 2147483647]
        ]);
    }
}
