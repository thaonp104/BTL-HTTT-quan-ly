<?php 
	class controller_xacnhan{
		public $model;
		public function __construct(){
			$id=isset($_GET["id"])?$_GET["id"]:"";
			$this->model=new model();
			$this->model->execute("update order_product set status='1' where order_id=$id ");
			$this->model=new model;
			$record_perpage=4;
			$total=$this->model->get_num_rows("select order_id from order_product");
			$num_page=ceil($total/$record_perpage);
			$page=isset($_GET["p"])&&$_GET["p"]>0?($_GET["p"]-1):0;
			$from=$page*$record_perpage;
			$arr=$this->model->get_all("select * from order_product order by order_id desc limit $from,$record_perpage");
			include("view/backend/view_xacnhan.php");
		}
	}
	new controller_xacnhan();
 ?>