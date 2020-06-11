@extends('customer.frontend.master2')
@section('title')
    Products
@endsection
@section('content_right')
    <script>
        document.getElementById("item_menu1").classList.remove('current');
        document.getElementById("item_menu3").classList.add('current');
    </script>
{{--    style="width: 1170px; margin: 40px auto; margin-left: 150px"--}}
<div id="cphMain_ct100_ContentrightPane" class="center_right">
              <div id="HomeFeaturedProducts" class="Block FeaturedProducts DefaultModule CustomProduct-1510729">
                <div class="defaultTitle TitleContent"> <span><?php echo $ht->name ?></span> </div>
                <div class="defaultContent BlockContent">
                  <ul class="ProductList First">
                    <!-- trên -->
                    <?php foreach ($arr as $rows) {
                     ?>
                    <li class="Odd">
                      <div id="ProductImage" class="ProductImage"  >
                          <a href="{{ URL::asset('customer/product/detail/'.$rows->id) }}">
                              <img style="width:100px; " src="{{ URL::asset('images/'.$rows->img) }}"/>
                          </a>
                      </div>
                      <!--<span class="FeturedFlag"></span>-->
                      <!--<div class="saleFlag iconSprite disable"></div>-->
                      <div class="ProductDetails">
                          <strong>
                              <a href="{{ URL::asset('customer/product/detail/'.$rows->id) }}"><?php echo $rows->name ?></a>
                          </strong>
                      </div>
                      <div class="ProductPrice">
                        <div class="special_price">
                            <span class="price">
                                <em> <?php echo number_format($rows->pricenew) ?> ₫</em>
                            </span>
                        </div>
                      </div>
                      <!--<div class="ProductRating Rating5" style="display:none"></div>-->
                      <div class="ProductActionAdd"> <a href="{{ URL::asset('customer/addCart/'.$rows->id) }}"><span>Đặt mua</span></a> </div>
                    </li>
                    <?php } ?>
                    <br class="Clear"/>
                    <!-- end trên -->
                  </ul>

                  <!-- end Last -->
                  <div class="Clear">
                      {{ $arr->links() }}
                  </div>
                </div>
                <div class="defaultFooter FooterContent">
                  <div class="Clear"> </div>
                </div>
                <div class="Clear"></div>
              </div>
            </div>
    @endsection
