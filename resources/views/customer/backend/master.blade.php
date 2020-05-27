<!DOCTYPE html>
<html>
<head>
	<title>Master</title>
	<link rel="stylesheet" type="text/css" href="../../../../public/backend/css/bootstrap.min.css">;
	<base href="http://localhost/mobile_web/">;
	<script src="../../../../public/backend/js/jquery.min.js"></script>
	<script  src="../../../../public/backend/js/bootstrap.min.js"></script>
	<script src="../../../../public/backend/ckeditor/ckeditor.js"></script>
</head>
<body>
	<div class="container">
		<div class="row justify-content-center">
			<div class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu" aria-controls="menu" aria-expanded="false" aria-label="Toggle navigation">
				<span>Menu</span>
			    <span class="navbar-toggler-icon"></span>
			    </button>
			    <div class="collapse navbar-collapse" id="menu">
					<ul class="nav navbar-nav nav-hover mr-auto">
								<li class="nav-item"><a class="nav-link text-white" href="admin.php?controller=user&name=<?php echo $_SESSION["c_email"];?>">Xin chào: <span style="color: yellow;font-size: 18px;"><?php echo $_SESSION["c_email"]; ?></span> </a></li>
								<li class="nav-item"><a class="nav-link text-white" href="admin.php?controller=product_user">Quản lí tài khoản</a></li>
								<li class="nav-item">
									<div class="dropdown show ">
									  <a class="nav-link dropdown-toggle bg-dark text-white" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									   Sản phẩm
									  </a>

									  <div  class="dropdown-menu " aria-labelledby="dropdownMenuLink">
									    <ul class="nav navbar-nav mr-auto">
									    	<li class="nav-item "><a class="dropdown-item " href="admin.php?controller=group_product">Quản lí group danh mục </a></li>
									    	<li class="nav-item"><a class="dropdown-item" href="admin.php?controller=category_product">Quản lí danh sách sản phẩm</a></li>
											<li class="nav-item"><a class="dropdown-item" href="admin.php?controller=product">Quản lí sản phẩm</a></li>
											<li class="nav-item"><a class="dropdown-item" href="admin.php?controller=news">Quản lí tin tức</a></li>
									    </ul>
									  </div>
									</div>
								</li>

								<li class="nav-item"><a class="nav-link text-white" href="admin.php?controller=contact">Tin nhắn</a></li>
								<li class="nav-item"><a class="nav-link text-white" href="admin.php?controller=order">Quản lí đơn hàng</a></li>
								<li class="nav-item"><a class="nav-link text-white" href="admin.php?controller=logout">Đăng xuất</a></li>
						</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="container" style="margin-top: 50px;">
			<?php
				if(file_exists($controller))
					include $controller;
			 ?>
	</div>
</body>
</html>
