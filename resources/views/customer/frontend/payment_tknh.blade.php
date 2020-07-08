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


    <div class="row ">
        <div class="col-md-12 pull-right">
            <div class="box box-form">
                <div class="title">
                    <h2>Thanh toán qua Ngân hàng {{ $atm->name }}</h2>
                    <div class="icon-title"></div>
                </div>

                <ul class="nav nav-tabs" role="tablist" id="bidvTabs">
                    <li role="presentation" class=""><a
                            href="https://pay.vnpay.vn/Bidv/Transaction/Index.html?token=d7f1342b2e2c413ebc868f1fff126e30#card"
                            aria-controls="card" role="tab" data-toggle="tab" aria-expanded="false">Sử dụng Thẻ</a></li>
                    <li role="presentation" class=""><a
                            href="https://pay.vnpay.vn/Bidv/Transaction/Index.html?token=d7f1342b2e2c413ebc868f1fff126e30#account"
                            aria-controls="account" role="tab" data-toggle="tab" aria-expanded="false">Tài khoản</a>
                    </li>
                    <li role="presentation" class="active"><a
                            href="https://pay.vnpay.vn/Bidv/Transaction/Index.html?token=d7f1342b2e2c413ebc868f1fff126e30#cif"
                            aria-controls="cif" role="tab" data-toggle="tab" aria-expanded="true">Tên đăng nhập</a></li>

                </ul>

                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane fade" id="card">
                        <form action="/customer/atm/accuracy" autocomplete="off" id="formATM"
                              method="post" novalidate="novalidate" class="bv-form">
                            @csrf
                            <div class="form-group has-feedback">
                                <label class="sr-only" for="card_number">Số thẻ</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <svg class="color_theme" version="1.1" id="Layer_1"
                                             xmlns="http://www.w3.org/2000/svg"
                                             xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                             viewBox="0 0 24 24" style="enable-background: new 0 0 24 24;"
                                             xml:space="preserve">
                                    <path class="color_theme" d="M1.3,3.6h21.3c0.7,0,1.3,0.7,1.3,1.6v14.5c0,0.9-0.6,1.6-1.3,1.6H1.3c-0.7,0-1.3-0.7-1.3-1.6V5.2
        C0,4.4,0.6,3.6,1.3,3.6L1.3,3.6z M0.9,6.9h22.2V6c0-0.8-0.5-1.4-1.2-1.4H2.1C1.4,4.6,0.9,5.2,0.9,6V6.9L0.9,6.9z M23.1,11.4H0.9v7.5
        c0,0.8,0.5,1.4,1.2,1.4h19.9c0.7,0,1.2-0.6,1.2-1.4V11.4z"></path>
                                </svg>
                                    </div>
                                    <input type="hidden" class="form-control" name="card_number" id="card_number"
                                           placeholder="Số thẻ" maxlength="19" data-bv-field="card_number">
                                    <div class="input-group-addon after_input"><img
                                            src="/images/{{ $atm->image }}"
                                            height="36"></div>

                                </div>
                                <i class="form-control-feedback" data-bv-icon-for="card_number"
                                   style="display: none; top: 0px; z-index: 100;"></i><i class="form-control-feedback"
                                                                                         data-bv-icon-for="card_number_mask"
                                                                                         style="display: none; top: 0px; z-index: 100;"></i>
                                <small class="help-block" data-bv-validator="notEmpty" data-bv-for="card_number_mask"
                                       data-bv-result="NOT_VALIDATED" style="display: none;">Bạn chưa nhập số
                                    thẻ</small><small class="help-block" data-bv-validator="stringLength"
                                                      data-bv-for="card_number_mask" data-bv-result="NOT_VALIDATED"
                                                      style="display: none;">Số thẻ hợp lệ có độ dài từ 16 - 19 chữ
                                    số</small><small class="help-block" data-bv-validator="callback"
                                                     data-bv-for="card_number_mask" data-bv-result="NOT_VALIDATED"
                                                     style="display: none;">Bạn chưa nhập số thẻ</small><small
                                    class="help-block" data-bv-validator="stringLength" data-bv-for="card_number"
                                    data-bv-result="NOT_VALIDATED" style="display: none;">Please enter a value with
                                    valid length</small></div>
                            <div class="form-group clearfix has-feedback">
                                <label class="sr-only" for="">Tên chủ thẻ (không dấu)</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <svg class="color_theme" version="1.1" id="Layer_3"
                                             xmlns="http://www.w3.org/2000/svg"
                                             xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                             viewBox="0 0 64 64" style="enable-background: new 0 0 64 64;"
                                             xml:space="preserve">
                                    <g class="color_theme">
                                        <circle cx="31.9" cy="19.4" r="14.4"></circle>
                                        <path d="M63.8,52c0-10.5-6.3-19.6-15.4-23.6c-2.6,6.6-9,11.3-16.5,11.3S18,35,15.4,28.4C6.3,32.4,0,41.5,0,52v7h63.8
            V52z"></path>
                                    </g>
                                </svg>
                                    </div>
                                    <input type="text" class="form-control" name="card_holder_atm" id="card_holder_atm"
                                           placeholder="Tên chủ thẻ (không dấu)" maxlength="40"
                                           data-bv-field="card_holder_atm">
                                </div>
                                <i class="form-control-feedback" data-bv-icon-for="card_holder_atm"
                                   style="display: none; top: 0px; z-index: 100;"></i>
                                <small class="help-block" data-bv-validator="notEmpty" data-bv-for="card_holder_atm"
                                       data-bv-result="NOT_VALIDATED" style="display: none;">Bạn chưa nhập Tên chủ
                                    thẻ</small><small class="help-block" data-bv-validator="stringLength"
                                                      data-bv-for="card_holder_atm" data-bv-result="NOT_VALIDATED"
                                                      style="display: none;">Tên chủ thẻ có độ dài không quá 40 ký
                                    tự</small><small class="help-block" data-bv-validator="regexp"
                                                     data-bv-for="card_holder_atm" data-bv-result="NOT_VALIDATED"
                                                     style="display: none;">Tên chủ thẻ không hợp lệ</small></div>
                            <div class="form-group clearfix">
                                Điều kiện sử dụng dịch vụ
                                <div class="popover-markup" style="display: inline;">
                                    <a href="javascript:" class="trigger" data-original-title="" title="">
                                        <img src="/images/payment/ic_ask.png" width="20"
                                             height="20" alt="ask">
                                    </a>
                                    <div class="content hide">
                                        <div class="popoverContentContainer">
                                            <strong>Điều kiện sử dụng dịch vụ: </strong> <br>
                                            - Khách hàng có tài khoản tiền gửi thanh toán và đã đăng ký sử dụng dịch vụ
                                            {{ $atm->name }} Online hoặc dịch vụ Thanh toán hoá đơn trực tuyến {{ $atm->name }}.<br>
                                            - Tài khoản tiền gửi thanh toán đang hoạt động và có đủ số dư thanh
                                            toán.<br>
                                            <strong>Đăng ký sử dụng: </strong> <br>
                                            - Đăng ký tại Quầy giao dịch {{ $atm->name }} trên toàn quốc hoặc đăng ký trực tuyến
                                            dịch vụ
                                            <strong>Hotline hỗ trợ: </strong> 19009247 / 0422200588
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group clearfix">
                                <input type="submit" id="btnSubmit" name="btnSubmit" value="Xác thực"
                                       class="btn btn-primary form-control">
                                <input class="hidden" name="card_type" value="804">
                                <input type="hidden" value="d7f1342b2e2c413ebc868f1fff126e30" name="ordertoken"
                                       id="ordertoken">
                            </div>
                            <div class="or">
                                <span>Hoặc</span>
                            </div>
                            <div class="form-group btn-cancel clearfix" id="divCancel1">
                                <button type="button" class="btn btn-default form-control" id="btnCancel" onclick="cancel()"
                                        name="btnCancel">Hủy
                                </button>
                            </div>
                        </form>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="account">
                        <form action="/customer/atm/accuracy" autocomplete="off" id="formAcc"
                              method="post" novalidate="novalidate" class="bv-form">
                            @csrf
                            <div class="form-group clearfix has-feedback">
                                <label class="sr-only" for="card_number">Số tài khoản</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <svg class="color_theme" version="1.1" id="Layer_1"
                                             xmlns="http://www.w3.org/2000/svg"
                                             xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                             viewBox="0 0 24 24" style="enable-background: new 0 0 24 24;"
                                             xml:space="preserve">
                                    <path class="color_theme" d="M1.3,3.6h21.3c0.7,0,1.3,0.7,1.3,1.6v14.5c0,0.9-0.6,1.6-1.3,1.6H1.3c-0.7,0-1.3-0.7-1.3-1.6V5.2
        C0,4.4,0.6,3.6,1.3,3.6L1.3,3.6z M0.9,6.9h22.2V6c0-0.8-0.5-1.4-1.2-1.4H2.1C1.4,4.6,0.9,5.2,0.9,6V6.9L0.9,6.9z M23.1,11.4H0.9v7.5
        c0,0.8,0.5,1.4,1.2,1.4h19.9c0.7,0,1.2-0.6,1.2-1.4V11.4z"></path>
                                </svg>
                                    </div>
                                    <input type="text" class="form-control" name="account_number" id="card_number"
                                           placeholder="Số tài khoản" maxlength="20" data-bv-field="card_number">
                                    <div class="input-group-addon after_input"><img
                                            src="/images/{{ $atm->image }}"
                                            height="36" alt="bank"></div>
                                </div>
                                <i class="form-control-feedback" data-bv-icon-for="card_number"
                                   style="display: none; top: 0px; z-index: 100;"></i>
                                <small class="help-block" data-bv-validator="notEmpty" data-bv-for="card_number"
                                       data-bv-result="NOT_VALIDATED" style="display: none;">Bạn chưa nhập Số tài
                                    khoản</small><small class="help-block" data-bv-validator="stringLength"
                                                        data-bv-for="card_number" data-bv-result="NOT_VALIDATED"
                                                        style="display: none;">Please enter a value with valid
                                    length</small></div>
                            <div class="form-group clearfix has-feedback">
                                <label class="sr-only" for="card_holder_acc">Tên chủ tài khoản (không dấu)</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <svg class="color_theme" version="1.1" id="Layer_3"
                                             xmlns="http://www.w3.org/2000/svg"
                                             xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                             viewBox="0 0 64 64" style="enable-background: new 0 0 64 64;"
                                             xml:space="preserve">
                                    <g class="color_theme">
                                        <circle cx="31.9" cy="19.4" r="14.4"></circle>
                                        <path d="M63.8,52c0-10.5-6.3-19.6-15.4-23.6c-2.6,6.6-9,11.3-16.5,11.3S18,35,15.4,28.4C6.3,32.4,0,41.5,0,52v7h63.8
            V52z"></path>
                                    </g>
                                </svg>
                                    </div>
                                    <input type="text" class="form-control" name="card_holder_acc" id="card_holder_acc"
                                           placeholder="Tên chủ tài khoản (không dấu)" maxlength="35"
                                           data-bv-field="card_holder_acc">
                                </div>
                                <i class="form-control-feedback" data-bv-icon-for="card_holder_acc"
                                   style="display: none; top: 0px; z-index: 100;"></i>
                                <small class="help-block" data-bv-validator="notEmpty" data-bv-for="card_holder_acc"
                                       data-bv-result="NOT_VALIDATED" style="display: none;">Bạn chưa nhập Tên chủ tài
                                    khoản</small><small class="help-block" data-bv-validator="regexp"
                                                        data-bv-for="card_holder_acc" data-bv-result="NOT_VALIDATED"
                                                        style="display: none;">Tên chủ tài khoản không chính xác</small><small
                                    class="help-block" data-bv-validator="stringLength" data-bv-for="card_holder_acc"
                                    data-bv-result="NOT_VALIDATED" style="display: none;">Tên chủ tài khoản không chính
                                    xác</small></div>
                            <div class="form-group clearfix">
                                Điều kiện sử dụng dịch vụ
                                <div class="popover-markup" style="display: inline;">
                                    <a href="javascript:" class="trigger" data-original-title="" title="">
                                        <img src="/images/payment/ic_ask.png" width="20"
                                             height="20" alt="ask">
                                    </a>
                                    <div class="content hide">
                                        <div class="popoverContentContainer">
                                            <strong>Điều kiện sử dụng dịch vụ: </strong> <br>
                                            - Khách hàng có tài khoản tiền gửi thanh toán và đã đăng ký sử dụng dịch vụ
                                            {{ $atm->name }} Online hoặc dịch vụ Thanh toán hoá đơn trực tuyến {{ $atm->name }}.<br>
                                            - Tài khoản tiền gửi thanh toán đang hoạt động và có đủ số dư thanh
                                            toán.<br>
                                            <strong>Đăng ký sử dụng: </strong> <br>
                                            - Đăng ký tại Quầy giao dịch {{ $atm->name }} trên toàn quốc hoặc đăng ký trực tuyến
                                            dịch vụ <br>
                                            <strong>Hotline hỗ trợ: </strong> 19009247 / 0422200588
                                        </div>
                                    </div>
                                </div>


                            </div>
                            <div class="form-group clearfix">
                                <input type="submit" id="btnSubmit" name="btnSubmit" value="Xác thực"
                                       class="btn btn-primary form-control">
                                <input class="hidden" name="card_type" value="805">
                                <input type="hidden" value="d7f1342b2e2c413ebc868f1fff126e30" name="ordertoken"
                                       id="ordertoken">
                            </div>
                            <div class="or">
                                <span>Hoặc</span>
                            </div>
                            <div class="form-group btn-cancel clearfix" id="divCancel2">
                                <button type="button" class="btn btn-default form-control" id="btnCancel" onclick="cancel()"
                                        name="btnCancel">Hủy
                                </button>
                            </div>
                        </form>
                    </div>
                    <div role="tabpanel" class="tab-pane fade in active" id="cif">
                        <form action="/customer/atm/accuracy" autocomplete="off" id="formCIF"
                              method="post" novalidate="novalidate" class="bv-form">
                            @csrf
                            <div class="form-group clearfix has-feedback">
                                <label class="sr-only" for="">Tên đăng nhập</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <svg class="color_theme" version="1.1" id="Capa_1"
                                             xmlns="http://www.w3.org/2000/svg"
                                             xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                             viewBox="-348 150.5 261.5 261.5"
                                             style="enable-background: new -348 150.5 261.5 261.5;"
                                             xml:space="preserve">
                                    <g class="color_theme">
                                        <path d="M-310,312.2c0,4.1,3.4,7.5,7.5,7.5s7.5-3.4,7.5-7.5v-58.6c0-3-1.8-5.8-4.6-6.9c-2.8-1.2-6-0.5-8.2,1.6l-19,19
            c-2.9,2.9-2.9,7.7,0,10.6c2.9,2.9,7.7,2.9,10.6,0l6.2-6.2V312.2z"></path>
                                        <path d="M-265.7,182.3l6.2-6.2v40.5c0,4.1,3.4,7.5,7.5,7.5c4.1,0,7.5-3.4,7.5-7.5V158c0-3-1.8-5.8-4.6-6.9c-2.8-1.2-6-0.5-8.2,1.6
            l-19,19c-2.9,2.9-2.9,7.7,0,10.6C-273.4,185.2-268.6,185.2-265.7,182.3z"></path>
                                        <path d="M-180.2,246.6c-2.8-1.2-6-0.5-8.2,1.6l-19,19c-2.9,2.9-2.9,7.7,0,10.6c2.9,2.9,7.7,2.9,10.6,0l6.2-6.2v40.5
            c0,4.1,3.4,7.5,7.5,7.5s7.5-3.4,7.5-7.5v-58.6C-175.6,250.5-177.4,247.8-180.2,246.6z"></path>
                                        <path d="M-212.8,338.9c-2.8-1.2-6-0.5-8.2,1.6l-19,19c-2.9,2.9-2.9,7.7,0,10.6c2.9,2.9,7.7,2.9,10.6,0l6.2-6.2v22.2
            c0,4.1,3.4,7.5,7.5,7.5s7.5-3.4,7.5-7.5v-40.3C-208.2,342.8-210,340.1-212.8,338.9z"></path>
                                        <path d="M-225.5,293.9v-22.1c0-14.2-11.6-25.8-25.8-25.8h-0.4c-14.2,0-25.8,11.6-25.8,25.8v22.1c0,14.2,11.6,25.8,25.8,25.8h0.4
            C-237.1,319.7-225.5,308.1-225.5,293.9z M-240.5,293.9c0,5.9-4.8,10.8-10.8,10.8h-0.4c-5.9,0-10.8-4.8-10.8-10.8v-22.1
            c0-5.9,4.8-10.8,10.8-10.8h0.4c5.9,0,10.8,4.8,10.8,10.8V293.9z"></path>
                                        <path d="M-131.3,246.1h-0.4c-14.2,0-25.8,11.6-25.8,25.8v22.1c0,14.2,11.6,25.8,25.8,25.8h0.4c14.2,0,25.8-11.6,25.8-25.8v-22.1
            C-105.5,257.6-117,246.1-131.3,246.1z M-120.5,293.9c0,5.9-4.8,10.8-10.8,10.8h-0.4c-5.9,0-10.8-4.8-10.8-10.8v-22.1
            c0-5.9,4.8-10.8,10.8-10.8h0.4c5.9,0,10.8,4.8,10.8,10.8V293.9z"></path>
                                        <path d="M-200.8,150.5h-0.4c-14.2,0-25.8,11.6-25.8,25.8v22.1c0,14.2,11.6,25.8,25.8,25.8h0.4c4.1,0,7.5-3.4,7.5-7.5
            s-3.4-7.5-7.5-7.5h-0.4c-5.9,0-10.8-4.8-10.8-10.8v-22.1c0-5.9,4.8-10.8,10.8-10.8h0.4c5.9,0,10.8,4.8,10.8,10.8
            c0,4.1,3.4,7.5,7.5,7.5s7.5-3.4,7.5-7.5C-175,162.1-186.6,150.5-200.8,150.5z"></path>
                                        <path d="M-131.3,150.5h-0.4c-14.2,0-25.8,11.6-25.8,25.8v22.1c0,14.2,11.6,25.8,25.8,25.8h0.4c14.2,0,25.8-11.6,25.8-25.8v-22.1
            C-105.5,162.1-117,150.5-131.3,150.5z M-120.5,198.3c0,5.9-4.8,10.8-10.8,10.8h-0.4c-5.9,0-10.8-4.8-10.8-10.8v-22.1
            c0-5.9,4.8-10.8,10.8-10.8h0.4c5.9,0,10.8,4.8,10.8,10.8V198.3z"></path>
                                        <path d="M-286.3,338.4h-0.4c-14.2,0-25.8,11.6-25.8,25.8v22.1c0,14.2,11.6,25.8,25.8,25.8h0.4c14.2,0,25.8-11.6,25.8-25.8v-22.1
            C-260.5,349.9-272.1,338.4-286.3,338.4z M-275.5,386.2c0,5.9-4.8,10.8-10.8,10.8h-0.4c-5.9,0-10.8-4.8-10.8-10.8v-22.1
            c0-5.9,4.8-10.8,10.8-10.8h0.4c5.9,0,10.8,4.8,10.8,10.8V386.2z"></path>
                                    </g>
                                </svg>
                                    </div>
                                    <input type="text" class="form-control" name="user_name" id="user_name"
                                           placeholder="Tên đăng nhập" maxlength="35" data-bv-field="user_name">
                                    <div class="input-group-addon after_input"><img
                                            src="/images/{{ $atm->image }}"
                                            height="36" alt="bank"></div>
                                </div>
                                <i class="form-control-feedback" data-bv-icon-for="user_name"
                                   style="display: none; top: 0px; z-index: 100;"></i>
                                <small class="help-block" data-bv-validator="notEmpty" data-bv-for="user_name"
                                       data-bv-result="NOT_VALIDATED" style="display: none;">Bạn chưa nhập Tên đăng
                                    nhập</small><small class="help-block" data-bv-validator="stringLength"
                                                       data-bv-for="user_name" data-bv-result="NOT_VALIDATED"
                                                       style="display: none;">Tên đăng nhập không chính xác</small>
                            </div>
                            <div class="form-group clearfix has-feedback">
                                <label class="sr-only" for="">Họ và tên</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <svg class="color_theme" version="1.1" id="Layer_3"
                                             xmlns="http://www.w3.org/2000/svg"
                                             xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                             viewBox="0 0 64 64" style="enable-background: new 0 0 64 64;"
                                             xml:space="preserve">
                                    <g class="color_theme">
                                        <circle cx="31.9" cy="19.4" r="14.4"></circle>
                                        <path d="M63.8,52c0-10.5-6.3-19.6-15.4-23.6c-2.6,6.6-9,11.3-16.5,11.3S18,35,15.4,28.4C6.3,32.4,0,41.5,0,52v7h63.8V52z"></path>
                                    </g>
                                </svg>
                                    </div>
                                    <input type="text" class="form-control" name="full_name" id="full_name"
                                           placeholder="Họ và tên (không dấu)" maxlength="35" data-bv-field="full_name">
                                </div>
                                <i class="form-control-feedback" data-bv-icon-for="full_name"
                                   style="display: none; top: 0px; z-index: 100;"></i>
                                <small class="help-block" data-bv-validator="notEmpty" data-bv-for="full_name"
                                       data-bv-result="NOT_VALIDATED" style="display: none;">Bạn chưa nhập Họ và
                                    tên</small><small class="help-block" data-bv-validator="regexp"
                                                      data-bv-for="full_name" data-bv-result="NOT_VALIDATED"
                                                      style="display: none;">Họ và tên không chính xác</small><small
                                    class="help-block" data-bv-validator="stringLength" data-bv-for="full_name"
                                    data-bv-result="NOT_VALIDATED" style="display: none;">Họ và tên không chính
                                    xác</small></div>
                            <div class="form-group clearfix">
                                Điều kiện sử dụng dịch vụ
                                <div class="popover-markup" style="display: inline;">
                                    <a href="javascript:" class="trigger" data-original-title="" title="">
                                        <img src="/images/payment/ic_ask.png" width="20"
                                             height="20" alt="ask">
                                    </a>
                                    <div class="content hide">
                                        <div class="popoverContentContainer">
                                            <strong>Điều kiện sử dụng dịch vụ: </strong> <br>
                                            - Khách hàng có tài khoản tiền gửi thanh toán và đã đăng ký sử dụng dịch vụ
                                            {{ $atm->name }} Online hoặc dịch vụ Thanh toán hoá đơn trực tuyến {{ $atm->name }}.<br>
                                            - Tài khoản tiền gửi thanh toán đang hoạt động và có đủ số dư thanh
                                            toán.<br>
                                            <strong>Đăng ký sử dụng: </strong> <br>
                                            - Đăng ký tại Quầy giao dịch {{ $atm->name }} trên toàn quốc hoặc đăng ký trực tuyến
                                            dịch vụ <br>
                                            <strong>Hotline hỗ trợ: </strong> 19009247 / 0422200588
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="form-group clearfix">
                                <input type="submit" id="btnSubmit" name="btnSubmit" value="Xác thực"
                                       class="btn btn-primary form-control">
                                <input class="hidden" name="card_type" value="806">
                                <input type="hidden" value="d7f1342b2e2c413ebc868f1fff126e30" name="ordertoken"
                                       id="ordertoken">
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

