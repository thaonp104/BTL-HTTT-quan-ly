<div class="row justify-content-center">
	<div class="col-md-10">
		<div class="card">
			<div class="card-header bg-danger text-white">Add_Edit_news</div>
			<div class="card-body">
				<form method="post" enctype="multipart/form-data" action="<?php echo $form_action?>">
					<div class="form-group">
						<div class="row">
							<div class="col-md-3">Tên sản phẩm</div>
							<div class="col-md-9"><input required type="text" class="form-control" name="c_name" value="<?php echo isset($arr->c_name)?$arr->c_name:""?>"></div>
						</div>
					</div>
					<!--  -->
					<div class="form-group">
						<div class="row">
							<div class="col-md-3">Ảnh</div>
							<div class="col-md-9"><input type="file" name="c_img"></div>
						</div>
					</div>
					<!--  -->
					<div class="form-group">
						<div class="row">
							<div class="col-md-3">Danh mục sản phẩm</div>
							<div class="col-md-9">
								<select name="category_news_id">
									<?php $category=$this->model->get_all("select * from category_news");
										foreach ($category as $rows) {
									 ?>
									<option <?php if(isset($arr->category_news_id)&&$arr->category_news_id==$rows->category_news_id){ ?> selected <?php } ?> value="<?php echo $rows->category_news_id?>"><?php echo $rows->c_name ?></option>
								<?php } ?>
								</select>
							</div>
						</div>
					</div>
					<!--  -->
					
					<div class="form-group">
						<div class="row">
							<div class="col-md-3">Nội dung</div>
							<div class="col-md-9">
								<textarea name="c_content"><?php echo isset($arr->c_content)?$arr->c_content:"" ?></textarea>
								<script  type="text/javascript">
										CKEDITOR.replace("c_content");
								</script>
							</div>
						</div>
					</div>
					<!--  -->
					<div class="form-group">
						<div class="row">
							<div class="col-md-3">Mô tả</div>
							<div class="col-md-9">
								<textarea name="c_description"><?php echo isset($arr->c_description)?$arr->c_description:"" ?></textarea>
								<script  type="text/javascript">
										CKEDITOR.replace("c_description");
								</script>
							</div>
						</div>
					</div>
					<!--  -->
					<div class="form-group">
						<div class="row">
							<div class="col-md-3">Hotnews</div>
							<div class="col-md-9"><input type="checkbox" <?php if(isset($arr->c_hotnews)&&$arr->c_hotnews==1){ ?> checked <?php } ?> name="c_hotnews"></div>
						</div>
					</div>
					<!--  -->
					<div class="form-group">
						<div class="row">
							<div class="col-md-3"></div>
							<div class="col-md-9"><input type="submit" name="" value="Process" class="btn btn-primary">
							<input type="submit" name="" value="Reset" class="btn btn-danger"></div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>