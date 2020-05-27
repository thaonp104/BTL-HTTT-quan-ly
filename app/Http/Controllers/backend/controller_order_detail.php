<?php 
	class controller_order_detail{
		public $model;
		public function __construct(){
			$this->model=new model();
			$id=isset($_GET["id"])?$_GET["id"]:"";
			$arr=$this->model->get_a_record("select * from order_product where order_id=$id");
			if($arr->customer_order_id!=0){
				// trường hợp khách vãng lai
				$check=$this->model->get_a_record("select * from customer_order where customer_order_id=$arr->customer_order_id");
				$kt=$this->model->get_all("select * from order_detail where order_id=$id");
				include("view/backend/view_order_detail.php");
			}	
			else{
				// khách có tài khoản
				$check=$this->model->get_a_record("select * from customer where customer_id=$arr->customer_id");
				$kt=$this->model->get_all("select * from order_detail where order_id=$id");
				include("view/backend/view_order_detail2.php");
			}
		}
	}
	new controller_order_detail();
 ?>