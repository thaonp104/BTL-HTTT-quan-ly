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

                    <td><a href="{{ URL::asset('customer/product/detail/'.$product['product_id']) }}"><?php echo $product['c_name'] ?></a></td>
                    <td><?php echo $product['number'];?></td>
                    <td class="text-right"><?php echo number_format($product['c_price']); ?>VNĐ</td>

                  </tr>
                <?php } ?>
            </table>
            <div>Tổng số tiền cần thanh toán: <span><?php  echo number_format( session("total")) ?>VNĐ</span></div>
                                    <!-- đơn hàng -->
                                    <div class="defaultContent LoginForm-content CreateAccountContainer">
                                    	<form method="post" action="{{ URL::asset(route('customer.order.store')) }}">
                                            @csrf
                                            <p> </p>
                                            <h3> Thông tin cá nhân </h3>
                                            <p> Nhập thông tin người nhận, địa chỉ mà bạn muốn chúng tôi chuyển hàng tới. </p>

                                            <div class="FormContainer HorizontalFormContainer NarrowFormContainer">
                                                <dl>

                                                <dt>
                                                <span class="required">*</span>
                                               Họ và tên:
                                                </dt>
                                                <dd>
                                                <input id="txtLastName" class="NormalTextBox" type="text" style="width:200px;" name="c_name">
                                                <span id="cphMain_ctl00_ctl00_ctl00_RequiredFieldValidator4" style="display:none;">
                                                </dd>

                                                <dt>
                                                <span class="required">*</span>
                                                Điện thoại:
                                                </dt>
                                                <dd>
                                                <input  class="NormalTextBox" type="text" style="width:200px;" maxlength="12" name="c_phone">
                                                <span id="cphMain_ctl00_ctl00_ctl00_RequiredFieldValidator5" style="display:none;">
                                                </dd>
                                                <dt>
                                                <span class="required">*</span>
                                                Địa chỉ:
                                                </dt>
                                                <dd>
                                                <input id="txtAddress1" class="NormalTextBox" type="text" style="width:350px;" name="c_adress">
                                                <span id="cphMain_ctl00_ctl00_ctl00_RequiredFieldValidator6" style="display:none;">
                                                </dd>

                                                <dt>
                                                <span class="required"></span>
                                                Mã xác nhận:
                                                </dt>
                                                <dd>
                                                <span style="line-height: 30px;font-weight: bold;"><?php include("controller/frontend/controller_random.php"); ?>
                                                </span>
                                                </dd>
                                                <dt>
                                                <span class="required">*</span>
                                                Ký tự hiển thị:
                                                </dt>
                                                <dd>
                                                	<div>
                                                    <input id="txtRandomCode" class="NormalTextBox" type="text" style="width:50%;" maxlength="10" name="c_maxacnhan">
                                                    </div>
                                                    <div class="NormalRed"> </div>
                                                </dd>
                                                <dt> </dt>
                                                <dd>
                                                <input type="submit" class="btn" style="font-weight: bold;" value="Xác nhận thanh toán" >
                                                </dd>
                                                </dl>
                                                </div>
                                            </form>
                                                <p> </p>
                                                </div>
                                    </div>
                                    <div class="defaultFooter LoginForm-footer"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

    @endsection
