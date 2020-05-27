<?php 
	class controller_add_contact{
		public $model;
		public function __construct(){
			$this->model=new model();
			$act=isset($_GET["act"])?$_GET["act"]:"";
			switch ($act) {
				// case 'add':
				// 	$form_action="index.php?controller=add_contact&act=do_add";
				// 	break;
				case 'do_add':
				date_default_timezone_set("Asia/Ho_Chi_Minh");
				$c_name=$_POST["c_name"];
				$c_adress=$_POST["c_adress"];
				$c_email=$_POST["c_email"];
				$c_phone=$_POST["c_phone"];
				$c_title=$_POST["c_title"];
				$c_content=$_POST["c_content"];
				$c_time=date('Y-m-d H:i:s');
				$c_maxacnhan=$_POST["c_maxacnhan"];
				if(isset($c_maxacnhan)&&$c_maxacnhan==$_SESSION["c_code"]){
					$this->model->execute("insert into contact(c_name,c_adress,c_email,c_phone,c_title,c_content,c_time) values('$c_name','$c_adress','$c_email','$c_phone','$c_title','$c_content','$c_time') ");
					$tb="Bạn đã gửi phản hồi thành công.Chúng tôi sẽ sớm trả lời cho bạn!!";
					include("view/frontend/view_contact.php");
				}
				else{
					$tb="Sai mã xác nhận. Nhập lại";
					include("view/frontend/view_contact.php");
				}
				break;

				}
			
			include("view/frontend/view_contact.php");
		}
	}
	new controller_add_contact();
 ?>