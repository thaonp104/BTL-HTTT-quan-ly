<div class="row justify-content-center">
	<div class="col-md-12">
		<a class="btn btn-primary" style="margin: 5px 0px;" href="admin.php?controller=add_edit_news&act=add">Thêm tin</a>
		<div class="card">
			<div class="card-header bg-primary text-white">Tin tức</div>
			<div class="card-body">
				<table class="table table-bordered table-hover">
					<tr>
						<th style="width: 120px;">Ảnh</th>
						<th style="width: 120px;">Tên</th>
						<th style="width: 120px;">Danh mục tin tức</th>
						<th style="width: 120px;">Ngày đăng</th>
						<th style="width: 120px;">Mô tả</th>
						<th style="width: 120px;">Nội dung</th>
						<th style="width: 120px;">Hotnews</th>
						<th style="width: 120px;"></th>
					</tr>
					<?php foreach ($arr as $rows) {
					?>
					<tr>
						<td><img style="width: 120px;" src="public/news/<?php echo $rows->c_img?>"></td>
						<td><?php echo $rows->c_name; ?></td>
						<td><?php $check=$this->model->get_a_record("select * from category_news where category_news_id=$rows->category_news_id"); ?>
						<?php echo $check->c_name; ?>
							
						</td>
						<td><?php echo $rows->c_date ?></td>
						<td><textarea style="height: 200px;"><?php echo $rows->c_description ?></textarea></td>
						<td><textarea style="height: 200px;"><?php echo $rows->c_content ?></textarea></td>
						<td><?php echo $rows->c_hotnews ?></td>
						<td><a href="admin.php?controller=add_edit_news&act=delete&id=<?php echo $rows->news_id?>">Delete</a>&nbsp;&nbsp;<a href="admin.php?controller=add_edit_news&act=edit&id=<?php echo $rows->news_id?>"">Edit</a></td>
					</tr>
				<?php } ?>
				</table>
				<div class="card-footer" style="padding:7px !important">
					<ul class="pagination">
						<li class="page-item"><a class="page-link" href="#">Trang: </a></li>
						<?php 
							for($i=1;$i<=$numpage;$i++){
						 ?>
						
						<li class="page-item"><a class="page-link" href="admin.php?controller=news&p=<?php echo $i; ?>"> <?php echo $i; ?></a></li>

						<?php } ?>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>