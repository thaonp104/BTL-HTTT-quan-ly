<div class="row justify-content-center">
	<div class="col-md-12">
		<div class="card">
			<div class="card-header text-white bg-primary">Đơn hàng</div>
			<div class="card-body">
				<table class="table table-bordered table-hover">
					<tr>
						<th>Stt</th>
						<th>Mã đơn hàng</th>
						<th>Thời gian đặt hàng</th>
						<th>Tổng số tiền</th>
						<th>Trạng thái đơn hàng</th>
						<th></th>
					</tr>
					<?php $i=1 ?>
					<?php foreach ($arr as $rows) {
					?>
					<tr>
						<td><?php echo $i; ?></td>
						<td><?php echo $rows->order_id ?></td>
						<td><?php echo $rows->c_date ?></td>
						<td><?php echo number_format($rows->money); ?> VNĐ</td>
						<td><?php 
							if($rows->status==0) echo "Chờ xác nhận";
							if($rows->status==1) echo "Đang giao hàng";
							if($rows->status==2) echo "Đã nhận hàng";
						 ?></td>
						<td><a href="admin.php?controller=order_detail&id=<?php echo $rows->order_id?>">Chi tiết đơn hàng</a></td>
					</tr>
					<?php $i++; ?>
				<?php } ?>
				</table>
				<div class="card-footer" style="padding:7px !important">
					<ul class="pagination">
						<li class="page-item"><a class="page-link" href="#">Trang: </a></li>
						<?php 
							for($i=1;$i<=$num_page;$i++){
						 ?>
						
						<li class="page-item"><a class="page-link" href="admin.php?controller=order&p=<?php echo $i; ?>"> <?php echo $i; ?></a></li>

						<?php } ?>
					</ul>
				</div>
			</div>	
		</div>
	</div>
</div>