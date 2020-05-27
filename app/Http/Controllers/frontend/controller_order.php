<?php 
	class controller_order{
		public $model;
		public function __construct(){
			$this->model=new model();
			$act=isset($_GET["act"])?$_GET["act"]:"";
			switch ($act) {
				case 'bill2':
						date_default_timezone_set("Asia/Ho_Chi_Minh");
						$c_name=$_POST["c_name"];
						$c_phone=$_POST["c_phone"];
						$c_adress=$_POST["c_adress"];
						$c_date=date('Y/m/d  H:i:s');
						$totall=$_SESSION["total"];
						
						$c_maxacnhan=$_POST["c_maxacnhan"];
						if(isset($c_maxacnhan)&&$c_maxacnhan==$_SESSION["c_code"]){
							$this->model->execute("insert into customer_order(c_name,c_phone,c_adress) values('$c_name','$c_phone','$c_adress')");
							$arr=$this->model->get_a_record("select customer_order_id from customer_order where c_name='$c_name' and c_phone=$c_phone");

							$this->model->execute("insert into order_product(customer_order_id,money,c_date,customer_id,status) values('$arr->customer_order_id','$totall','$c_date','0','0')");
							$sl=$this->model->get_a_record("select order_id from order_product where customer_order_id=$arr->customer_order_id");
							$_SESSION["order_id"]=$sl->order_id;
							foreach ($_SESSION['cart'] as $product) {
								$id=$product['product_id'];
								$number=$product['number'];
								$this->model->execute("insert into order_detail set order_id='$sl->order_id',product_id='$id',number='$number'");
								
							}
							echo "<script>location.href='index.php?controller=result'</script>";
							
						}
					break;
				case 'bill1':
				date_default_timezone_set("Asia/Ho_Chi_Minh");
				$name=$_SESSION["c_customer"];
				$c_date=date('Y/m/d  H:i:s');
				$tong=$_SESSION["total"];
				$arr=$this->model->get_a_record("select * from customer_account where c_email='$name'");
				$this->model->execute("insert into order_product(customer_order_id,money,c_date,customer_id,status) values('0','$tong','$c_date','$arr->customer_id','0')  ");
				$kq=$this->model->get_a_record("select * from order_product where customer_id=$arr->customer_id order by order_id desc limit 0,1");
				
				foreach ($_SESSION['cart'] as $product) {
								$id=$product['product_id'];
								$number=$product['number'];
								$this->model->execute("insert into order_detail(order_id,product_id,number) values('$kq->order_id','$id','$number') ");
							}
							
							
							echo "<script>location.href='index.php?controller=result_account'</script>";
				break;
	
			}

		}
	}
	new controller_order();
 ?>