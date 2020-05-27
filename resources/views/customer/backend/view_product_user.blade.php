<div class="row justify-content-center">
	<div class="col-md-6">
	<a style="margin: 5px 0px;" class="btn btn-primary" href="admin.php?controller=add_user&act=add">Thêm</a>
		<div class="card">
			<div class="card-header bg-primary text-white">Danh sách tài khoản</div>
			<div class="card-body">
				<table class="table table-bordered table-hover">
					<tr>
						<th class="text-center" style="width: 150px;">Tên tài khoản</th>
						<th  style="width: 150px;"></th>
					</tr>
					<?php foreach ($arr as $rows) {
					?>
					<tr>
						<td class="text-center"><?php echo $rows->Username; ?></td>
						<td class="text-center">
							<a href="admin.php?controller=add_user&act=delete&id=<?php echo $rows->Id;?>">Delete</a>
						</td>
					</tr>
				<?php } ?>
				</table>
			</div>
		</div>
	</div>
</div>