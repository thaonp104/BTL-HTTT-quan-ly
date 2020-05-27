<?php 
 class controller_favorite_product{
 	public $model;
 	public function __construct(){
 		$this->model=new model();
 		$act=isset($_GET["act"])?$_GET["act"]:"";
 		$id=isset($_GET["id"])?$_GET["id"]:"";
 		if(!isset($_SESSION['favorite'])) $_SESSION['favorite'] = array();
 		switch ($act) {
 			case 'add':
 					$this->favorite_add($id);
 					echo "<script>location:index.php?controller=favorite_product</script>";
 				break;
 			case 'delete':
 				$this->favorite_delete($id);
 				echo "<script>location:index.php?controller=favorite_product</script>";
 			break;
 		}
 		include "view/frontend/view_favorite_product.php";
 		
 	}

 	public function favorite_add($pk_product_id){	    
		        //lấy thông tin sản phẩm từ CSDL và lưu vào giỏ hàng
		        $product = $this->model->get_a_record("select * from product where product_id=$pk_product_id");
		        
		        $_SESSION['favorite'][$pk_product_id] = array(
		            'product_id' => $pk_product_id,
		            'c_name' => $product->c_name,
		            'c_img' => $product->c_img,
		            'number' => 1,
		            'c_price' => $product->c_pricenew
		        );
		}
		public function favorite_delete($pk_product_id){
			 unset($_SESSION['favorite'][$pk_product_id]);
		}
 }
 new controller_favorite_product();
 ?>