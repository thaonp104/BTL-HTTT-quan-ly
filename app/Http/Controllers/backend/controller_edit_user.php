<?php 
	class controller_edit_user{
		public $model;
		public function __construct(){
			$this->model=new model();
			$act=isset($_GET["act"])?$_GET["act"]:"";
			$id=isset($_GET["id"])?$_GET["id"]:"";
			switch ($act) {
				case 'edit':
					$arr=$this->model->get_a_record("select * from infomation_user where pk_infomation_id=$id");
					$form_action="admin.php?controller=edit_user&act=do_edit&id=$id";
					break;
				case 'do_edit':
				$c_name=$_POST["c_name"];
				$c_adress=$_POST["c_adress"];
				$c_sdt=$_POST["c_sdt"];
				$c_email=$_POST["c_email"];
				if(isset($arr->c_img)&&$arr->c_img!=""){
				$c_img=$_FILES["c_img"]["name"];
					if($c_img!=""){
						$old_img=$this->model->get_a_record("select * from infomation_user where pk_infomation_id=$id");
						unlink("public/backend/images/avt/".$old_img->c_img);
						$tmp=$_FILES["c_img"]["tmp_name"];
						$c_img=time().$c_img;
						move_uploaded_file($tmp,"public/backend/images/avt/$c_img");
						$this->model->execute("update infomation_user set c_img='$c_img' where pk_infomation_id=$id");
						
					}
					}
					else{

						$c_img=$_FILES["c_img"]["name"];
						if($c_img!=""){
							$tmp=$_FILES["c_img"]["tmp_name"];
							$c_img=time().$c_img;
							move_uploaded_file($tmp,"public/backend/images/avt/$c_img");
							$this->model->execute("update infomation_user set c_img='$c_img' where pk_infomation_id=$id");
							
					}
					}
				
				$this->model->execute("update infomation_user set c_name='$c_name',c_adress='$c_adress',c_sdt='$c_sdt',c_email='$c_email' where pk_infomation_id=$id");

				$tam=$_SESSION["c_email"];
				echo "admin.php?controller=user&name='$tam'";
				//echo "<script>header.location</script>"
				header("location:admin.php?controller=user&name='$tam'");
				break;

			}

			include("view/backend/view_edit_user.php");
		}
	}
	new controller_edit_user();
 ?>