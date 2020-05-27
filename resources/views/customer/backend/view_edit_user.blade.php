<div class="row justify-content-center">
	<div class="col-md-10">
		<div class="card">
			<div class="card-header bg-danger text-white">Sửa thông tin tài khoản</div>
			<div class="card-body">
				<form method="post" enctype="multipart/form-data" action="<?php echo $form_action?>">
					<div class="form-group">
						<div class="row">
							<div class="col-md-3">Họ và tên</div>
							<div class="col-md-9"><input type="text" class="form-control" name="c_name" value="<?php echo isset($arr->c_name)?$arr->c_name:""?>"></div>
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
							<div class="col-md-3">Số điện thoại(+84):</div>
							<div class="col-md-9"><input type="number" name="c_sdt" value="<?php echo isset($arr->c_sdt)?$arr->c_sdt:""?>"></div>
						</div>
					</div>
					<!--  -->
					<div class="form-group">
						<div class="row">
							<div class="col-md-3">Địa chỉ</div>
							<div class="col-md-9"><input type="text" name="c_adress" value="<?php echo isset($arr->c_adress)?$arr->c_adress:""?>"></div>
						</div>
					</div>
					<!--  -->
					<div class="form-group">
						<div class="row">
							<div class="col-md-3">Email</div>
							<div class="col-md-9"><input type="text" name="c_email" value="<?php echo isset($arr->c_email)?$arr->c_email:""?>"></div>
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