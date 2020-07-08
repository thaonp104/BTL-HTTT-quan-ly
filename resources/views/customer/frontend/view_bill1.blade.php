@extends('customer.layouts.main')
@section('title')
    New Order
@endsection
@section('content')
    <style>
        body{
            line-height: 1.42857143;
            margin: auto;
            font-size: 14px;
            font-family: Roboto, sans-serif;
            font-weight: 400;
            color: #231f20;
        }
        .col-md-4{
            padding: 30px 20px 30px 0px;
        }
        .col-md-4 .infor{
            margin-bottom: 15px;
        }
        .col-md-4 h4{
            background-color: #dddddd;
            border-bottom: 1px solid #d8d8d8;
            font-weight: 300;
            text-align: center;
            text-transform: uppercase;
            padding: 12px 0;
            margin: 0;
            font-size: 16px;
            font-weight: 400;
            margin-bottom: 20px;
        }
        .infor input{
            border-top: 0;
            border-left: 0;
            border-right: 0;
            border-bottom: 1px solid #9e9e9e;
            padding-left: 0;
            float: right;
            width: 70%;
        }
        h4{
            margin-bottom: 30px;
        }
        p{
            margin-bottom: 0px;
            padding-bottom: 5px;
        }
        .col-md-4 ul{
            margin-top: 15px;
            margin-bottom: 15px;
        }
        .col-md-4 ul li {
            list-style-type: none;
            float: left;
            padding-right: 5px;
            width: 32%;
        }
        .radio input[type="radio"] + span {
            padding-left: 25px;
            padding-bottom: 10px;
        }
    </style>
    <script>
        document.getElementById("item_menu1").classList.remove('current');
        document.getElementById("item_menu2").classList.add('current');
    </script>
    <div class="Account-Module DefaultModule container" style="width: 1170px; margin: 40px auto">
        <form method="post" class="row" action="{{ route('customer.order.store') }}">
            @csrf
            <div class="col-md-4">
                <h4>Thông tin sản phẩm</h4>
                <div class="DefaultModule LoginForm Block">
                    <div id="CreateAccountForm" class="Block Moveable Panel CreateAccountForm">
                        <div id="cphMain_ctl00_ctl00_ctl00_pnlInfo">
                            <div class="BlockContent">
                                @foreach (session("cart") as $product)
                                    <div style="margin-bottom: 20px" class="item row">
                                        <div class="col-md-3">
                                            <img alt="item" style="height: 100px" src="{{URL::asset('images/'.$product['img'])}}">
                                        </div>
                                        <div class="col-md-9">
                                            <p>Tên: {{ $product['name'] }}</p>
                                            <p>Giá: {{ number_format($product['price']) }}VNĐ</p>
                                            <p>SL : {{ $product['number'] }}</p>
                                        </div>
                                    </div>
                                @endforeach
                                <div style="margin-top: 30px"><strong>Tổng tiền:</strong> <span><?php  echo number_format(session("total")); ?>VNĐ</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <h4>Thông tin khách hàng</h4>
                <div>
                    @if (count($errors) > 0)
                        @foreach ($errors->all() as $error)
                            <p class="alert alert-danger">
                                {{ $error }}
                            </p>
                        @endforeach
                    @endif
                    <div class="infor">
                        <label>Họ và tên:</label>
                        <input type="text" value="{{ $check->fullname }}" name="fullname" required>
                    </div>
                    <div class="infor">
                        <label>Địa chỉ:</label>
                        <input type="text" value="{{ $check->address }}" name="address" required>
                    </div>
                    <div class="infor">
                        <label>Số điện thoại:</label>
                        <input type="text" value="{{ $check->phone }}" name="phone" required>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="icheckout">
                    <h4>phương thức thanh toán</h4>
                    <div id="onestepcheckout-payment-methods" class="onestepcheckout-payment-methods" style="">
                        <div class="box-payment">
                            <dl class="sp-methods" id="checkout-payment-method-load">
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <label class="radio" for="p_method_vnpay">
                                            <input id="p_method_vnpay" value="vnpay" type="radio" name="method"
                                                   title="Thanh toán qua VNPAY"
                                                   onclick="save_shipping_method(shipping_method_url,0,update_payment_review);"
                                                   checked="checked" class="radio validate-one-required-by-name">
                                            <span>Thanh toán qua VNPAY </span>
                                        </label>
                                        <div id="extra_banktransfer" class="payment-info">
                                            <dd id="container_payment_method_vnpay" class="payment-method">
                                                <fieldset class="form-list" id="payment_form_vnpay" style="">
                                                    <ul>
                                                        <li><img width="60"
                                                                 src="https://static.onoff.vn/skin/frontend/onoff2019/theme/images/vnpay/qr.png"
                                                                 alt="QRCODE"></li>
                                                        <li><img width="60"
                                                                 src="https://static.onoff.vn/skin/frontend/onoff2019/theme/images/vnpay/atm.png"
                                                                 alt="Thẻ ATM và tài khoản ngân hàng"></li>
                                                        <li><img width="60"
                                                                 src="https://static.onoff.vn/skin/frontend/onoff2019/theme/images/vnpay/visa.png"
                                                                 alt="Thẻ thanh toán quốc tế"></li>
                                                    </ul>


                                                    <p style="clear: both; padding-top: 10px; padding-bottom: 20px"><a href="https://onoff.vn/huong-dan-thanh-toan.html"
                                                          target="_blank" rel="noopener noreferrer"
                                                          title="Hướng dẫn thanh toán">Hướng dẫn thanh toán</a></p>

                                                </fieldset>

                                            </dd>
                                        </div>
                                        <label class="radio" for="p_method_cashondelivery">
                                            <input id="p_method_cashondelivery" value="COD" type="radio"
                                                   name="method"
                                                   title="Thanh toán tiền mặt khi nhận hàng - COD"
                                                   onclick="save_shipping_method(shipping_method_url,0,update_payment_review);"
                                                   class="radio validate-one-required-by-name">
                                            <span>Thanh toán tiền mặt khi nhận hàng - COD </span>
                                        </label>
                                    </div>
                                </div>
                            </dl>
                        </div>
                        <div id="control_overlay_payment"
                             style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; z-index: 9998; display: none;"></div>


                    </div>
                    <div class="ajax-loader3" id="ajax-payment"
                         style="float: left; margin-top: 14px; margin-left: 10px; display: none;"></div>
                </div>
            </div>
            <div>
                <input class="btn" style="background-color: #00aced; color: #fff; border: none; width: 80px;" type="submit" name="submit" value="Tiếp tục">
            </div>
        </form>
    </div>
@endsection
