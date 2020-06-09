<?php

use Illuminate\Database\Seeder;

class VendorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('vendors')->insert([
            ['name' => 'CÔNG TY CỔ PHẦN THƯƠNG MẠI NGUYỄN KIM', 'address' => '63-65-67 Trần Hưng Đạo, Q.1, Tp.Hồ Chí Minh', 'phone' => '02462821859', 'dess' => 'Được thành lập vào năm 1992, bước sơ khai của Nguyễn Kim là cửa hàng kinh doanh Điện - Điện Tử - Điện Lạnh tại Quận 1. Với tầm nhìn chiến lược kinh doanh và những nổ lực không ngừng, Nguyễn Kim đã trở thành một trong những thương hiệu bán lẻ số 1 tại thị trường Việt Nam. Thế mạnh làm nên Nguyễn Kim không chỉ dừng lại ở sản phẩm chính hãng chất lượng cao, sự chuyên môn hóa trong từng bộ phận mà còn là tính trách nhiệm cao, sự quản lý chuyên nghiệp cùng đội ngũ kỹ thuật lành nghề, phục vụ tận tâm, uy tín, giá thành hợp lý đáp ứng tốt yêu cầu và nhu cầu khác nhau của khách hàng.'],
            ['name' => 'Thế giới di động', 'address' => '109 Tây Sơn, Quang Trung, Q. Đống Đa, Hà Nội', 'phone' => '02438512385', 'dess' => 'Thegioididong.com được thành lập từ năm 2004, là chuỗi bán lẻ thiết bị di động (điện thoại di động, máy tính bảng, laptop và phụ kiện) có thị phần số 1 Việt Nam với khoảng 1.000 cửa hàng hiện diện tại 63 tỉnh thành trên khắp Việt Nam.'],
            ['name' => 'Công ty FPT', 'address' => 'Số 2, Chùa Bộc, P. Trung Tự, Q. Đống Đa, Hà Nội', 'phone' => '02439746401', 'dess' => 'Năm 1988, 13 nhà khoa học trẻ thành lập Công ty FPT với mong muốn xây dựng “một tổ chức kiểu mới, giàu mạnh bằng nỗ lực lao động sáng tạo trong khoa học kỹ thuật và công nghệ, làm khách hàng hài lòng, góp phần hưng thịnh quốc gia, đem lại cho mỗi thành viên của mình điều kiện phát triển đầy đủ nhất về tài năng và một cuộc sống đầy đủ về vật chất, phong phú về tinh thần.”']
        ]);
    }
}
