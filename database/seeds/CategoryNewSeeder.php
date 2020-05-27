<?php

use Illuminate\Database\Seeder;

class CategoryNewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('category_news')->insert([
            'c_name' => 'Tin Công Nghệ'
        ]);
        DB::table('category_news')->insert([
            'c_name' => 'Tin thế giới'
        ]);
    }
}
