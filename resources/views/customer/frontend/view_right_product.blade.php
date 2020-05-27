<div class="defaultTitle TitleContent"> <span>Máy tính để bàn right</span> </div>
<div class="defaultContent BlockContent">
  <ul class="ProductList First">
    <?php
      use Illuminate\Support\Facades\DB;
      $arr = DB::table('product')->limit(2)->get();
      foreach ($arr as $rows) {
    ?>
    <li class="Odd">
      <div id="ProductImage" class="ProductImage ProductImageTooltip po_1510729"> <img style="width: 120px;" src="{{ URL::asset('backend/images/'.$rows->c_img) }}"/> </div>
      <div class="ProductDetails"> <strong> <a href="san-pham/detail/<?php echo $rows->product_id?>"><?php echo $rows->c_name ?> </a> </strong> </div>
      <div class="ProductPrice">
        <div class="special_price"> <span class="price"> <em><?php echo number_format($rows->c_pricenew) ?> ₫</em> </span> </div>
      </div>
      <div class="ProductActionAdd"> <a href="{{ URL::asset('customer/addCart/'.$rows->product_id) }}"><span>Đặt mua</span></a> </div>
    </li>
    <?php } ?>
    <br class="Clear"/>
  </ul>

  <div class="Clear"></div>
</div>
<div class="defaultFooter FooterContent">
  <div></div>
</div>
