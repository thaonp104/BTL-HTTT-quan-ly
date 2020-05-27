<div class="defaultTitle TitleContent"> <span>Dell</span> </div>
<div class="defaultContent BlockContent">
  <ul class="ProductList First">
    <?php
      use Illuminate\Support\Facades\DB;
      $arr = DB::table('product')->where('category_product_id',9)->orderBy('product_id','desc')->limit(3)->get();
      foreach ($arr as $rows) {
     ?>
    <li class="Odd">
      <div id="ProductImage" class="ProductImage ProductImageTooltip po_1510729">
          <a href="{{ URL::asset('customer/product/detail/'.$rows->product_id) }}">
              <img style="width: 120px;" alt="Lenovo Miix 8" src="{{ URL::asset('backend/images/'.$rows->c_img) }}"/>
          </a>
      </div>
      <div class="ProductDetails">
          <strong>
              <a href="{{ URL::asset('customer/product/detail/'.$rows->product_id) }}">
                  <?php echo $rows->c_name ?>
              </a>
          </strong>
      </div>
      <div class="ProductPrice">
        <div class="special_price">
            <span class="price">
                <em>
                    <?php echo number_format($rows->c_pricenew) ?> ₫
                </em>
            </span>
        </div>
      </div>
      <div class="ProductActionAdd">
          <a href="{{ URL::asset('customer/addCart/'.$rows->product_id) }}"><span>Đặt mua</span></a>
      </div>
    </li>
   <?php } ?>
    <br class="Clear"/>
  </ul>

  <div class="ViewMore"> <a href="{{ URL::asset('customer/products/category/9') }}">Xem thêm</a> </div>
  <div class="Clear"></div>
</div>
<div class="defaultFooter FooterContent"></div>
<div class="Clear"></div>
</div>
