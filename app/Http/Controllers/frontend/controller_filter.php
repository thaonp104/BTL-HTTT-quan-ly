<?php 
	class controller_filter{
		public $model;
		public function __construct(){
			$this->model=new model();
			include ("view/frontend/view_filter.php");
		}
	}
	new controller_filter();
 ?>