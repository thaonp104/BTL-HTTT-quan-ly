<div class="defaultTitle TitleContent"> <span>Dell</span> </div>
<div class="defaultContent BlockContent">
  <ul class="ProductList First">
    <?php
      use Illuminate\Support\Facades\DB;
      $arr = DB::table('products')->where('brandsid',7)->orderBy('id','desc')->limit(3)->get();
      foreach ($arr as $rows) {
     ?>
    <li class="Odd">
      <div id="ProductImage" class="ProductImage ProductImageTooltip po_1510729">
          <a href="{{ URL::asset('customer/product/detail/'.$rows->id) }}">
              <img style="width: 120px;" alt="Lenovo Miix 8" src="{{ URL::asset('images/'.$rows->img) }}"/>
          </a>
      </div>
      <div class="ProductDetails">
          <strong>
              <a href="{{ URL::asset('customer/product/detail/'.$rows->id) }}">
                  <?php echo $rows->name ?>
              </a>
          </strong>
      </div>
      <div class="ProductPrice">
        <div class="special_price">
            <span class="price">
                <em>
                    <?php echo number_format($rows->pricenew) ?> ₫
                </em>
            </span>
        </div>
      </div>
      <div class="ProductActionAdd">
          <a href="{{ URL::asset('customer/addCart/'.$rows->id) }}"><span>Đặt mua</span></a>
      </div>
    </li>
   <?php } ?>
    <br class="Clear"/>
  </ul>

  <div class="ViewMore"> <a href="{{ URL::asset('customer/products/category/7') }}">Xem thêm</a> </div>
  <div class="Clear"></div>
</div>
<div class="defaultFooter FooterContent"></div>
<div class="Clear"></div>
</div>
