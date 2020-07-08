<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Chọn Phương thức thanh to&#225;n">
    <meta name="keywords" content="Chọn Phương thức thanh to&#225;n">
    <meta name="author" content="Chọn Phương thức thanh to&#225;n">
    <title>Chọn Phương thức thanh to&#225;n</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link href="/css/Styles.min.css" rel="stylesheet" type="text/css"/>
    <style>
        .in{
            display: block;
        }
    </style>
</head>

<body onunload="" class="background-grey">

<div class="payement-method">
    <div class="payment-method__body">


        <div class="section-body-middle-introduce text-center padding-sx-big">
            Chọn Phương thức thanh to&#225;n
        </div>
        <form action="/customer/vnpay" method="post">
            @csrf
            <div class="section-body-middle-form-p1 nopadding no-border">
                <!--Check QR Support-->
                <div class="wrap">
                    <button type="submit" value="QRPAY" id="VNPAYQR" name="paymethod"
                            class="btn-list-option collapsed paytype-qr">
                        Ứng dụng mobile quét mã <span class="vnpay--red">VN</span><span
                            class="vnpay--blue">PAY</span><sup class="vnpay--red">QR</sup>
                    </button>
                </div>
                <!--Check local bank support-->
                <div class="wrap">
                    <button type="button" class="btn-list-option collapsed paytype-localbank" data-toggle="collapse"
                            data-target="#tab1" aria-expanded="false">
                        Thẻ ATM v&#224; t&#224;i khoản ng&#226;n h&#224;ng
                        <div class="triangle-border"></div>
                        <span class="arrow">
                            <img src="/images/ic-arrow.svg">
                        </span>
                    </button>
                    <div id="tab1" class="list-option-collapse collapse" aria-expanded="false" style="height: 1px;">
                        <div class="collapse-wrap">
                                <ul class="list_cart-2 clearfix">
                                    <li>
                                        <label for="VIETCOMBANK">
                                            <input type="submit" value="VIETCOMBANK" id="VIETCOMBANK" name="paymethod"><img
                                                src="/images/vietcombank_logo.png" width="200" height="40"
                                                alt="VIETCOMBANK"/>
                                        </label>
                                    </li>
                                    <li>
                                        <label for="VIETINBANK">
                                            <input type="submit" value="VIETINBANK" id="VIETINBANK" name="paymethod"><img
                                                src="/images/vietinbank_logo.png" width="200" height="40"
                                                alt="VIETINBANK"/>
                                        </label>
                                    </li>
                                    <li>
                                        <label for="BIDV">
                                            <input type="submit" value="BIDV" id="BIDV" name="paymethod"><img
                                                src="/images/bidv_logo.png" width="200" height="40" alt="BIDV"/>
                                        </label>
                                    </li>
                                    <li>
                                        <label for="AGRIBANK">
                                            <input type="submit" value="AGRIBANK" id="AGRIBANK" name="paymethod"><img
                                                src="/images/agribank_logo.png" width="200" height="40"
                                                alt="AGRIBANK"/>
                                        </label>
                                    </li>
                                    <li>
                                        <label for="SACOMBANK">
                                            <input type="submit" value="SACOMBANK" id="SACOMBANK" name="paymethod"><img
                                                src="/images/sacombank_logo.png" width="200" height="40"
                                                alt="SACOMBANK"/>
                                        </label>
                                    </li>
                                    <li>
                                        <label for="TECHCOMBANK">
                                            <input type="submit" value="TECHCOMBANK" id="TECHCOMBANK" name="paymethod"><img
                                                src="/images/techcombank_logo.png" width="200" height="40"
                                                alt="TECHCOMBANK"/>
                                        </label>
                                    </li>
                                    <li>
                                        <label for="ACB">
                                            <input type="submit" value="ACB" id="ACB" name="paymethod"><img
                                                src="/images/acb_logo.png" width="200" height="40" alt="ACB"/>
                                        </label>
                                    </li>
                                    <li>
                                        <label for="VPBANK">
                                            <input type="submit" value="VPBANK" id="VPBANK" name="paymethod"><img
                                                src="/images/vpbank_logo.png" width="200" height="40" alt="VPBANK"/>
                                        </label>
                                    </li>
                                    <li>
                                        <label for="DONGABANK">
                                            <input type="submit" value="DONGABANK" id="DONGABANK" name="paymethod"><img
                                                src="/images/dongabank_logo.png" width="200" height="40"
                                                alt="DONGABANK"/>
                                        </label>
                                    </li>
                                    <li>
                                        <label for="EXIMBANK">
                                            <input type="submit" value="EXIMBANK" id="EXIMBANK" name="paymethod"><img
                                                src="/images/eximbank_logo.png" width="200" height="40"
                                                alt="EXIMBANK"/>
                                        </label>
                                    </li>
                                    <li>
                                        <label for="TPBANK">
                                            <input type="submit" value="TPBANK" id="TPBANK" name="paymethod"><img
                                                src="/images/tpbank_logo.png" width="200" height="40" alt="TPBANK"/>
                                        </label>
                                    </li>
                                    <li>
                                        <label for="NCB">
                                            <input type="submit" value="NCB" id="NCB" name="paymethod"><img
                                                src="/images/ncb_logo.png" width="200" height="40" alt="NCB"/>
                                        </label>
                                    </li>
                                    <li>
                                        <label for="OJB">
                                            <input type="submit" value="OJB" id="OJB" name="paymethod"><img
                                                src="/images/oceanbank_logo.png" width="200" height="40" alt="OJB"/>
                                        </label>
                                    </li>
                                    <li>
                                        <label for="MSBANK">
                                            <input type="submit" value="MSBANK" id="MSBANK" name="paymethod"><img
                                                src="/images/msbank_logo.png" width="200" height="40" alt="MSBANK"/>
                                        </label>
                                    </li>
                                    <li>
                                        <label for="HDBANK">
                                            <input type="submit" value="HDBANK" id="HDBANK" name="paymethod"><img
                                                src="/images/hdbank_logo.png" width="200" height="40" alt="HDBANK"/>
                                        </label>
                                    </li>
                                    <li>
                                        <label for="NAMABANK">
                                            <input type="submit" value="NAMABANK" id="NAMABANK" name="paymethod"><img
                                                src="/images/namabank_logo.png" width="200" height="40"
                                                alt="NAMABANK"/>
                                        </label>
                                    </li>
                                    <li>
                                        <label for="OCB">
                                            <input type="submit" value="OCB" id="OCB" name="paymethod"><img
                                                src="/images/ocb_logo.png" width="200" height="40" alt="OCB"/>
                                        </label>
                                    </li>
                                    <li>
                                        <label for="SCB">
                                            <input type="submit" value="SCB" id="SCB" name="paymethod"><img
                                                src="/images/scb_logo.png" width="200" height="40" alt="SCB"/>
                                        </label>
                                    </li>
                                    <li>
                                        <label for="IVB">
                                            <input type="submit" value="IVB" id="IVB" name="paymethod"><img
                                                src="/images/ivb_logo.png" width="200" height="40" alt="IVB"/>
                                        </label>
                                    </li>
                                    <li>
                                        <label for="ABBANK">
                                            <input type="submit" value="ABBANK" id="ABBANK" name="paymethod"><img
                                                src="/images/abb_logo.png" width="200" height="40" alt="ABBANK"/>
                                        </label>
                                    </li>
                                    <li>
                                        <label for="MBBANK">
                                            <input type="submit" value="MBBANK" id="MBBANK" name="paymethod"><img
                                                src="/images/mbbank_logo.png" width="200" height="40" alt="MBBANK"/>
                                        </label>
                                    </li>
                                    <li>
                                        <label for="SHB">
                                            <input type="submit" value="SHB" id="SHB" name="paymethod"><img
                                                src="/images/shb_logo.png" width="200" height="40" alt="SHB"/>
                                        </label>
                                    </li>
                                    <li>
                                        <label for="BACABANK">
                                            <input type="submit" value="BACABANK" id="BACABANK" name="paymethod"><img
                                                src="/images/bacabank_logo.png" width="200" height="40"
                                                alt="BACABANK"/>
                                        </label>
                                    </li>
                                    <li>
                                        <label for="PVCOMBANK">
                                            <input type="submit" value="PVCOMBANK" id="PVCOMBANK" name="paymethod"><img
                                                src="/images/pvcombank_logo.png" width="200" height="40"
                                                alt="PVCOMBANK"/>
                                        </label>
                                    </li>
                                    <li>
                                        <label for="SAIGONBANK">
                                            <input type="submit" value="SAIGONBANK" id="SAIGONBANK" name="paymethod"><img
                                                src="/images/saigonbank_logo.png" width="200" height="40"
                                                alt="SAIGONBANK"/>
                                        </label>
                                    </li>

                                </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center margin10 section-body-middle-bottom" id="btn-back">
                <button type="button" class="btn btn-default" id="btnCancel" name="btnCancel" onclick="cancel()" style="margin: 0 auto">
                    Quay lại
                </button>
            </div>
        </form>

    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/5.4.0/bootbox.min.js"></script>

<script>
    function cancel()
    {
        var kt = confirm("Bạn muốn huỷ giao dịch?");
        if (kt == true) {
            window.location="http://103.130.218.26/customer/cancelpayment";
        }
    }
</script>
</body>
</html>
