@extends('customer.frontend.master2')
@section('title')
    Detail Product
@endsection
@section('content_right')
    <script>
        document.getElementById("item_menu1").classList.remove('current');
        document.getElementById("item_menu3").classList.add('current');
    </script>
<div class="container" style="width: 1170px; margin: 40px auto">
	<div class="col-md-12">
        <?php use Illuminate\Support\Facades\DB; ?>
		<div><h3><?php echo $arr->name ?></h3></div>
		<div style="border-top: 1px dotted #dddddd;margin-bottom: 10px;"></div>
		<div class="row">
			<div class="col-md-4">
				<img id="zoom_01" style="height: 300px;width: 280px;" src="{{ URL::asset('images/'.$arr->img) }}">
			</div>
			<div class="col-md-7">

				<div><h4 style="color: red;float: left;"><?php echo number_format($arr->pricenew) ?></h4>&nbsp;<span style="padding: 2px;line-height: 30px;border: 1px solid #dddddd;background-color: orange;border-radius: 8px;font-weight: bold;color: white;font-size: 12px;">Trả góp 0%</span>
					<div style="clear: both;"></div>
{{--					<del style="float: left;"><h4 ><?php echo number_format($arr->price) ?></h4></del>--}}

				</div>
				<div style="clear: both;"></div>
{{--				<div style="background-color: #acf1eb;line-height: 25px;padding: 2px;border: 1px solid #dddddd;width: 350px;text-align: center;font-weight: bold;color: #42c020;border-radius: 5px;">--}}
{{--					NHẬN HÀNG TRONG 1 GIỜ--}}
{{--				</div>--}}
				<div style="width: 350px;border:1px solid #dddddd;padding: 10px;border-radius: 5px;margin-top: 15px;">
					<h6>THÔNG TIN</h6>
					<ul style="margin: 0px;padding: 0px;">
						<li style="list-style: none;"><span style="color: green" class="fa fa-check-circle-o"></span>&nbsp;Cơ hội trúng 60 Smart Tivi Samsung 4K 55 inch</li>
						<li style="list-style: none;"><span style="color: green" class="fa fa-check-circle-o"></span>&nbsp;Gói quà tặng Galaxy xem phim & uống cafe cuối tuần</li>
						<li style="list-style: none;"> <span style="color: green" class="fa fa-check-circle-o"></span>&nbsp; Phiếu mua hàng Samsung trị giá 400.000đ</li>
						<li style="list-style: none;"><span style="color: green" class="fa fa-check-circle-o"></span>&nbsp; Giảm ngay 300.000đ (áp dụng cho đơn hàng đặt và nhận hàng từ ngày 06 - 08/07)</li>
						<li style="list-style: none;"> <span style="color: green" class="fa fa-check-circle-o"></span>&nbsp;ĐỘC QUYỀN: 90 ngày lỗi đổi mới</li>
					</ul>

				</div>
				<div style="margin-top: 15px;">
					<a href="{{ URL::asset('customer/addCart/'.$arr->id) }}" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Mua Ngay</a>&nbsp;
					<?php  if(session()->has('favorite.'.$arr->id)){?>
					<a href="{{ URL::asset('customer/deleteFavorite/'.$arr->id) }}" class="btn btn-danger"><i class="fa fa-heart"></i> Xóa khỏi danh sách ưa thích</a>

				<?php }else{ ?>
					<a href="{{ URL::asset('customer/addFavorite/'.$arr->id) }}" class="btn btn-danger"><i class="fa fa-heart"></i> Thêm vào danh sách ưa thích</a>
				<?php } ?>

				</div>
			</div>
		</div>
		<div>
			<?php echo $arr->content ?>
		</div>
	</div>
</div>
    @endsection
