<?php 
	class controller_login{
		public $model;
		public function __construct(){
			$this->model=new model();
			if($_SERVER["REQUEST_METHOD"]=="POST"){
				$c_email=$_POST["c_email"];
				$c_password=$_POST["c_password"];
				// thực hiện đăng nhập
				$check=$this->model->get_a_record("select * from user where Username='$c_email'");
				
				if(isset($check->Username)){
					if($check->Password==md5($c_password)){
						$_SESSION["c_email"]=$c_email;
						
						header("location:admin");
					}
					else{
						$tm="Sai tài khoản hoặc mật khẩu. Nhập lại!!";
					}
				}
				else
					$tm="Sai tài khoản hoặc mật khẩu. Nhập lại!!";
			}
			include("view/backend/view_login.php");
		}
	}
	new controller_login();
 ?>