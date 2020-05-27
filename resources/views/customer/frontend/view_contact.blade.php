@extends('customer.layouts.main')
@section('title')
    Contact
@endsection
@section('content')
    <script>
        document.getElementById("item_menu1").classList.remove('current');
        document.getElementById("item_menu6").classList.add('current');
    </script>
<div id="cphMain_ctl00_ContentPane" class="center center_right" style="width: 1170px; margin: 40px auto; margin-left: 150px">
            	<div class="defaultContent contact-content">
                	<div id="cphMain_ctl00_ctl00_plCompanyInfo" class="contact companyInfo" style="width:100%;">
                    	<div class="contact-title">
                        	<h2 class="title">Thông tin liên hệ</h2>
                        </div>
                        <div class="Block contact-info">
                        	<div class="clear">
                            	<strong> Công ty Cổ phần Công nghệ DKT</strong>
                            </div>
                            <div class="clear">
                            	<div class="key"> Địa chỉ</div>
                                <div class="space"> :</div>
                                <div class="value"> Tầng 4, tòa nhà Hà Nội Group, 442 Đội Cấn, Ba Đình, Hà Nội</div>
                            </div>
                            <div class="clear">
                            	<div class="key"> Điện thoại</div>
                                <div class="space"> :</div>
                                <div class="value"> 04.6674.2332 - 0934515339</div>
                            </div>
                            <div class="clear">
                            	<div class="key"> Fax</div>
                                <div class="space"> :</div>
                                <div class="value"> (84-4) 37868904</div>
                            </div>
                            <div class="clear">
                            	<div class="key"> Email</div>
                                <div class="space"> :</div>
                                <div class="value">
                                <a id="cphMain_ctl00_ctl00_hplEmail" href="mailto:support@bizweb.vn">support@bizweb.vn</a>
                                </div>
                            </div>
                            <div class="clear">
                            <div class="key"> Website </div>
                            <div class="space"> :</div>
                            <div class="value">
                            <a href="#">http://myshopping.bizwebvietnam.com</a>
                            </div>
                            </div>
                            <div class="clear"></div>
                        </div>

                    </div>
                    <div id="cphMain_ctl00_ctl00_plContent" class="contact contactInput" style="width:100%;">
                        <div class="contact-title">
                            <h2 class="title">Thông tin phản hồi</h2>
                        </div>
                        <div class="contact-info">
                            <div class="clear contactMsg">
                                 Xin vui lòng điền các yêu cầu vào form dưới đây và gửi cho chúng tôi. Chúng tôi sẽ trả lời bạn ngay sau khi nhận được.
                                <br/>
                                <span>Xin chân thành cảm ơn!</span>
                            </div>
                            <div style="color: red"><?php echo isset($tb)?$tb:""; ?></div>
                            <form method="post" action="index.php?controller=add_contact&act=do_add">
                            <div class="clear">
                                <div class="key">
                                <span class="required">*</span>
                                Họ tên
                                </div>
                                <div class="value">
                                <input id="txtContactName" class="NormalTextBox" type="text" maxlength="24" name="c_name">
                                <span id="cphMain_ctl00_ctl00_rfvContactName" style="display:none;">(*)</span>
                                </div>
                            </div>
                            <div class="clear">
                                <div class="key">
                                <span class="required">*</span>
                                Địa chỉ
                                </div>
                                <div class="value">
                                <input id="txtContactAddress" class="NormalTextBox" type="text" maxlength="250" name="c_adress">
                                <span id="cphMain_ctl00_ctl00_rfvContactAddress" style="display:none;">(*)</span>
                                </div>
                            </div>
                            <div class="clear">
                                <div class="key">
                                <span class="required">*</span>
                                Hòm thư
                                </div>
                                <div class="value">
                                <input id="txtEmail" class="NormalTextBox" type="text" maxlength="50" name="c_email">
                                <span id="cphMain_ctl00_ctl00_rfvEmail" style="display:none;">(*)</span>
                                <span id="cphMain_ctl00_ctl00_revEmail" style="display:none;">(*)</span>
                                </div>
                            </div>
                            <div class="clear">
                                <div class="key">
                                <span class="required">*</span>
                                Số điện thoại
                                </div>
                                <div class="value">
                                <input id="txtPhone" class="NormalTextBox" type="text" maxlength="20" name="c_phone">
                                <span id="cphMain_ctl00_ctl00_rfvContactPhone" style="display:none;">(*)</span>
                                </div>
                            </div>
                            <div class="clear">
                                <div class="key">
                                <span class="required">*</span>
                                Tiêu đề
                                </div>
                                <div class="value">
                                <input id="txtTitle" class="NormalTextBox" type="text" maxlength="255" name="c_title">
                                <span id="cphMain_ctl00_ctl00_rfvTitle" style="display:none;">(*)</span>
                                </div>
                            </div>
                            <div class="clear">
                                <div class="key">
                                <span class="required">*</span>
                                Nội dung
                                </div>
                                <div class="value">
                                <textarea id="txtContent" class="NormalTextBox" style="height:80px;" cols="20" rows="2" name="c_content"></textarea>
                                <span id="cphMain_ctl00_ctl00_rfvContactContent" style="display:none;">(*)</span>
                                </div>
                            </div>
                            <div class="clear">
                                <div class="key">
                                <span class="required">*</span>
                                Mã xác nhận
                                </div>
                                <div class="value">
                                <div style="float: left; margin-bottom: 0px;">
                                <input id="txtMangaunhien" class="NormalTextBox" type="text" style="width:70px;" maxlength="6" name="c_maxacnhan">
                                </div>
                                <div style="float: left; margin: 0px 0px 0px 10px;">
                                <div style="line-height: 30px;font-weight: bold;"><?php
//                                    include("controller/frontend/controller_random.php")
                                    $ran_hash=md5(rand(0,999));
                                    $c_code=substr($ran_hash,10,5);
                                    $_SESSION["c_code"]=$c_code;
                                    echo "$c_code";
                                    ?></div>
                                </div>
                                <div style="float: left; margin: 0px 0px 0px 10px;">
                                <a id="resetCapcha" href="#">
                                <img alt="" style="height: 21px;" src="image/refesh7.png">
                                </a>
                                </div>
                                <div style="clear: both;"></div>
                                <span style="color: Red;"> </span>
                                </div>
                            </div>
                            <div class="clear">
                                <div class="key"> </div>
                                <div class="value">
                                <input id="btnSend" class="Button" type="submit" style="width:80px;"  value="Gửi" name="btnSend">
                                <input id="btnReset" class="Button" type="submit" style="width:80px;" value="Nhập lại" name="btnReset">
                                </div>
                            </div>
                            <div class="clear"> </div>
                        </form>
                        </div>
                    </div>
                </div>
                <div class="defaultFooter contact-footer"></div>
            </div>
    @endsection
