<?php 
	class controller_sign_customer{
		public $model;
		public function __construct(){
			$this->model=new model;

			include("view/frontend/view_sign_customer.php");
		}
	}
	new controller_sign_customer();
 ?>