@extends('customer.layouts.main')
@section('title')
    My Orders
@endsection
@section('content')
    <script>
        document.getElementById("item_menu1").classList.remove('current');
    </script>
<div class="row justify-content-center" style="width: 1170px; margin: 40px auto">
	<div class="col-md-10">
		<form>
			<div class="card-header" style="margin-bottom: 10px;">Lịch sử đơn hàng của bạn</div>

				<div class="row">
					<div class="col-md-3">Tài khoản: </div>
					<div class="col-md-9"><?php echo $arr->username; ?></div>
				</div><div class="row">
					<div class="col-md-3">Họ tên: </div>
					<div class="col-md-9"><?php echo $inf->fullname; ?></div>
				</div>
				<div class="row">
					<div class="col-md-3">Ngày sinh: </div>
					<div class="col-md-9"><?php echo $inf->birthday;
							 ?></div>
				</div>
				<div class="row">
					<div class="col-md-3">Địa chỉ: </div>
					<div class="col-md-9"><?php echo $inf->address; ?></div>
				</div>
				<div class="row">
					<div class="col-md-3">Số điện thoại(+84): </div>
					<div class="col-md-9"><?php echo $inf->phone; ?></div>
				</div>

	</form>
	<br/>
	<div class="rows">
		<div class="col-md-12">
		<table class="table table-bordered">
			<tr>
				<th>Stt</th>
				<th>Mã đơn hàng</th>
				<th>Ngày đặt hàng</th>
				<th>Tổng số tiền</th>
				<th>Trạng thái</th>
				<th></th>
			</tr>
			<?php $i=1; ?>
			<?php foreach ($ord as $rows) {
			 ?>
			<tr>
				<td><?php echo $i ?></td>
				<td><?php echo $rows->id ?></td>
				<td><?php echo $rows->date ?></td>
				<td><?php echo number_format($rows->total) ?> VNĐ</td>
				<td>
					<?php
						if($rows->status==0) echo "Chờ xác nhận";
						if($rows->status==1) echo "Đang giao hàng";
						if($rows->status==2) echo "Đã nhận hàng";
                        if($rows->status==3) echo "Đã huỷ";
					 ?>
				</td>
				<td><a href="{{ URL::asset('customer/order/show/'.$rows->id) }}">Xem chi tiết đơn hàng</a></td>
			</tr>
			<?php $i++ ?>
		<?php } ?>
		</table>
		</div>
	</div>
	</div>
</div>
    @endsection
