<div class="row justify-content-center">
	<div class="card">
		<div class="card-header bg-primary text-white">Khách hàng liên hệ</div>	
		<div class="card-body">
			<div class="row">
				<div class="col-md-12">
					<table class="table table-hover table-bordered">
						<tr>
							<th>Tên khách hàng</th>
							<th>Email</th>
							<th>Số điện thoại</th>
							<th>Thời gian</th>
							<th>Tiêu đề</th>
							<th>Nội dung</th>
						</tr>
						<?php foreach ($arr as $rows) {
						?>
						<tr>
							<td><?php echo $rows->c_name; ?></td>
							<td><?php echo $rows->c_email;?></td>
							<td><?php echo $rows->c_phone; ?></td>
							<td><?php echo $rows->c_time;?></td>
							<td><?php echo $rows->c_title; ?></td>
							<td><textarea style="width: 200px;"><?php echo $rows->c_content; ?></textarea></td>
						</tr>
					<?php } ?>
					</table>
					<!--======== -->
					<div class="card-footer" style="padding:7px !important">
					<ul class="pagination">
						<li class="page-item"><a class="page-link" href="#">Trang: </a></li>
						<?php 
							for($i=1;$i<=$numpage;$i++){
						 ?>
						
						<li class="page-item"><a class="page-link" href="admin.php?controller=contact&p=<?php echo $i; ?>"> <?php echo $i; ?></a></li>

						<?php } ?>
					</ul>
				</div>
				</div>
			</div>	
	</div>
	</div>
</div>
