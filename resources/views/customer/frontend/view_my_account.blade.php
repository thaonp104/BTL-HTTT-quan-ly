@extends('customer.layouts.main')
@section('title')
    My account
@endsection
@section('content')
    <script>
        document.getElementById("item_menu1").classList.remove('current');
    </script>
<div id="Container" style="width: 1170px; margin: 40px auto">
    <div id="Outer">
      <div id="Wrapper">


        <!--end SearchForm-->
        <div id="cphpMain-Content">
          <div id="cphMain_ctl00_TopPane" class="top"></div>


          <!-- -------------------------------- -->
          <div id="cphMain_ctl00_ContentPane" class="center center_right">
          	<div class="Account-Module DefaultModule">
            	<div class="Block">
                	<div class="defaultTitle MyAccountTitle">
                    	<h1>Tài khoản của tôi</h1>
                    </div>
                    <div>Xin chào <span style="color: red;"><?php echo session('c_customer') ?></span></div>
                    <div class="defaultContent BlockContent MyAccountContent">
                    	<p class="InfoMessage">
                        	Từ trang này bạn có thể xem các đơn đặt hàng của bạn, cập nhật chi tiết tài khoản của bạn và nhiều hơn nữa. Chọn một trong những ứng dụng dưới đây để thao tác:
                        </p>
                        <ul class="MyAccount">
                            <li class="order-status">
                            	<a href="{{ URL::asset(route('customer.myOrders')) }}">
                                	<span>Quản lý đơn hàng</span>
                                </a>
                                <br/>
                                Xem trạng thái mỗi đơn hàng đã đặt tại website.
                            </li>
                            <li class="account-info">
                            	<a href="{{ URL::asset(route('customer.inforAccount')) }}">
                                	<span>Thông tin tài khoản</span>
                                </a>
                                <br/>
                                Cập nhật thông tin cá nhân, địa chỉ Email (hoặc) thay đổi mật khẩu truy cập website của bạn.
                            </li>
                        </ul>
                    </div>
                    <div class="defaultFooter MyAccountFooter"></div>
                </div>
            </div>
          </div>
        </div>
        <!-- end class= center center_right-->
        <div id="cphMain_ctl00_BottomPane" class="bottom"></div>
      </div>
    </div>
    <!--end Wrapper-->
    <div class="Clear"></div>
    <!--end clear-->
  </div>
  <!--end Outer-->

  </div>
    @endsection
