<?php 
	class controller_product_user{
		public $model;
		public function __construct(){
			$this->model=new model;
			$arr=$this->model->get_all("select * from user order by id desc");
			include("view/backend/view_product_user.php");
		}
	}
	new controller_product_user();
 ?>