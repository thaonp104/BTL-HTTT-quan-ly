<form method="post" action="admin.php?controller=xacnhan&id=<?php echo $arr->order_id ?>">
    <div >Chi tiết đơn hàng</div>
    <div>--------------------------</div>
    <div>
        <div class="row">
            <div class="col-md-4">Mã đơn hàng</div>
            <div class="col-md-8"><?php echo $arr->order_id ?></div>
        </div>
        <div class="row">
            <div class="col-md-4">Họ và tên</div>
            <div class="col-md-8"><?php echo $check->c_name ?></div>
        </div>
        <div class="row">
            <div class="col-md-4">Số điện thoại</div>
            <div class="col-md-8"><?php echo $check->c_phone ?></div>
        </div>
        <div class="row">
            <div class="col-md-4">Địa chỉ</div>
            <div class="col-md-8"><?php echo $check->c_adress ?></div>
        </div>
        <div class="row">
            <div class="col-md-4">Tổng tiền phải trả</div>
            <div class="col-md-8"><?php echo number_format($arr->money) ?> VNĐ</div>
        </div>
        <div class="row">
            <div class="col-md-4">Thời gian đặt hàng</div>
            <div class="col-md-8"><?php echo $arr->c_date ?></div>
        </div>
        <div class="row">
            <div class="col-md-4">Trạng thái</div>
            <div class="col-md-8"><?php 
                if($arr->status==0) echo "Chờ xác nhận";
                if($arr->status==1) echo "Đang giao hàng";
                if($arr->status==2) echo "Đã nhận hàng";
             ?></div>
        </div>

        <div>Chi tiết đơn hàng</div>
            <table>
                <tr>
                    <th >Mã sản phẩm</th>
                    <th >Tên sản phẩm</th>
                    <th>Đơn giá</th>
                    <th >Số lượng</th>
                </tr>
                <?php foreach ($kt as $rows){ ?>
                <tr>
                    <td style="width: 120px;text-align: center"><?php echo $rows->product_id ?></td>
                    <td ><a href="san-pham/detail/<?php echo $rows->product_id?>"><?php $arr=$this->model->get_a_record("select * from product where product_id=$rows->product_id"); echo $arr->c_name;?></a></td>
                    <td style="text-align: center;"><?php $arr=$this->model->get_a_record("select * from product where product_id=$rows->product_id"); echo number_format($arr->c_pricenew) ?> VNĐ</td>
                    <td style="width: 120px;text-align: center"><?php echo $rows->number ?></td>

                </tr>
                <?php }?>

            </table>
           
        <?php $arr=$this->model->get_a_record("select * from order_product where order_id=$id");
            if($arr->status==0){
         ?><input class="btn btn-primary" type="submit" name="" value="Xác nhận">
     <?php } ?>
    </div>
</form>