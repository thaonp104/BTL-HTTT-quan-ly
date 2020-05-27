<?php 
	class controller_result_account{
		public $model;
		public function __construct(){
			$this->model=new model();
			$name=$_SESSION["c_customer"];
			$tx=$this->model->get_a_record("select customer_id from customer_account where c_email='$name'");
			$arr=$this->model->get_a_record("select * from customer where customer_id=$tx->customer_id");
			$check=$this->model->get_a_record("select * from order_product where customer_id=$arr->customer_id order by order_id desc limit 0,1 ");
			$kq=$this->model->get_all("select * from order_detail where order_id=$check->order_id  ");
			include("view/frontend/view_result_account.php");
		}
	}
	new controller_result_account();
 ?>