<?php 
	class controller_order_detail{
		public $model;
		public function __construct(){
			$this->model=new model();
			$id=isset($_GET["id"])?$_GET["id"]:"";
			$tam=$this->model->get_a_record("select * from order_product where order_id=$id");
			$check=$this->model->get_a_record("select * from customer where customer_id=$tam->customer_id");
			$arr=$this->model->get_all("select * from order_detail where order_id=$id");
			include("view/frontend/view_order_detail.php");
		}
	}
	new controller_order_detail();
 ?>