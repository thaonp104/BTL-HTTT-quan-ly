<?php 
	class controller_bill{
		public $model;
		public function __construct(){
			$this->model=new model();
			if(isset($_SESSION["c_customer"])){
				//Khách đã đăng nhập
				$tmp=$_SESSION["c_customer"];

				$arr=$this->model->get_a_record("select * from customer_account where c_email='$tmp'");
				$check=$this->model->get_a_record("select * from customer where customer_id=$arr->customer_id");
				include("view/frontend/view_bill1.php");
			}
			else{
				//khách vãng lai
				
				include("view/frontend/view_bill2.php");
			}
		}
	}
	new controller_bill();
 ?>