<!--AjaxLoading-->
<div class="overlay" id="loading" style="display: none">
    <div class="loading"></div>
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

<script src="/libraries/jquery.min.js"></script>
<script src="/libraries/bootstrap.min.js"></script>
<script src="/libraries/bootstrapValidator.min.js"></script>
<script src="/libraries/bootbox.min.js"></script>
<script src="/libraries/jquery.countdown.min.js"></script>

<script src="/libraries/moment.js"></script>
<script src="/libraries/bootstrap-datetimepicker.js"></script>
<script>
    $(function () {
        $('.popover-markup > .trigger')
            .popover({
                html: true,
                placement: "bottom",
                title: function () {
                    return $(this).parent().find('.head').html();
                },
                content: function () {
                    return $(this).parent().find('.content').html();
                },
                template:
                    '<div class="popover dashboardPopover"><div class="arrow"></div><div class="popover-inner"><h3 class="popover-title"></h3><div class="popover-content"></div></div></div>'
            });
    });
</script>

<script src="/libraries/jquery.signalR-2.4.1.min.js"></script>
<script src="/libraries/datetab.js"></script>
<script src="/libraries/velocity.min.js"></script>
<script src="/libraries/velocity.ui.min.js"></script>
<script src="/libraries/jquery.cardvalidate.js"></script>
<script type="text/javascript">
    function valid_credit_card(cardNumber) {
        // accept only digits, dashes or spaces
        if (/[^0-9-\s]+/.test(cardNumber)) return false;
        // The Luhn Algorithm. It's so pretty.
        var nCheck = 0, nDigit = 0, bEven = false;
        cardNumber = cardNumber.replace(/\D/g, "");
        for (var n = cardNumber.length - 1; n >= 0; n--) {
            var cDigit = cardNumber.charAt(n),
                nDigit = parseInt(cDigit, 10);
            if (bEven) {
                if ((nDigit *= 2) > 9) nDigit -= 9;
            }
            nCheck += nDigit;
            bEven = !bEven;
        }
        // console.log('Value:' + cardNumber + ' , result=' + ((nCheck % 10) === 0));
        return (nCheck % 10) == 0;
    }
