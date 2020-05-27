<?php 
	class controller_group_product{
		public $model;
		public function __construct(){
			$this->model=new model();
			$arr=$this->model->get_all("select * from group_product order by group_product_id desc");
			include("view/backend/view_group_product.php");
		}	
	}
	new controller_group_product();
 ?>