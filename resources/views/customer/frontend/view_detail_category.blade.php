@extends('customer.layouts.main')
@section('title')
    News
@endsection
@section('content')
    <script>
        document.getElementById("item_menu1").classList.remove('current');
    </script>
      <div id="cphMain_ct100_ContentrightPane" class="center_right" style="width: 1170px; margin: 40px 110px">
              <div id="HomeFeaturedProducts" class="Block FeaturedProducts DefaultModule CustomProduct-1510729">
                <div class="defaultTitle TitleContent"> <span><?php
                if( isset($ht)){echo $ht->c_name;}else{ ?>Tin mới <?php } ?></span> </div>
                <div class="defaultContent BlockContent">
                  <ul class="ProductList First">
                    <!-- trên -->
                    <?php foreach ($arr as $rows) {
                     ?>
                    <li class="Odd">
                      <div id="ProductImage" class="ProductImage"  > <a href="{{ URL::asset('customer/news/detail/'.$rows->news_id) }}"><img style="width:200px; " src="{{ URL::asset('news/'.$rows->c_img) }}"/></a> </div>
                      <!--<span class="FeturedFlag"></span>-->
                      <!--<div class="saleFlag iconSprite disable"></div>-->
                      <div class="newsLastest_Title"> <a href="{{ URL::asset('customer/news/detail/'.$rows->news_id) }}"><?php echo $rows->c_name ?></a></div>


                    </li>
                    <?php } ?>
                    <br class="Clear"/>
                    <!-- end trên -->
                  </ul>

                  <!-- end Last -->

                </div>
                <div class="defaultFooter FooterContent">
                  <div class="Clear"> </div>
                </div>
                <div class="Clear">
                    {{ $arr->links() }}
                </div>
              </div>
            </div>
    @endsection
