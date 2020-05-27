<div class="defaultTitle TitleContent"> <span>Nokia</span> </div>
<div class="defaultContent BlockContent">
                  <ul class="ProductList First">
                    <?php
                      use Illuminate\Support\Facades\DB;
//                      $arr=$this->model->get_all("select * from product where category_product_id=3 order by product_id desc limit 0,6");
                      $arr = DB::table('product')->where('category_product_id',3)->orderBy('product_id','desc')->limit(6)->get();
                      foreach ($arr as $rows) {
                    ?>
                    <li class="Odd">
                      <div id="ProductImage" class="ProductImage ProductImageTooltip po_1510729"> <a href="{{ URL::asset('customer/product/detail/'.$rows->product_id) }}"><img style="width: 100px;" alt="Lenovo Miix 8" src="{{URL::asset('backend/images/'.$rows->c_img)}}"/></a> </div>
                      <!--<span class="FeturedFlag"></span>-->
                      <!--<div class="saleFlag iconSprite disable"></div>-->
                      <div class="ProductDetails"> <strong> <a href="{{ URL::asset('customer/product/detail/'.$rows->product_id) }}"><?php echo $rows->c_name ?></a> </strong> </div>
                      <div class="ProductPrice">
                        <div class="special_price"> <span class="price"> <em> <?php echo number_format($rows->c_pricenew) ?> ₫</em> </span> </div>
                      </div>
                      <!--<div class="ProductRating Rating5" style="display:none"></div>-->
                      <div class="ProductActionAdd"> <a href="{{ URL::asset('customer/addCart/'.$rows->product_id) }}"><span>Đặt mua</span></a> </div>
                    </li>
                    <?php } ?>
                    <br class="Clear"/>
                  </ul>
                  <!-- end productlist first-->


                  <!-- end ProductList last-->
                  <div class="ViewMore"> <a href="{{ URL::asset('customer/products/category/3') }}">Xem thêm</a> </div>
                  <div class="Clear"></div>
                </div>
                <div class="defaultFooter FooterContent"></div>
                <div class="Clear"></div>
              </div>
              <!-- -------------- -->
