@extends('customer.layouts.main')
@section('title')
    About Us
@endsection
@section('content')
    <script>
        document.getElementById("item_menu1").classList.remove('current');
        document.getElementById("item_menu2").classList.add('current');
    </script>
<div style="width: 1170px; margin: 40px auto">
    <?php use Illuminate\Support\Facades\DB; ?>
    <div >Chi tiết đơn hàng</div>
    <div>--------------------------</div>
    <div>
        <div class="row">
            <div class="col-md-4">Mã đơn hàng</div>
            <div class="col-md-8"><?php echo $tam->order_id ?></div>
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
            <div class="col-md-8"><?php echo number_format($tam->money) ?> VNĐ</div>
        </div>
        <div class="row">
            <div class="col-md-4">Thời gian đặt hàng</div>
            <div class="col-md-8"><?php echo $tam->c_date ?></div>
        </div>
        <div class="row">
            <div class="col-md-4">Trạng thái đơn hàng</div>
            <div class="col-md-8"><?php
                if($tam->status==0) echo "Chờ xác nhận";
                if($tam->status==1) echo "Đang giao hàng";
                if($tam->status==2) echo "Đã nhận hàng";
                if($tam->status==3) echo "Đã huỷ";
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
                <?php foreach ($arr as $rows){ ?>
                <tr>
                    <td style="width: 120px;text-align: center"><?php echo $rows->product_id ?></td>
                    <td style="width: 350px"><a href="{{ URL::asset('customer/product/detail/'.$rows->product_id) }}"><?php
                            $arr = DB::table('product')->where('product_id',$rows->product_id)->first();
                            echo $arr->c_name;?></a></td>
                    <td style="width: 150px"><?php
                        $arr = DB::table('product')->where('product_id',$rows->product_id)->first();
                        echo number_format($arr->c_pricenew) ?> VNĐ</td>
                    <td style="width: 120px"><?php echo $rows->number ?></td>

                </tr>
                <?php }?>
            </table>
    </div>
        <br>
        @if ($tam->status != 3)
            <a href="{{ URL::asset('customer/order/destroy/'.$tam->order_id) }}" class="btn btn-danger">Huỷ đơn hàng</a>
        @endif
</div>
@endsection
