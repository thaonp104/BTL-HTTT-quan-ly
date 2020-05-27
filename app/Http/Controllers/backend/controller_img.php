<?php 
	class controller_img{
		public $model;
		$id=isset($_GET["id"])?$_GET["id"]:"";
		public function __construct{
			$this->model= new model();
		}
	}
	new controller_img();
 ?>