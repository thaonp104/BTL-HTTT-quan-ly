<div class="bg_Topmenu">
    <div id="Topmenu">
      <ul>
        <li class="topMenu_Wishlist"> <a href="{{ URL::asset(route('customer.favorite')) }}"><span>Danh sách ưa thích</span></a> </li>
        <li class="CartLink topMenu_Cart"> <a href="{{ URL::asset(route('customer.cart')) }}"><span>Giỏ hàng</span> <span>(<?php
          $total =0;
          if(session()->has('cart')){
           foreach (session("cart") as $values)
           $total=$total + $values['number'];
        }
          echo $total;
         ?>)</span></a> </li>

        <?php if(session()->has('c_customer')){
           ?>
        <li class="First topMenu_Account"> <a href="{{ URL::asset('customer/myAccount') }}"><span>Tài khoản của tôi </span>-<span style="color: red"><?php echo session("c_customer") ?></span>
          </a> </li>
        <li class="topMenu_Order"> <a href="{{ URL::asset(route('customer.myOrders')) }}"><span>Đơn hàng của bạn</span></a></li>
        <li class="topMenu_Register"> <a href="{{ URL::asset(route('customer.logout')) }}"><span>Thoát</span></a> </li>
          <?php }else{ ?>
          <li class="topMenu_Login"> <a href="{{ URL::asset('customer/login/normal') }}"><span>Đăng nhập</span></a> </li>
        <li class="topMenu_Register"> <a href="{{ URL::asset('customer/register/normal') }}"><span>Đăng ký</span></a> </li>
      <?php } ?>


      </ul>
    </div>
  </div>
  <!--end bg_Topmenu-->
  <div class="Clear"></div>
  <!--start bg_header-->
  <div id="bg_header">
    <div id="Header">
      <div id="Logo">
        <div id="LogoContainer">
          <h1><a href="{{ URL::asset(route('customer.index')) }}">"BIZMART"<span></span></a></h1>
        </div>
      </div>
      <!--end Logo-->
      <div id="Menu">
        <div id="menu-container">
          <ul id="nav">
            <li id="item_menu1" class="current"><a href="{{ URL::asset(route('customer.index')) }}" title="Trang chủ"><span>trang chủ</span></a></li>
            <li id="item_menu2"><a href="{{ URL::asset(route('customer.aboutus')) }}" title="Giới thiệu"><span>Giới thiệu</span></a></li>
            <li id="item_menu3"  class="lever3"><a href="{{ URL::asset(route('customer.products')) }}" title="Sản phẩm"><span>Sản phẩm</span></a>
              <!--   -->
              <ul class="lever10">
              <?php
              use Illuminate\Support\Facades\DB;
              $arr=DB::table('group_product')->get();
              foreach ($arr as $rows) {
               ?>
                <li class="last10"><a href="{{URL::asset('customer/groupProducts/'.$rows->group_product_id)}}"><span><?php echo $rows->c_name ?></span></a>
                </li>
            <?php } ?>
              </ul>
              <!--  -->
            </li>
            <li id="item_menu4"><a href="{{ URL::asset(route('customer.news')) }}" title="Tin tức"><span>tin tức</span></a></li>
            <li id="item_menu5"><a href="{{ URL::asset(route('customer.map')) }}" title="Bản đồ"><span>Bản đồ</span></a></li>
            <li id="item_menu6"><a href="{{ URL::asset(route('customer.contact')) }}" title="Liên hệ"><span>Liên hệ</span></a></li>
          </ul>
        </div>
      </div>
      <!--end Menu-->
      <div class="Clear"></div>
    </div>
  </div>
  <!--end bg_header-->
