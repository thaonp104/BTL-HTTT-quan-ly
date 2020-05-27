<?php 
	class controller_add_edit_product{
		public $model;
		public function __construct(){
			$this->model=new model();
			$act=isset($_GET["act"])?$_GET["act"]:"";
			$id=isset($_GET["id"])?$_GET["id"]:"";
			switch ($act) {
				case 'add':
				$form_action="admin.php?controller=add_edit_product&act=do_add";
				break;
				case 'do_add':
					$c_name=$_POST["c_name"];
					$c_price=$_POST["c_price"];
					$c_pricenew=$_POST["c_pricenew"];
					$c_content=$_POST["c_content"];
					$c_hotnew=isset($_POST["c_hotnew"])?1:0;
					$category_product_id=$_POST["category_product_id"];
					$c_img=time().$_FILES["c_img"]["name"];
					if($c_img!=""){
						$tmp=$_FILES["c_img"]["tmp_name"];
						$c_img=time().$c_img;
						move_uploaded_file($tmp,"public/backend/images/$c_img");
					}
					$this->model->execute("insert into product(c_name,c_price,c_pricenew,c_hotnew,c_img,c_content,category_product_id) values('$c_name','$c_price','$c_pricenew','$c_hotnew','$c_img','$c_content','$category_product_id')");
					
					header("location:admin.php?controller=product");
				break;
				case 'delete':
				$this->model->execute("delete from product where product_id=$id");
					header("location:admin.php?controller=product");
				break;
				case 'edit':
				$form_action="admin.php?controller=add_edit_product&act=do_edit&id=$id";
				$arr=$this->model->get_a_record("select * from product where product_id=$id");
				break;
				case 'do_edit':
					$c_name=$_POST["c_name"];
					$c_price=$_POST["c_price"];
					$c_pricenew=$_POST["c_pricenew"];
					$c_content=$_POST["c_content"];
					$c_hotnew=isset($_POST["c_hotnew"])?1:0;
					$category_product_id=$_POST["category_product_id"];
					$this->model->execute("update product set c_name='$c_name',c_price='$c_price',c_pricenew='$c_pricenew',c_content='$c_content',c_hotnew='$c_hotnew',category_product_id='$category_product_id' where product_id=$id");
					//thực hiện cập nhật ảnh
					$c_img=$_FILES["c_img"]["name"];
					if($c_img!=""){
						$old_img=$this->model->get_a_record("select * from product where product_id=$id");
						unlink("public/backend/images/".$old_img->c_img);
						$tmp=$_FILES["c_img"]["tmp_name"];
						$c_img=time().$c_img;
						move_uploaded_file($tmp,"public/backend/images/$c_img");
						$this->model->execute("update product set c_img='$c_img' where product_id=$id");
						echo "update product set c_img='$c_img' where product_id=$id";
					}
					header("location:admin.php?controller=product");
				break;
			}
			include("view/backend/view_add_edit_product.php");
		}
	}
	new controller_add_edit_product();
 ?>