<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user')->insert([
            ['Username' => 'test1', 'Password' => '202cb962ac59075b964b07152d234b70'],
            ['Username' => 'test2', 'Password' => '202cb962ac59075b964b07152d234b70']
        ]);
    }
}