</script>

<script type="text/javascript">

    var bincode = {};
    bincode['970400'] = 'SAIGONBANK';
    bincode['970401'] = 'MHB';
    bincode['970403'] = 'SACOMBANK';
    bincode['970405'] = 'AGRIBANK';
    bincode['970406'] = 'DONGABANK';
    bincode['970407'] = 'TECHCOMBANK';
    bincode['970408'] = 'GPBANK';
    bincode['970409'] = 'BACABANK';
    bincode['970410'] = 'SCBANK';
    bincode['970412'] = 'PVCOMBANK';
    bincode['970414'] = 'OCEANBANK';
    bincode['970415'] = 'VIETINBANK';
    bincode['970416'] = 'ACB';
    bincode['970417'] = 'SACOMBANK';
    bincode['970418'] = 'BIDV';
    bincode['970419'] = 'NCB';
    bincode['970421'] = 'VRB';
    bincode['970422'] = 'MBBANK';
    bincode['970423'] = 'TPBANK';
    bincode['970424'] = 'SHINHANBANK';
    bincode['970425'] = 'ABBANK';
    bincode['970426'] = 'MSBANK';
    bincode['970427'] = 'VIETABANK';
    bincode['970428'] = 'NAMABANK';
    bincode['970429'] = 'SCB';
    bincode['970430'] = 'PGBANK';
    bincode['970431'] = 'EXIMBANK';
    bincode['970432'] = 'VPBANK';
    bincode['970433'] = 'VIETBANK';
    bincode['970434'] = 'IVB';
    bincode['970436'] = 'VIETCOMBANK';
    bincode['970437'] = 'HDBANK';
    bincode['970438'] = 'BAOVIETBANK';
    bincode['970439'] = 'VIDBANK';
    bincode['970440'] = 'SEABANK';
    bincode['970441'] = 'VIB';
    bincode['970442'] = 'HLBANK';
    bincode['970443'] = 'SHB';
    bincode['970444'] = 'VCBANK';
    bincode['970446'] = 'COOPERBANK';
    bincode['970448'] = 'OCB';
    bincode['970449'] = 'LIENVIETBANK';
    bincode['970451'] = 'MDB';
    bincode['970452'] = 'KIENLONGBANK';
    bincode['404152'] = 'VISA';
    bincode['404169'] = 'VISA';
    bincode['404184'] = 'VISA';
    bincode['404185'] = 'VISA';
    bincode['405573'] = 'VISA';
    bincode['406771'] = 'VISA';
    bincode['408904'] = 'VISA';
    bincode['411153'] = 'VISA';
    bincode['412975'] = 'VISA';
    bincode['412976'] = 'VISA';
    bincode['412977'] = 'VISA';
    bincode['414143'] = 'VISA';
    bincode['414152'] = 'VISA';
    bincode['418159'] = 'VISA';
    bincode['419661'] = 'VISA';
    bincode['419662'] = 'VISA';
    bincode['421494'] = 'VISA';
    bincode['421595'] = 'VISA';
    bincode['422075'] = 'VISA';
    bincode['422076'] = 'VISA';
    bincode['422094'] = 'VISA';
    bincode['422109'] = 'VISA';
    bincode['422149'] = 'VISA';
    bincode['422150'] = 'VISA';
    bincode['422151'] = 'VISA';
    bincode['423960'] = 'VISA';
    bincode['426088'] = 'VISA';
    bincode['426671'] = 'VISA';
    bincode['426926'] = 'VISA';
    bincode['428310'] = 'VISA';
    bincode['428472'] = 'VISA';
    bincode['428695'] = 'VISA';
    bincode['429418'] = 'VISA';
    bincode['429683'] = 'VISA';
    bincode['431742'] = 'VISA';
    bincode['433286'] = 'VISA';
    bincode['436308'] = 'VISA';
    bincode['436309'] = 'VISA';
    bincode['436361'] = 'VISA';
    bincode['436438'] = 'VISA';
    bincode['436445'] = 'VISA';
    bincode['436467'] = 'VISA';
    bincode['436468'] = 'VISA';
    bincode['436469'] = 'VISA';
    bincode['436470'] = 'VISA';
    bincode['436471'] = 'VISA';
    bincode['436545'] = 'VISA';
    bincode['436546'] = 'VISA';
    bincode['436547'] = 'VISA';
    bincode['436548'] = 'VISA';
    bincode['436599'] = 'VISA';
    bincode['436762'] = 'VISA';
    bincode['437374'] = 'VISA';
    bincode['437420'] = 'VISA';
    bincode['437421'] = 'VISA';
    bincode['437422'] = 'VISA';
    bincode['437423'] = 'VISA';
    bincode['437424'] = 'VISA';
    bincode['437508'] = 'VISA';
    bincode['437767'] = 'VISA';
    bincode['437768'] = 'VISA';
    bincode['437841'] = 'VISA';
    bincode['437893'] = 'VISA';
    bincode['437894'] = 'VISA';
    bincode['437895'] = 'VISA';
    bincode['439198'] = 'VISA';
    bincode['442415'] = 'VISA';
    bincode['442416'] = 'VISA';
    bincode['445093'] = 'VISA';
    bincode['445094'] = 'VISA';
    bincode['450180'] = 'VISA';
    bincode['450181'] = 'VISA';
    bincode['450482'] = 'VISA';
    bincode['450798'] = 'VISA';
    bincode['452999'] = 'VISA';
    bincode['457271'] = 'VISA';
    bincode['457319'] = 'VISA';
    bincode['457327'] = 'VISA';
    bincode['457328'] = 'VISA';
    bincode['457353'] = 'VISA';
    bincode['457485'] = 'VISA';
    bincode['457526'] = 'VISA';
    bincode['457560'] = 'VISA';
    bincode['457561'] = 'VISA';
    bincode['457573'] = 'VISA';
    bincode['457575'] = 'VISA';
    bincode['457600'] = 'VISA';
    bincode['458440'] = 'VISA';
    bincode['458584'] = 'VISA';
    bincode['459804'] = 'VISA';
    bincode['459805'] = 'VISA';
    bincode['459817'] = 'VISA';
    bincode['459818'] = 'VISA';
    bincode['461136'] = 'VISA';
    bincode['461137'] = 'VISA';
    bincode['461138'] = 'VISA';
    bincode['461139'] = 'VISA';
    bincode['461140'] = 'VISA';
    bincode['461932'] = 'VISA';
    bincode['462478'] = 'VISA';
    bincode['462479'] = 'VISA';
    bincode['462842'] = 'VISA';
    bincode['462843'] = 'VISA';
    bincode['462844'] = 'VISA';
    bincode['462881'] = 'VISA';
    bincode['464932'] = 'VISA';
    bincode['466236'] = 'VISA';
    bincode['466237'] = 'VISA';
    bincode['466238'] = 'VISA';
    bincode['466243'] = 'VISA';
    bincode['466582'] = 'VISA';
    bincode['466583'] = 'VISA';
    bincode['466584'] = 'VISA';
    bincode['466585'] = 'VISA';
    bincode['467078'] = 'VISA';
    bincode['467079'] = 'VISA';
    bincode['467964'] = 'VISA';
    bincode['468789'] = 'VISA';
    bincode['468945'] = 'VISA';
    bincode['468946'] = 'VISA';
    bincode['468947'] = 'VISA';
    bincode['468948'] = 'VISA';
    bincode['469374'] = 'VISA';
    bincode['469654'] = 'VISA';
    bincode['469655'] = 'VISA';
    bincode['489517'] = 'VISA';
    bincode['489516'] = 'VISA';
    bincode['489518'] = 'VISA';
    bincode['550796'] = 'MASTERCARD';
    bincode['516101'] = 'MASTERCARD';
    bincode['418560'] = 'VISA';
    bincode['403686'] = 'VISA';
    bincode['513892'] = 'MASTERCARD';
    bincode['420003'] = 'VISA';
    bincode['356481'] = 'JCB';
    bincode['469672'] = 'VISA';
    bincode['548936'] = 'MASTERCARD';
    bincode['549054'] = 'MASTERCARD';
    bincode['549244'] = 'MASTERCARD';
    bincode['549794'] = 'MASTERCARD';
    bincode['550017'] = 'MASTERCARD';
    bincode['554571'] = 'MASTERCARD';
    bincode['554602'] = 'MASTERCARD';
    bincode['559073'] = 'MASTERCARD';
    bincode['559312'] = 'MASTERCARD';
    bincode['542726'] = 'MASTERCARD';
    bincode['538742'] = 'MASTERCARD';
    bincode['517416'] = 'MASTERCARD';
    bincode['548566'] = 'MASTERCARD';
    bincode['469673'] = 'VISA';
    bincode['469674'] = 'VISA';
    bincode['469676'] = 'VISA';
    bincode['469678'] = 'VISA';
    bincode['469682'] = 'VISA';
    bincode['469683'] = 'VISA';
    bincode['469684'] = 'VISA';
    bincode['469685'] = 'VISA';
    bincode['470548'] = 'VISA';
    bincode['470549'] = 'VISA';
    bincode['470570'] = 'VISA';
    bincode['471249'] = 'VISA';
    bincode['472074'] = 'VISA';
    bincode['472075'] = 'VISA';
    bincode['472674'] = 'VISA';
    bincode['474815'] = 'VISA';
    bincode['474825'] = 'VISA';
    bincode['476632'] = 'VISA';
    bincode['476633'] = 'VISA';
    bincode['476636'] = 'VISA';
    bincode['478082'] = 'VISA';
    bincode['478097'] = 'VISA';
    bincode['479138'] = 'VISA';
    bincode['479139'] = 'VISA';
    bincode['479140'] = 'VISA';
    bincode['483542'] = 'VISA';
    bincode['484803'] = 'VISA';
    bincode['484804'] = 'VISA';
    bincode['484805'] = 'VISA';
    bincode['484806'] = 'VISA';
    bincode['486265'] = 'VISA';
    bincode['486279'] = 'VISA';
    bincode['486280'] = 'VISA';
    bincode['486282'] = 'VISA';
    bincode['486283'] = 'VISA';
    bincode['486383'] = 'VISA';
    bincode['488971'] = 'VISA';
    bincode['490240'] = 'VISA';
    bincode['490241'] = 'VISA';
    bincode['498766'] = 'VISA';
    bincode['498767'] = 'VISA';
    bincode['498768'] = 'VISA';
    bincode['498769'] = 'VISA';
    bincode['498794'] = 'VISA';
    bincode['498795'] = 'VISA';
    bincode['498796'] = 'VISA';
    bincode['510235'] = 'MASTERCARD';
    bincode['510417'] = 'MASTERCARD';
    bincode['510995'] = 'MASTERCARD';
    bincode['511409'] = 'MASTERCARD';
    bincode['511957'] = 'MASTERCARD';
    bincode['512341'] = 'MASTERCARD';
    bincode['512414'] = 'MASTERCARD';
    bincode['512701'] = 'MASTERCARD';
    bincode['512824'] = 'MASTERCARD';
    bincode['516995'] = 'MASTERCARD';
    bincode['518685'] = 'MASTERCARD';
    bincode['519930'] = 'MASTERCARD';
    bincode['520032'] = 'MASTERCARD';
    bincode['520395'] = 'MASTERCARD';
    bincode['520399'] = 'MASTERCARD';
    bincode['521093'] = 'MASTERCARD';
    bincode['521377'] = 'MASTERCARD';
    bincode['521976'] = 'MASTERCARD';
    bincode['522384'] = 'MASTERCARD';
    bincode['522818'] = 'MASTERCARD';
    bincode['523975'] = 'MASTERCARD';
    bincode['524083'] = 'MASTERCARD';
    bincode['524187'] = 'MASTERCARD';
    bincode['524394'] = 'MASTERCARD';
    bincode['524686'] = 'MASTERCARD';
    bincode['525673'] = 'MASTERCARD';
    bincode['526418'] = 'MASTERCARD';
    bincode['526790'] = 'MASTERCARD';
    bincode['526830'] = 'MASTERCARD';
    bincode['526887'] = 'MASTERCARD';
    bincode['528626'] = 'MASTERCARD';
    bincode['528643'] = 'MASTERCARD';
    bincode['528645'] = 'MASTERCARD';
    bincode['528658'] = 'MASTERCARD';
    bincode['529038'] = 'MASTERCARD';
    bincode['530515'] = 'MASTERCARD';
    bincode['530572'] = 'MASTERCARD';
    bincode['530581'] = 'MASTERCARD';
    bincode['531167'] = 'MASTERCARD';
    bincode['531828'] = 'MASTERCARD';
    bincode['532451'] = 'MASTERCARD';
    bincode['533147'] = 'MASTERCARD';
    bincode['533398'] = 'MASTERCARD';
    bincode['533587'] = 'MASTERCARD';
    bincode['533825'] = 'MASTERCARD';
    bincode['533948'] = 'MASTERCARD';
    bincode['533968'] = 'MASTERCARD';
    bincode['534146'] = 'MASTERCARD';
    bincode['537018'] = 'MASTERCARD';
    bincode['537032'] = 'MASTERCARD';
    bincode['537158'] = 'MASTERCARD';
    bincode['540392'] = 'MASTERCARD';
    bincode['542172'] = 'MASTERCARD';
    bincode['542853'] = 'MASTERCARD';
    bincode['543846'] = 'MASTERCARD';
    bincode['545579'] = 'MASTERCARD';
    bincode['545968'] = 'MASTERCARD';
    bincode['546022'] = 'MASTERCARD';
    bincode['546235'] = 'MASTERCARD';
    bincode['546284'] = 'MASTERCARD';
    bincode['546285'] = 'MASTERCARD';
    bincode['546327'] = 'MASTERCARD';
    bincode['546555'] = 'MASTERCARD';
    bincode['546734'] = 'MASTERCARD';
    bincode['547587'] = 'MASTERCARD';
    bincode['547886'] = 'MASTERCARD';
    bincode['548362'] = 'MASTERCARD';
    bincode['548370'] = 'MASTERCARD';
    bincode['548471'] = 'MASTERCARD';
    bincode['548489'] = 'MASTERCARD';
