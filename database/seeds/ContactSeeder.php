<?php

use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contacts')->insert([
            ['c_name' => 'Hạ ngọc lan', 'c_adress' => 'Thanh hà hải dương', 'c_email' => 'nl@mail.com', 'c_phone' => 964161702, 'c_title' => 'Nhân viên thái độ không tốt', 'c_content' => 'Helo bale', 'c_time' => '2018-07-20 05:20:05'],
            ['c_name' => 'Hoàng khánh linh', 'c_adress' => 'Thôn 6 tân khang', 'c_email' => 'hanhlinhh@mail.com', 'c_phone' => 123423187, 'c_title' => 'Sản phẩm tốt', 'c_content' => 'Em là linh', 'c_time' => '2018-07-20 10:22:07'],
            ['c_name' => 'Lê Hai', 'c_adress' => 'cuối ngõ 89 đường phùng khoang trung văn từ liêm hà nội', 'c_email' => 'admin@mail.com', 'c_phone' => 964161702, 'c_title' => 'Nhận sai sản phẩm', 'c_content' => 'ádasd', 'c_time' => '2018-08-10 10:51:42'],
            ['c_name' => 'lê hai', 'c_adress' => 'cuối ngõ 89 đường phùng khoang trung văn từ liêm hà nội', 'c_email' => 'admin@mail.com', 'c_phone' => 964161702, 'c_title' => 'Nhận sai sản phẩm', 'c_content' => 'nhận sai sản phẩm', 'c_time' => '2018-08-12 07:38:12'],
            ['c_name' => 'trịnh thị A', 'c_adress' => 'Hà Nội', 'c_email' => 'test1@gmail.com', 'c_phone' => 964161702, 'c_title' => 'Nhận sai sản phẩm', 'c_content' => 'Nhận sai', 'c_time' => '2018-08-12 08:30:04'],
            ['c_name' => 'Lê Hai', 'c_adress' => 'Hà Nội', 'c_email' => 'admin@mail.com', 'c_phone' => 964161702, 'c_title' => 'Nhận sai sản phẩm', 'c_content' => 'Nhận sai', 'c_time' => '2018-08-12 08:30:04']
        ]);
    }
}
