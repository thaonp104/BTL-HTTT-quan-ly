      <div id="cphMain_ct100_ContentrightPane" class="center_right">
              <div id="HomeFeaturedProducts" class="Block FeaturedProducts DefaultModule CustomProduct-1510729">
                <div class="defaultTitle TitleContent"> <span>Sản phẩm mới</span> </div>
                <div class="defaultContent BlockContent">
                  <ul class="ProductList First">
                    <!-- trên -->
                    <?php
//                      $arr=$this->model->get_all("select * from product where c_hotnew=1 order by product_id desc limit 0,4");
                      use Illuminate\Support\Facades\DB;
                      $arr = DB::table('products')->limit(4)->get();
                      foreach ($arr as $rows) {
                     ?>
                    <li class="Odd">
                      <div id="ProductImage" class="ProductImage"  > <a href="{{ URL::asset('customer/product/detail/'.$rows->id) }}"><img style="width:100px; " src="{{ URL::asset('images/'.$rows->img) }}"/></a> </div>
                      <!--<span class="FeturedFlag"></span>-->
                      <!--<div class="saleFlag iconSprite disable"></div>-->
                      <div class="ProductDetails"> <strong> <a href="{{ URL::asset('customer/product/detail/'.$rows->id) }}"><?php echo $rows->name ?></a> </strong> </div>
                      <div class="ProductPrice">
                        <div class="special_price"> <span class="price"> <em> <?php echo number_format($rows->pricenew) ?> ₫</em> </span> </div>
                      </div>
                      <!--<div class="ProductRating Rating5" style="display:none"></div>-->
                      <div class="ProductActionAdd"> <a href="{{ URL::asset('customer/addCart/'.$rows->id) }}"><span>Đặt mua</span></a> </div>
                    </li>
                    <?php } ?>
                    <br class="Clear"/>
                    <!-- end trên -->
                  </ul>
                  <!-- Dưới -->
                  <ul class="ProductList Last">
                    <?php
                      $right_center= DB::table('products')->limit(4)->get();
//                      $right_center=$this->model->get_all("select * from product where c_hotnew=1 order by product_id desc limit 5,4");
                      foreach ($right_center as $rows) {
                     ?>
                   <li class="Odd">
                      <div id="ProductImage" class="ProductImage"  > <a href="{{ URL::asset('customer/product/detail/'.$rows->id) }}"><img style="width:100px; " src="{{ URL::asset('images/'.$rows->img) }}"/></a> </div>
                      <!--<span class="FeturedFlag"></span>-->
                      <!--<div class="saleFlag iconSprite disable"></div>-->
                      <div class="ProductDetails"> <strong> <a href="{{ URL::asset('customer/product/detail/'.$rows->id) }}"><?php echo $rows->name ?></a> </strong> </div>
                      <div class="ProductPrice">
                        <div class="special_price"> <span class="price"> <em> <?php echo number_format($rows->pricenew) ?> ₫</em> </span> </div>
                      </div>
                      <!--<div class="ProductRating Rating5" style="display:none"></div>-->
                      <div class="ProductActionAdd"> <a href="{{ URL::asset('customer/product/detail/'.$rows->id) }}"><span>Đặt mua</span></a> </div>
                    </li>
                    <?php } ?>

                    <br class="Clear"/>
                  </ul>

                  <!-- end Last -->
                  <div class="ViewMore"> <a href="{{ URL::asset(route('customer.products')) }}">Xem thêm</a> </div>
                  <div class="Clear"></div>
                </div>
                <div class="defaultFooter FooterContent">
                  <div class="Clear"> </div>
                </div>
                <div class="Clear"></div>
              </div>
            </div>
