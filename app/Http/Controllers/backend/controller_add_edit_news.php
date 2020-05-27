<?php 
	class controller_add_edit_news{
		public $model;
		public function __construct(){
			$this->model=new model();
			$act=isset($_GET["act"])?$_GET["act"]:"";
			$id=isset($_GET["id"])?$_GET["id"]:"";
			switch ($act) {
				case 'add':
				$form_action="admin.php?controller=add_edit_news&act=do_add";
				break;
				case 'do_add':
					$c_name=$_POST["c_name"];
					$c_date=date('Y-m-d H:i');
					$c_description=$_POST["c_description"];
					$c_content=$_POST["c_content"];
					$c_hotnews=isset($_POST["c_hotnews"])?1:0;
					$category_news_id=$_POST["category_news_id"];
					$c_img=time().$_FILES["c_img"]["name"];
					if($c_img!=""){
						$tmp=$_FILES["c_img"]["tmp_name"];
						$c_img=time().$c_img;
						move_uploaded_file($tmp,"public/news/$c_img");
					}
					$this->model->execute("insert into news(c_name,c_hotnews,c_img,c_content,category_news_id,c_date,c_description) values('$c_name','$c_hotnews','$c_img','$c_content','$category_news_id','$c_date','$c_description')");
					
					header("location:admin.php?controller=news");
				break;
				case 'delete':
				$this->model->execute("delete from news where news_id=$id");
					header("location:admin.php?controller=news");
				break;
				case 'edit':
				$form_action="admin.php?controller=add_edit_news&act=do_edit&id=$id";
				$arr=$this->model->get_a_record("select * from news where news_id=$id");
				break;
				case 'do_edit':
					$c_name=$_POST["c_name"];
					$c_date=date('Y-m-d H:i');
					$c_description=$_POST["c_description"];
					$c_content=$_POST["c_content"];
					$c_hotnews=isset($_POST["c_hotnews"])?1:0;
					$category_news_id=$_POST["category_news_id"];
					$this->model->execute("update news set c_name='$c_name',c_description='$c_description',c_content='$c_content',c_hotnews='$c_hotnews',category_news_id='$category_news_id',c_date='$c_date' where news_id=$id");
					//thực hiện cập nhật ảnh
					$c_img=$_FILES["c_img"]["name"];
					if($c_img!=""){
						$old_img=$this->model->get_a_record("select * from news where news_id=$id");
						unlink("public/news/".$old_img->c_img);
						$tmp=$_FILES["c_img"]["tmp_name"];
						$c_img=time().$c_img;
						move_uploaded_file($tmp,"public/news/$c_img");
						$this->model->execute("update news set c_img='$c_img' where news_id=$id");
						echo "update news set c_img='$c_img' where news_id=$id";
					}
					header("location:admin.php?controller=news");
				break;
			}
			include("view/backend/view_add_edit_news.php");
		}
	}
	new controller_add_edit_news();
 ?>