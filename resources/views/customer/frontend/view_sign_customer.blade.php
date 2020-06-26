@extends('customer.layouts.main')
@section('title')
    Register
@endsection
@section('content')
    <input type="hidden" id="al" value="{{ $alert }}">
    <script>
        var al = document.getElementById('al').value;
        if (al == 'email') {
            alert('Tài khoản đã tồn tại.Thử lại');
        }
        else if (al == 'password') {
            alert('Mật khẩu không khớp. Thử lại');
        }
        else if (al =='phone') {
            alert('Số điện thoại đã tồn tại hoặc nhập không đúng form. Thử lại');
        }
    </script>
<div style="margin-left: 140px" id="cphMain_ctl00_ContentPane" class="center center_right">
    <div class="defaultContent contact-content">
        <div id="cphMain_ctl00_ctl00_plContent" class="contact contactInput" style="width:100%;">
            <div class="contact-title">
                <h2 class="title">ĐĂNG KÝ</h2>
            </div>
            <div class="contact-info">
                <div class="clear contactMsg">
                     Xin vui lòng điền đẩy đủ thông tin vào form để đăng ký.
                    <br/>
                    <span>Xin chân thành cảm ơn!</span>
                </div>
                <div style="color: red"><?php echo isset($tb)?$tb:""; ?></div>
                <form method="post" action="{{ URL::asset(route('customer.createAccount')) }}">
                    @csrf
               <div class="clear">
                <div class="clear">
                    <div class="key">
                        <span class="required">*</span>
                        Username
                    </div>
                    <div class="value">
                        <input id="txtContactAddress" class="NormalTextBox" type="username" maxlength="250" name="username" required>
                        <span id="cphMain_ctl00_ctl00_rfvContactAddress" style="display:none;">(*)</span>
                    </div>
                </div>
                <div class="clear">
                <div class="key">
                    <span class="required">*</span>
                    Mật khẩu
                    </div>
                    <div class="value">
                    <input id="txtContactAddress" class="NormalTextBox" type="password" maxlength="250" name="password" required>
                    <span id="cphMain_ctl00_ctl00_rfvContactAddress" style="display:none;">(*)</span>
                   </div>
                </div>
                <div class="clear">
                <div class="key">
                    <span class="required">*</span>
                    Nhập lại mật khẩu
                    </div>
                    <div class="value">
                    <input id="txtContactAddress" class="NormalTextBox" type="password" maxlength="250" name="passwordnew" required>
                    <span id="cphMain_ctl00_ctl00_rfvContactAddress" style="display:none;">(*)</span>
                   </div>
                </div>
                <div class="clear">
                    <div class="key">
                    <span class="required">*</span>
                    Họ tên
                    </div>
                    <div class="value">
                    <input id="txtContactName" class="NormalTextBox" type="text" maxlength="24" name="name" required>
                    <span id="cphMain_ctl00_ctl00_rfvContactName" style="display:none;">(*)</span>
                    </div>
                </div>
                <div class="clear">
                    <div class="key">
                    <span class="required">*</span>
                    Địa chỉ
                    </div>
                    <div class="value">
                    <input id="txtContactAddress" class="NormalTextBox" type="text" maxlength="250" name="address" required>
                    <span id="cphMain_ctl00_ctl00_rfvContactAddress" style="display:none;">(*)</span>
                    </div>
                </div>
                <div class="clear">
                    <div class="key">
                    <span class="required">*</span>
                    Ngày sinh
                    </div>
                    <div class="value">
                    <input id="txtEmail" class="NormalTextBox" type="date" maxlength="50" name="birthday" required>
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
                    <input id="txtPhone" class="NormalTextBox" type="number" maxlength="20" name="phone" required>
                    <span id="cphMain_ctl00_ctl00_rfvContactPhone" style="display:none;">(*)</span>
                    </div>
                </div>

                <div class="clear">
                    <div class="value">
                    <div style="float: left; margin-bottom: 0px;">
                    </div>
                    <div style="float: left; margin: 0px 0px 0px 10px;">
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
                    <input id="btnSend" class="Button" type="submit" style="width:80px;"  value="Đăng kí" name="btnSend">
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
