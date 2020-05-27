<div class="row justify-content-center">
	<div class="col-md-6">
	<div class="card">
		<div class="card-header bg-danger text-white">Thêm tài khoản:</div>
		<div class="card-body">
			<form method="post" action="<?php echo $form_action?>">
				<div class="form-group">
					<div class="row">
						<div class="col-md-3">Tên tài khoản:</div>
						<div class="col-md-9"><input type="text" class="form-control" name="c_email"></div>
					</div>
				</div>
				<!--  -->
				<div class="form-group">
					<div class="row">
						<div class="col-md-3">Mật khẩu:</div>
						<div class="col-md-9"><input type="password" class="form-control" name="c_password"></div>
					</div>
				</div>
				<div class="form-group">
					<div class="row">
						<div class="col-md-3"></div>
						<div style="color: red" class="col-md-9"><?php echo isset($rt)?$rt:"" ?></div>
					</div>
				</div>
				<!--  -->
				<div class="form-group">
					<div class="row">
						<div class="col-md-3"></div>
						<div class="col-md-9">
							<input type="submit" class="btn btn-primary" value="Thêm">
							<input type="reset" class="btn btn-danger" value="Nhập lại">
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
</div>