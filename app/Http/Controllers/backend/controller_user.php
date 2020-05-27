<?php 
	class controller_user{
		public $model;
		public function __construct(){
			$this->model=new model();
			$name=isset($_SESSION["c_email"])?$_SESSION["c_email"]:"";
			$arr=$this->model->get_a_record("select * from user where Username='$name'");
			$row=$this->model->get_a_record("select * from infomation_user where Id='$arr->Id'");
			include("view/backend/view_user.php");
		}
	}
	new controller_user();
 ?>