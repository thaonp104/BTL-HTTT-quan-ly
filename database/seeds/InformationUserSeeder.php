<?php

use Illuminate\Database\Seeder;

class InformationUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('information_user')->insert(
            ['Id' => 1, 'c_name' => 'Lê xuân hai@1', 'c_sdt' => 1294310000, 'c_adress' => 'Hà đông', 'c_email' => 'lehai@mail.com']
        );
    }
}
