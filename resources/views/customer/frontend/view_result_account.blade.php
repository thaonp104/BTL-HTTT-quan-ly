<div>
	<div>Bạn đã đặt hàng thành công</div>
	<div>--------------------------</div>
	<div>
		<div class="row">
			<div class="col-md-4">Mã đơn hàng</div>
			<div class="col-md-8"><?php echo $check->order_id ?></div>
		</div>
		<div class="row">
			<div class="col-md-4">Họ và tên</div>
			<div class="col-md-8"><?php echo $arr->c_name ?></div>
		</div>
		<div class="row">
			<div class="col-md-4">Số điện thoại</div>
			<div class="col-md-8"><?php echo $arr->c_phone ?></div>
		</div>
		<div class="row">
			<div class="col-md-4">Địa chỉ</div>
			<div class="col-md-8"><?php echo $arr->c_adress ?></div>
		</div>
		<div class="row">
			<div class="col-md-4">Tổng tiền phải trả</div>
			<div class="col-md-8"><?php echo number_format($check->money) ?> VNĐ</div>
		</div>
		<div class="row">
			<div class="col-md-4">Thời gian đặt hàng</div>
			<div class="col-md-8"><?php echo $check->c_date ?></div>
		</div>
		<div>Chi tiết đơn hàng</div>
			<table>
				<tr>
					<th >Mã sản phẩm</th>
					<th >Tên sản phẩm</th>
					<th>Đơn giá</th>
					<th >Số lượng</th>
				</tr>
				<?php foreach ($kq as $rows){ ?>
				<tr>
					<td style="width: 120px;text-align: center"><?php echo $rows->product_id ?></td>
					<td ><a href="san-pham/detail/<?php echo $rows->product_id?>"><?php $name=$this->model->get_a_record("select * from product where product_id=$rows->product_id"); echo $name->c_name;?></a></td>
					<td style="text-align: center;"><?php $name=$this->model->get_a_record("select * from product where product_id=$rows->product_id"); echo number_format($name->c_pricenew) ?> VNĐ</td>
					<td style="width: 120px;text-align: center"><?php echo $rows->number ?></td>

				</tr>
				<?php }?>
			</table>
			<!-- <div><a style="color: red;text-decoration: none;" href="trang-chu"><?php //unset($_SESSION["order_id"]) ?>Tiếp tục mua hàng</a></div> -->
	</div>
</div>