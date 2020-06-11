@extends('customer.layouts.main')
@section('title')
    Trang chủ
@endsection
@section('content')
  <div id="Container">
    <div id="Outer">
      <div id="Wrapper">

        <div id="cphpMain-Content">
          <div style="width:1170px; float:left;margin-bottom:15px;">
            <div  class="top-left">
              <div id="site-body" class="inside-page-body product-body sim-cart-body clearfix">
                <section class="content-block-wrapper navigation-banner clearfix">
                  <div class="navigation">
                    <ul class="col1 nolist">
                      <li class="mobile"> <a href="{{URL::asset('customer/groupProducts/1')}}">Điện thoại di động</a> </li>
                      <li class="tablet"> <a href="{{URL::asset('customer/groupProducts/2')}}">Máy tính bảng</a> </li>
                      <li class="camera last"> <a href="#">Máy ảnh</a> </li>
                    </ul>
                    <ul class="col2 nolist">
                      <li class="accessories"> <a href="{{URL::asset('customer/groupProducts/3')}}">Laptop</a> </li>
                      <li class="application"> <a href="{{URL::asset('customer/groupProducts/4')}}">Phụ kiện</a> </li>
                      <li class="oldproduct"> <a href="#">Tivi</a> </li>
                      <li class="sim-card"> <a href="#">Máy tính<br>
                        bàn</a> </li>
                    </ul>
                    <ul class="col3 nolist last">
                      <li class="promotion"> <a href="#">Cài đặt</a> </li>
                      <li class="sim-card"> <a href="#">Tư vấn</a> </li>
                      <li class="news"> <a href="{{ URL::asset(route('customer.news')) }}">Tin tức</a> </li>
                      <li class="find-shop last"> <a href="#">Đặt hàng</a> </li>
                    </ul>
                  </div>
                </section>
              </div>
            </div>
            @include("customer.frontend.view_slide")
          </div>
          <div style="width:1170px;float:left;">
            <script type="text/javascript">
              function search(){
                var key=document.getElementById("key").value;
                var s= "customer/search/"+key
                location.href=s;
              }
            </script>
          <div id="SearchForm" class="home_search" style="margin-bottom: 5px;">
          <div id="SearchFormContainer">
            <input class="search-input" type="text" id="key"/>
            <input onclick="search();"  class="search-button" type="submit"  value="" />
          </div>
        </div>
            <div id="cphMain_ct100_LeftPane" class="left">
                @include('customer.frontend.view_list_left')
            </div>
              @include('customer.frontend.view_right_center')
          </div>
          <div style="width:1170px;float:left;">
            <div id="cphMain_ctl00_ContentPane" class="mid_left">
              <div id="HomeFeaturedProducts" class="Block FeaturedProducts DefaultModule CustomProduct-1511504">
                  @include('customer.frontend.view_nokia')
              <div id="HomeFeaturedProducts" class="Block FeaturedProducts DefaultModule CustomProduct-1511537">
                  @include('customer.frontend.view_ipad')
              <div id="HomeFeaturedProducts" class="Block FeaturedProducts DefaultModule CustomProduct-1511545">
                  @include('customer.frontend.view_vaio')
              <div id="HomeFeaturedProducts" class="Block FeaturedProducts DefaultModule CustomProduct-1511547">
              @include('customer.frontend.view_pk')
              <div id="TextHTML-Module" class="DefaultModule"> <img src="{{ URL::asset('images/lumia.jpg') }}"/> </div>
            </div>
            <div id="cphMain_ctl00_RightPane" class="mid_right">
                <a href="https://vnexpress.net/the-gioi">
                  <div id="TextHTML-Module" class="DefaultModule">
                      <div class="defaultTitle TextHTML-Title"> <span>Tin thế giới</span> </div>
                    <p style=" height:186px;"> <img style="margin-bottom:12px;" src="{{ URL::asset('images/qc.jpg') }}" height="174" width="687"/> </p>
                  </div>
                </a>
              <a href="https://www.thegioididong.com/tin-tuc">
                  <div id="TextHTML-Module" class="DefaultModule">
                      <div class="defaultTitle TextHTML-Title"> <span>Tin công nghệ</span> </div>
                      <div class="defaultContent TextHTML-content">
                          <p style="height:175px;"> <img src="{{ URL::asset('images/tincn.jpg') }}" height="175" width="455"/> </p>
                      </div>
                      <div class="clear defaultFooter TextHTML-footer">
                          <div></div>
                      </div>
                  </div>
              </a>
                <hr>
              <div id="HomeFeaturedProducts" class="Block FeaturedProducts DefaultModule CustomProduct-1511529">
                  @include('customer.frontend.view_right_product')
                <div class="Clear"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="Clear"></div>
    </div>
  </div>
@endsection
