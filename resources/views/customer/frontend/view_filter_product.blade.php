<div class="ProductListContainer ListItems DefaultModule">
                  <div class="category-title defaultTitle productlist-title">
                      <h5>Kết quả</h5>
                    </div>
                    <div id="ProductList" class="defaultContent listing-type-list productlist-content catalog-listing">
                     <div>Có (<span style="color: red">  <?php echo isset($total)?$total:"" ?></span>) kết quả thõa mãn.</div>
                    <ul class="ProductList First">
                      <!-- sản phẩmmmmmmmmm -->
                      <?php foreach ($arr as $rows) {
                       ?>
                    <li class="Odd">
                      <div id="ProductImage" class="ProductImage ProductImageTooltip po_1510729"> <a href="#"><img style="width: 120px;" alt="Lenovo Miix 8" src="public/backend/images/<?php echo $rows->c_img?>"/></a> </div>
                      <!--<span class="FeturedFlag"></span>-->
                      <!--<div class="saleFlag iconSprite disable"></div>-->
                      <div class="ProductDetails"> <strong> <a href="san-pham/detail/<?php echo $rows->product_id?>"><?php echo $rows->c_name ?></a> </strong> </div>
                      <div class="ProductPrice">
                        <div class="special_price"> <span class="price"> <em><?php echo number_format($rows->c_pricenew) ?> ₫</em> </span> </div>
                      </div>
                      <!--<div class="ProductRating Rating5" style="display:none"></div>-->
                      <div class="ProductActionAdd"> <a href="{{ URL::asset('customer/addCart/'.$rows->product_id) }}"><span>Đặt mua</span></a> </div>
                    </li>
                    <!-- end sản phẩm -->
                  <?php } ?>
                  </ul>


                        <div class="clear"></div>
                        <div class="clear"></div>
                        <div class="PageNavigation" align="center" style="padding-bottom:10px; padding-top:10px;">
                          <a href="filter/page/pr=<?php echo isset($_GET["pr"])?$_GET["pr"]:""?>/1" id="PageFirst">Trang đầu</a>

                            <?php
                              for($i=1;$i<=$num_page;$i++){
                             ?>
                          <a href="filter/page/pr=<?php echo isset($_GET["pr"])?$_GET["pr"]:""?>/<?php echo $i?>" id="Page0" class="active" <?php $st=isset($_GET["p"])?$_GET["p"]:1; if($st==$i){ ?> style="border: 1px solid red" <?php } ?> >
                              <strong><?php echo $i ?></strong>
                            </a>
                           <?php } ?>

                            <a href="filter/page/pr=<?php echo isset($_GET["pr"])?$_GET["pr"]:""?>/<?php echo $num_page?>" id="PageLast"> Trang cuối</a>
                        </div>
                    </div>
                    <div class="clear defaultFooter productlist-footer"></div>
                </div>
            </div>
