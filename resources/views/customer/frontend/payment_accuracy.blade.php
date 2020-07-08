<!DOCTYPE html>
<!-- saved from url=(0014)about:internet -->
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Thanh toán qua Ngân hàng</title>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Thanh toán qua Ngân hàng BIDV">
    <meta name="keywords" content="Thanh toán qua Ngân hàng BIDV">
    <meta name="author" content="Thanh toán qua Ngân hàng BIDV">

    <link href="/libraries/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="/libraries/vnpayqr/Styles.min.css" rel="stylesheet" type="text/css">
    <link href="/libraries/bootstrap-datetimepicker.min.css" rel="stylesheet">

</head>

<body onunload="">
<header id="header" class="clearfix border-radius-header">
    <div class="container clearfix">
    </div>
</header>
<div id="container" class="container bs-docs-container clearfix">
    <div class="alert alert-info text-center alert-dismissible"><a
            href="https://pay.vnpay.vn/Bidv/Transaction/Index.html?token=d7f1342b2e2c413ebc868f1fff126e30" class="close"
            data-dismiss="alert" aria-label="close">×</a>Quý khách vui lòng không tắt trình duyệt cho đến khi nhận được
        kết quả giao dịch trên website. Xin cảm ơn!
    </div>
    @if(isset($error))
        <script !src="">
            alert('Mã xác thực không chính xác, đã gửi lại mã khác, yêu cầu nhập lại');
        </script>
    @endif

    <div class="row ">
        <div class="col-md-12 pull-right">
            <div class="box box-form">
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane fade in active" id="cif">
                        <form action="/customer/atm/accuracy"
                              method="post" class="bv-form">
                            @csrf
                            <div class="form-group clearfix has-feedback">
                                <label class="sr-only" for="">Mã xác thực</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                    </div>
                                    <input type="text" class="form-control" name="accuracy" id="accuracy"
                                           placeholder="Mã xác thực" maxlength="10" minlength="5" data-bv-field="accuracy" required>
                                </div></div>
                            <div class="form-group clearfix">
                                <input type="submit" id="btnSubmit" name="btnSubmit" value="Xác thực"
                                       class="btn btn-primary form-control">
                            </div>
                            <div class="or">
                                <span>Hoặc</span>
                            </div>
                            <div class="form-group btn-cancel clearfix" id="divCancel3">
                                <button type="button" class="btn btn-default form-control" id="btnCancel" onclick="cancel()"
                                        name="btnCancel">Hủy
                                </button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
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
