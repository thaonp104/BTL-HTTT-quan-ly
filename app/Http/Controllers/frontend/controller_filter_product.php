<?php 
	class controller_filter_product{
		public $model;
		public function __construct(){
			$this->model=new model();
			$pr=isset($_GET["pr"])?$_GET["pr"]:"";
			$record_perpage=8;
			switch ($pr) {
				case 'lv1':
					$total=$this->model->get_num_rows("select product_id from product where c_pricenew<500000");
					$num_page=ceil($total/$record_perpage);
					$page=isset($_GET["p"])&&$_GET["p"]>0?($_GET["p"]-1):0;
					$from=$page*$record_perpage;
					$arr=$this->model->get_all("select * from product where c_pricenew<500000 order by product_id desc limit $from,$record_perpage");


				break;
				case 'lv2':
					$total=$this->model->get_num_rows("select product_id from product where  c_pricenew>=500000 and c_pricenew<=1000000");
					$num_page=ceil($total/$record_perpage);
					$page=isset($_GET["p"])&&$_GET["p"]>0?($_GET["p"]-1):0;
					$from=$page*$record_perpage;
					$arr=$this->model->get_all("select * from product where c_pricenew>=500000 and c_pricenew<=1000000
						order by product_id desc limit $from,$record_perpage");
				break;
				case 'lv3':
					$total=$this->model->get_num_rows("select product_id from product  where  c_pricenew>1000000 and c_pricenew<=2000000");
					$num_page=ceil($total/$record_perpage);
					$page=isset($_GET["p"])&&$_GET["p"]>0?($_GET["p"]-1):0;
					$from=$page*$record_perpage;
					$arr=$this->model->get_all("select * from product where c_pricenew>1000000 and c_pricenew<=2000000 order by product_id desc limit $from,$record_perpage");
				break;
				case 'lv4':
					$total=$this->model->get_num_rows("select product_id from product  where c_pricenew>2000000 and c_pricenew<=5000000");
					$num_page=ceil($total/$record_perpage);
					$page=isset($_GET["p"])&&$_GET["p"]>0?($_GET["p"]-1):0;
					$from=$page*$record_perpage;
					$arr=$this->model->get_all("select * from product where c_pricenew>2000000 and c_pricenew<=5000000 order by product_id desc limit $from,$record_perpage");
				break;
				case 'lv5':
					$total=$this->model->get_num_rows("select product_id from product where c_pricenew>5000000 and c_pricenew<=10000000");
					$num_page=ceil($total/$record_perpage);
					$page=isset($_GET["p"])&&$_GET["p"]>0?($_GET["p"]-1):0;
					$from=$page*$record_perpage;
					$arr=$this->model->get_all("select * from product where c_pricenew>5000000 and c_pricenew<=10000000 order by product_id desc limit $from,$record_perpage");
				break;
				case 'lv6':
					$total=$this->model->get_num_rows("select product_id from product where  c_pricenew>10000000");
					$num_page=ceil($total/$record_perpage);
					$page=isset($_GET["p"])&&$_GET["p"]>0?($_GET["p"]-1):0;
					$from=$page*$record_perpage;
					$arr=$this->model->get_all("select * from product where  c_pricenew>10000000 order by product_id desc limit $from,$record_perpage");
				break;

			}
			include("view/frontend/view_filter_product.php");
		}
	}
	new controller_filter_product();
 ?>