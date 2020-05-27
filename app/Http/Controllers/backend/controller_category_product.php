<?php 
	class controller_category_product{
		public $model;
		public function __construct(){
			$this->model=new model();
			$record_perpage=4;
			$total=$this->model->get_num_rows("select category_product_id from category_product");
			$page=ceil($total/$record_perpage);
			$page=isset($_GET["p"])&&$_GET["p"]>0?($_GET["p"]-1):0;
			$from=$page*$record_perpage;
			$arr=$this->model->get_all("select * from category_product order by category_product_id desc limit $from,$record_perpage");
			include("view/backend/view_category_product.php");
		}
	}
	new controller_category_product();
 ?>