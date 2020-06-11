
@extends('customer.layouts.main')
{{--  <!--start bg_Container-->--}}
@section('content')
  <div id="Container">
    <div id="Outer">
      <div id="Wrapper">

        <div id="cphpMain-Content">

          <!-- Khối giữa dưới slide -->
          <div style="width:1170px;float:left;">
            <!-- list-left -->
            <div id="cphMain_ct100_LeftPane" class="left">
                @include('customer.frontend.view_list_left')
            </div>
              <!--  -->
            <div id="cphMain_ct100_ContentrightPane" class="center_right">
              <div id="HomeFeaturedProducts" class="Block FeaturedProducts DefaultModule CustomProduct-1510729">
                @yield('content_right')
              </div>
            <!-- end center_right-->
          </div>
        </div>
      </div>
      </div>
    </div>

  <!--end Container-->

<!--end form-->
@endsection
