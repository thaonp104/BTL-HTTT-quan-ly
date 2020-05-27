<div class="row justify-content-center">
	<div class="card">
		<div class="card-header bg-primary text-white">Thông tin tài khoản</div>	
		<div class="card-body">
			<div class="row">
				<div class="col-md-6">
						<img style="width: 250px;height: 200px;border: 1px solid black"  src="public/backend/images/avt/<?php echo $row->c_img?>">
						<div style="padding-left: 50px;">Ảnh đại diện</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
					<div class="row">
						<div class="col-md-4">Họ và tên: </div>
						<div class="col-md-8"><input disabled class="form-control" type="text" name="c_name" <?php if(isset($row->c_name)&&$row->c_name!=""){ ?> value="<?php echo $row->c_name?>" <?php }else{ ?>placeholder="Chưa có thông tin"<?php }?> ></div>
					</div>
					</div>
					<!-- ======= -->
					<div class="form-group">
					<div class="row">
						<div  class="col-md-4">Địa chỉ: </div>
						<div class="col-md-8"><input disabled type="text" class="form-control" <?php if(isset($row->c_adress)&&$row->c_adress!=""){ ?> value="<?php echo $row->c_adress?>" <?php }else{ ?>placeholder="Chưa có thông tin"<?php }?> ></div>
					</div>
					</div>
					<!-- ======= -->
					<div class="form-group">
					<div class="row">
						<div class="col-md-4">Số điện thoại(+84): </div>
						<div class="col-md-8"><input disabled type="number" class="form-control" <?php if(isset($row->c_sdt)&&$row->c_sdt !=0){ ?> value="<?php echo $row->c_sdt?>" <?php }else{ ?>placeholder="Chưa có thông tin"<?php }?>></div>
					</div>
					</div>
					<!--========= -->
					<div class="form-group">
					<div class="row">
						<div class="col-md-4">Email: </div>
						<div class="col-md-8"><input disabled type="text" class="form-control" <?php if(isset($row->c_email)&&$row->c_email!=""){ ?> value="<?php echo $row->c_email?>" <?php }else{ ?>placeholder="Chưa có thông tin"<?php }?> ></div>
					</div>
					</div>
					<!--======== -->
					<div class="form-group">
					<div class="row">
						<div class="col-md-4"> </div>
						<div class="col-md-8"><a href="admin.php?controller=edit_user&act=edit&id=<?php echo $row->pk_infomation_id?>">Sửa thông tin cá nhân.</a></div>
					</div>
					</div>
				</div>
			</div>	
	</div>
	</div>
</div>
