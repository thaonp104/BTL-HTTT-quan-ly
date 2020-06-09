<?php

use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('employees')->insert([
            ['fullname' => 'Đặng Quế Anh', 'address' => 'Hồng Hưng- Gia Lộc- Hải Dương', 'phone' => '0353489966', 'birthday' => '1998-12-11', 'role' => 'admin', 'salary' => 10000000, 'branchesid' => NULL, 'accountsid' =>13],
            ['fullname' => 'Trần Thị lanh', 'address' => 'Vũ thư- Thái Bình', 'phone' => '0363489966', 'birthday' => '1998-10-19', 'role' => 'admin', 'salary' => 11000000,'branchesid' => NULL, 'accountsid' =>14],
            ['fullname' => 'Trần Thanh Thủy', 'address' => 'Kiến Xương- Thái Bình', 'phone' => '0373489966', 'birthday' => '1998-07-20', 'role' => 'seller', 'salary' => 5000000, 'branchesid' => 1, 'accountsid' =>15],
            ['fullname' => 'Trịnh Hoài Nam', 'address' => 'Hoàng Mai- Hà Nội', 'phone' => '0383489966', 'birthday' => '1998-07-21', 'role' => 'seller', 'salary' => 5000000, 'branchesid' => 2, 'accountsid' =>16],
            ['fullname' => 'Nguyễn Phương Thảo', 'address' => 'Yên Phong- Bắc Ninh', 'phone' => '0393489966', 'birthday' => '1998-04-12', 'role' => 'storemanager', 'salary' => 10000000, 'branchesid' => 1, 'accountsid' =>17],
            ['fullname' => 'Nguyễn Quang Linh', 'address' => 'Hà Đông- Hà Nội', 'phone' => '0403489966', 'birthday' => '1998-04-13', 'role' => 'storemanager', 'salary' => 10000000, 'branchesid' => 2, 'accountsid' =>18],
            ['fullname' => 'Lê Duy Bách', 'address' => 'Hà Đông ', 'phone' => '0413489966', 'birthday' => '1998-01-01', 'role' => 'seniormanager', 'salary' => 15000000, 'branchesid' => NULL, 'accountsid' =>19],
            ['fullname' => 'Lê Thị Tuyết', 'address' => 'Hoàng Xá- Hải Dương', 'phone' => '0423489966', 'birthday' => '1998-08-19', 'role' => 'seller', 'salary' => 5000000, 'branchesid' => 3, 'accountsid' =>20],
            ['fullname' => 'Lê Việt Quang Anh', 'address' => 'Cát Tiền- Gia Lộc- Hải Dương', 'phone' => '0433489966', 'birthday' => '1998-11-10', 'role' => 'seller', 'salary' => 5000000, 'branchesid' => 3, 'accountsid' =>21],
            ['fullname' => 'Đoàn Thị Dung', 'address' => 'Hồng Đức- Ninh Giang- Hải Dương', 'phone' => '0443489966', 'birthday' => '1998-01-13', 'role' => 'storemanager', 'salary' => 10000000, 'branchesid' => 3, 'accountsid' =>22]
        ]);
    }
}
