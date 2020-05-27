<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="../../../../public/backend/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-6">
			<div class="card" style="margin-top: 15px;">
				<div class="card-header bg-primary text-white">Đăng nhập</div>
				<div class="card-body">
					<form method="post">
						<div class="form-group">
							<div class="row">
								<div class="col-md-3">Tài khoản: </div>
								<div class="col-md-9"><input class="form-control"  type="text" name="c_email"></div>
							</div>
						</div>
						<div class="form-group">
							<div class="row">
								<div class="col-md-3">Mật khẩu: </div>
								<div class="col-md-9"><input class="form-control" type="password" name="c_password"></div>
							</div>
						</div>
						<div class="form-group">
							<div class="row">
								<div class="col-md-3"></div>
								<div style="color: red;" class="col-md-9"><?php echo isset($tm)?$tm:""; ?></div>
							</div>
						</div>
						<div class="form-group">
							<div class="row">
								<div class="col-md-3"></div>
								<div class="col-md-9">
									<input type="submit" class="btn btn-primary" name="" value="Đăng nhập">&nbsp;&nbsp;
									<input type="reset" class="btn btn-danger" name="" value="Reset">
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>
