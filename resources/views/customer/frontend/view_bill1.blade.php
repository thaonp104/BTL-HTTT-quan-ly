@extends('customer.layouts.main')
@section('title')
    New Order
@endsection
@section('content')
    <script>
        document.getElementById("item_menu1").classList.remove('current');
        document.getElementById("item_menu2").classList.add('current');
    </script>
<div class="Account-Module DefaultModule" style="width: 1170px; margin: 40px auto">
    <form method="post" action="{{ URL::asset(route('customer.order.store')) }}">
        @csrf
                	<div class="DefaultModule LoginForm Block">
                    	<div id="CreateAccountForm" class="Block Moveable Panel CreateAccountForm">
                        	<div id="cphMain_ctl00_ctl00_ctl00_pnlInfo">
                            	<div class="BlockContent">
                                	<div><h5>ĐƠN HÀNG</h5></div>
                                    <!-- đơn hàng -->
                                    <table style="width: 500px;">
                                        <tr>
                                            <th>Tên sản phẩm</th>
                                            <th>Số lượng</th>
                                            <th>Đơn giá</th>

                                        </tr>
                                    <?php foreach (session("cart") as $product) {

                 ?>
                  <tr>

                    <td><a href="{{ URL::asset('customer/product/detail/'.$product['id']) }}"><?php echo $product['name'] ?></a></td>
                    <td><?php echo $product['number'];?></td>
                    <td><?php echo number_format($product['price']); ?>VNĐ</td>

                  </tr>
                <?php } ?>
            </table>
            <div>Tổng số tiền cần thanh toán: <span><?php  echo number_format(session("total")); ?>VNĐ</span></div>
            <br/>--------------------

                <div>Thông tin khách hàng</div>
                 <div class="row">
                        <div class="col-md-2">Xin chào</div>
                        <div class="col-md-3"><?php echo session("c_customer"); ?></div>
                    </div>
                <!-- -------------- -->
                <div>
                    <div class="row">
                        <div class="col-md-2">Họ và tên</div>
                        <div class="col-md-3"><?php echo $check->fullname ?></div>
                    </div>
                <!-- -------------- -->
                <div class="row">
                        <div class="col-md-2">Địa chỉ</div>
                        <div class="col-md-3"><?php echo $check->address ?></div>
                    </div>
                <!-- -------------- -->
                 <div class="row">
                        <div class="col-md-2">Số điện thoại</div>
                        <div class="col-md-3"><?php echo $check->phone ?></div>
                    </div>
                <!-- -------------- -->


                </div>
            <div style="text-align: center;"><input style="text-align: center;padding: 10px;border-radius: 5px;" type="submit" name="" value="Thanh toán"></div>
            </form>
        </div>

    @endsection
