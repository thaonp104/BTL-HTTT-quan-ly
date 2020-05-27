<?php 
	class controller_product{
		public $model;
		public function __construct(){
			$this->model=new model();
			$record_perpage=4;
			$total=$this->model->get_num_rows("select product_id from product");
			$numpage=ceil($total/$record_perpage);
			$page=isset($_GET["p"])&&$_GET["p"]>0?($_GET["p"]-1):0;
			$from = $page *$record_perpage;
			$arr=$this->model->get_all("select * from product order by product_id desc limit $from,$record_perpage");

			include("view/backend/view_product.php");

		}
	}
	new controller_product();
 ?>