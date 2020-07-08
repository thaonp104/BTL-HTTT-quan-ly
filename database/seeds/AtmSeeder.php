<?php

use Illuminate\Database\Seeder;

class AtmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('atms')->insert([
            ['name' => 'VIETCOMBANK', 'image' =>  'vietcombank_logo.png'],
            ['name' => 'VIETINBANK', 'image' =>  'vietinbank_logo.png'],
            ['name' => 'BIDV', 'image' =>  'bidv_logo.png'],
            ['name' => 'AGRIBANK', 'image' =>  'agribank_logo.png'],

            ['name' => 'SACOMBANK', 'image' =>  'sacombank_logo.png'],
            ['name' => 'TECHCOMBANK', 'image' =>  'techcombank_logo.png'],
            ['name' => 'ACB', 'image' =>  'acb_logo.png'],
            ['name' => 'VPBANK', 'image' =>  'vpbank_logo.png'],

            ['name' => 'DONGABANK', 'image' =>  'dongabank_logo.png'],
            ['name' => 'EXIMBANK', 'image' =>  'eximbank_logo.png'],
            ['name' => 'TPBANK', 'image' =>  'tpbank_logo.png'],
            ['name' => 'NCB', 'image' =>  'ncb_logo.png'],

            ['name' => 'OJB', 'image' =>  'oceanbank_logo.png'],
            ['name' => 'MSBANK', 'image' =>  'msbank_logo.png'],
            ['name' => 'HDBANK', 'image' =>  'hdbank_logo.png'],
            ['name' => 'NAMABANK', 'image' =>  'namabank_logo.png'],

            ['name' => 'OCB', 'image' =>  'ocb_logo.png'],
            ['name' => 'SCB', 'image' =>  'scb_logo.png'],
            ['name' => 'IVB', 'image' =>  'ivb_logo.png'],
            ['name' => 'ABBANK', 'image' =>  'abb_logo.png'],

            ['name' => 'MBBANK', 'image' =>  'mbbank_logo.png'],
            ['name' => 'SHB', 'image' =>  'shb_logo.png'],
            ['name' => 'BACABANK', 'image' =>  'bacabank_logo.png'],
            ['name' => 'PVCOMBANK', 'image' =>  'pvcombank_logo.png'],

            ['name' => 'SAIGONBANK', 'image' =>  'saigonbank_logo.png'],
        ]);
    }
}