</script>

<script language="javascript" type="text/javascript">
    $(document).ready(function () {
        $(document).ajaxStart(function () {
            $("#loading").show();
        }).ajaxStop(function () {
            $("#loading").hide();
        });
        $("#card_number").cardNumberMask(bincode);
        //Card holder event
        $("#card_holder_atm,#full_name,#card_holder_acc").keypress(function (e) {
            //Check control+c,ctrl+v,// var ctrlKey = 17, cKey = 67, vKey = 86;
            //Shift+Arrow key
            if (e.shiftKey && (e.which === 37 || e.which === 39)) {
                return true;
            }
            //Arrow key
            if (e.keyCode === 37 || e.keyCode === 39) {
                return true;
            }
            if (e.ctrlKey && (e.which === 67 || e.which === 86)) {
                return true;
            }
            if (e.keyCode === 8 || e.keyCode === 46) {
                return true;
            }
            var inputVal = String.fromCharCode(e.which);
            var characterReg = /^\s*[a-zA-Z,\s]+\s*$/;
            if (!characterReg.test(inputVal)) {
                return false;
            }
            $(".display_error").remove();
            return true;
        });
        $("#user_name").keypress(function (e) {
            //Check control+c,ctrl+v,// var ctrlKey = 17, cKey = 67, vKey = 86;
            //Shift+Arrow key
            if (e.shiftKey && (e.which === 37 || e.which === 39)) {
                return true;
            }
            //Arrow key
            if (e.keyCode === 37 || e.keyCode === 39) {
                return true;
            }
            if (e.ctrlKey && (e.which === 67 || e.which === 86)) {
                return true;
            }
            if (e.keyCode === 8 || e.keyCode === 46) {
                return true;
            }
            var inputVal = String.fromCharCode(e.which);
            var characterReg = /^\s*[a-zA-Z0-9,\s]+\s*$/;
            if (!characterReg.test(inputVal)) {
                return false;
            }
            $(".display_error").remove();
            return true;
        });
        //Validation form
        $('#formATM').bootstrapValidator({
            feedbackIcons: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            },
            live: 'disabled',
            fields: {
                card_number_mask: {
                    validators: {
                        notEmpty: {
                            message: 'Bạn chưa nhập số thẻ'
                        },
                        stringLength: {
                            max: 19,
                            min: 16,
                            message: 'Số thẻ hợp lệ c&#243; độ d&#224;i từ 16 - 19 chữ số'
                        },
                        callback: {
                            message: 'Bạn chưa nhập số thẻ',
                            callback: function (value, validator, $field) {
                                if (value === '' || value.length < 16 || value.length > 19) {
                                    return true;
                                }

                                var tmpVal = value;
                                var cardNum = $("#card_number").val();
                                if (cardNum.length === value.length) {
                                    tmpVal = cardNum;
                                }
                                if (tmpVal.length >= 16) {
                                    if (!valid_credit_card(tmpVal)) {
                                        return {
                                            valid: false,
                                            message: 'Số thẻ kh&#244;ng hợp lệ'
                                        }
                                    }
                                    return true;
                                } else {
                                    return true;
                                }

                            }
                        }
                    }
                },
                card_holder_atm: {
                    message: 'T&#234;n chủ thẻ kh&#244;ng hợp lệ',
                    validators: {
                        notEmpty: {
                            message: 'Bạn chưa nhập T&#234;n chủ thẻ'
                        },
                        stringLength: {
                            max: 40,
                            message: 'T&#234;n chủ thẻ c&#243; độ d&#224;i kh&#244;ng qu&#225; 40 k&#253; tự'
                        },
                        regexp: {
                            regexp: /^\s*[a-zA-Z,\s]+\s*$/,
                            message: 'T&#234;n chủ thẻ kh&#244;ng hợp lệ'
                        }
                    }
                }
            }
        })  ;
        //Validation form
        $('#formAcc').bootstrapValidator({
            feedbackIcons: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            },
            live: 'disabled',
            fields: {
                card_number: {
                    validators: {
                        notEmpty: {
                            message: 'Bạn chưa nhập Số t&#224;i khoản'
                        }
                    }
                },
                card_holder_acc: {
                    message: 'T&#234;n chủ t&#224;i khoản kh&#244;ng ch&#237;nh x&#225;c',
                    validators: {
                        notEmpty: {
                            message: 'Bạn chưa nhập T&#234;n chủ t&#224;i khoản'
                        },
                        regexp: {
                            regexp: /^\s*[a-zA-Z,\s]+\s*$/,
                            message: 'T&#234;n chủ t&#224;i khoản kh&#244;ng ch&#237;nh x&#225;c'
                        }
                    }
                }
            }
        });

        //Validation form
        $('#formCIF').bootstrapValidator({
            feedbackIcons: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            },
            live: 'disabled',
            fields: {
                user_name: {
                    message: 'T&#234;n đăng nhập kh&#244;ng ch&#237;nh x&#225;c',
                    validators: {
                        notEmpty: {
                            message: 'Bạn chưa nhập T&#234;n đăng nhập'
                        }
                    }
                },
                full_name: {
                    message: 'Họ v&#224; t&#234;n kh&#244;ng ch&#237;nh x&#225;c',
                    validators: {
                        notEmpty: {
                            message: 'Bạn chưa nhập Họ v&#224; t&#234;n'
                        },
                        regexp: {
                            regexp: /^\s*[a-zA-Z,\s]+\s*$/,
                            message: 'Họ v&#224; t&#234;n kh&#244;ng ch&#237;nh x&#225;c'
                        }
                    }
                }
            }
        });
    });
</script>



</body>
</html>
