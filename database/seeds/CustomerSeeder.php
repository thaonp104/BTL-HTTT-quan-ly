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
            ['fullname' => 'Đặng Đình Quế', 'address' => 'Hồng Hưng-Gia Lộc-Hải Dương', 'phone' => '0355199366', 'birthday' => '1967-02-12', 'accountsid' => 1],
            ['fullname' => 'Đặng Thị Giang Nhi', 'address' => 'Cát Tiền-Gia Lộc- Hải Dương', 'phone' => '0355199377', 'birthday' => '2007-02-09', 'accountsid' => 2],
            ['fullname' => 'Đặng Thị Quyên', 'address' => 'Thị trấn Gia Lộc-Gia Lộc- Hải Dương', 'phone' => '0355199388', 'birthday' => '1993-01-08', 'accountsid' => 3],
            ['fullname' => 'Trần Đăng Khoa', 'address' => 'Yên Bái', 'phone' => '0355199399', 'birthday' => '1998-12-10', 'accountsid' => 4],
            ['fullname' => 'Trần Hải Đăng', 'address' => 'Hà Nhân- Hà Nam', 'phone' => '0355199400', 'birthday' => '1996-02-09', 'accountsid' => 5],
            ['fullname' => 'Trần Thanh Diệp', 'address' => 'Bắc Kiến Xương-Thái Bình', 'phone' => '0355199411', 'birthday' => '1998-02-07', 'accountsid' => 6],
            ['fullname' => 'Lê Tuấn Thanh', 'address' => 'Thái Bình', 'phone' => '0355199422', 'birthday' => '1998-09-06', 'accountsid' => 7],
            ['fullname' => 'Ngô Thùy Vân', 'address' => 'Bắc Giang', 'phone' => '0353489433', 'birthday' => '1998-02-01', 'accountsid' => 8],
            ['fullname' => 'Trần Quang Huy', 'address' => 'Vĩnh Phúc', 'phone' => '0353489911', 'birthday' => '1998-02-04', 'accountsid' => 9],
            ['fullname' => 'Vũ Văn Thịnh', 'address' => 'Hà Nội', 'phone' => '0353489900', 'birthday' => '1998-11-01', 'accountsid' => 10],
            ['fullname' => 'Nguyễn Ngọc Duy', 'address' => 'Ninh Bình', 'phone' => '0353488899', 'birthday' => '1998-01-09', 'accountsid' => 11],
            ['fullname' => 'Lý Na Tra', 'address' => 'Thống Kênh-Gia Lộc-Hải Dương', 'phone' => '0982715458', 'birthday' => '1998-01-02', 'accountsid' => 12]
        ]);
    }
}
