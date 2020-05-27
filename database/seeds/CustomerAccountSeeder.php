<?php

use Illuminate\Database\Seeder;

class CustomerAccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('customer_accounts')->insert([
            ['customer_id' => 1, 'c_email' => 'vietanh', 'c_password' => '202cb962ac59075b964b07152d234b70'],
            ['customer_id' => 2, 'c_email' => 'ngoclan', 'c_password' => '202cb962ac59075b964b07152d234b70']
        ]);
    }
}
