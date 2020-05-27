<div class="row justify-content-center">
	<div class="col-md-6">
		<a class="btn btn-primary" style="margin: 5px 0px;" href="admin.php?controller=add_edit_category_product">Add</a>
		<div class="card">
			<div class="card-header bg-primary text-white">Danh sách danh mục sản phẩm</div>
			<div class="card-body">
				<table class="table table-bordered table-hover">
					<tr>
						<th>Stt</th>
						<th>Tên</th>
						<th>Group danh mục</th>
						<th></th>
					</tr>
					<?php 
						$stt=1;
						foreach ($arr as $rows) {
					 ?>
					<tr>
						<td><?php echo $stt ?></td>
						<td><?php echo $rows->c_name; ?></td>
						<td><?php 
							$check=$this->model->get_a_record("select * from group_product  where group_product_id=$rows->group_product_id");
							echo $check->c_name;
						 ?></td>
						<td><a href="">delete</a>&nbsp;|&nbsp;<a href="">edit</a></td>
					</tr>
				<?php $stt++; ?>
				<?php } ?>
				</table>
				<div class="card-footed">
					<ul class="pagination">
						<li class="page_item">
							<a href="#" class="page-link">Trang</a>
						</li>
						<?php for($i=1;$i<$record_perpage;$i++){ ?>
						<li class="page-item"><a href="admin.php?controller=category_product&p=<?php echo $i?>" class="page-link"><?php echo $i ?></a></li>
					<?php } ?>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>