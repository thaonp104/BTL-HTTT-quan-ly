<?php 
	class controller_result{
		public $model;
		public function __construct(){
			$this->model=new model();
			$id=$_SESSION["order_id"];
			$arr=$this->model->get_a_record("select * from order_product where order_id=$id");
			$check=$this->model->get_a_record("select * from customer_order where customer_order_id=$arr->customer_order_id");
			$kt=$this->model->get_all("select * from order_detail where order_id=$id");
			include("view/frontend/view_result.php");
		}
	}
	 new controller_result();
 ?>