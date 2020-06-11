@extends('customer.frontend.master2')
@section('title')
    List Products
@endsection
@section('content_right')
    <script>
        document.getElementById("item_menu1").classList.remove('current');
        document.getElementById("item_menu3").classList.add('current');
    </script>
<div class="ProductListContainer ListItems DefaultModule">
                	<div class="category-title defaultTitle productlist-title">
                    	<h4>Sản phẩm nổi bật</h4>
                    </div>
                    <div id="ProductList" class="defaultContent listing-type-list productlist-content catalog-listing">

                    <ul class="ProductList First">
                      <!-- sản phẩmmmmmmmmm -->
                      <?php foreach ($arr as $rows) {
                       ?>
                    <li class="Odd">
                      <div id="ProductImage" class="ProductImage ProductImageTooltip po_1510729"> <a href="{{ URL::asset('customer/product/detail/'.$rows->id) }}"><img style="width: 120px;" alt="Lenovo Miix 8" src="{{ URL::asset('images/'.$rows->img) }}"/></a> </div>
                      <!--<span class="FeturedFlag"></span>-->
                      <!--<div class="saleFlag iconSprite disable"></div>-->
                      <div class="ProductDetails"> <strong> <a href="{{ URL::asset('customer/product/detail/'.$rows->id) }}"><?php echo $rows->name ?></a> </strong> </div>
                      <div class="ProductPrice">
                        <div class="special_price"> <span class="price"> <em><?php echo number_format($rows->pricenew) ?> ₫</em> </span> </div>
                      </div>
                      <!--<div class="ProductRating Rating5" style="display:none"></div>-->
                      <div class="ProductActionAdd"> <a href="{{ URL::asset('customer/addCart/'.$rows->id) }}"><span>Đặt mua</span></a> </div>
                    </li>
                    <!-- end sản phẩm -->
                  <?php } ?>
                  </ul>


                        <div class="clear"></div>
                        <div class="clear"></div>
                        <div class="clear">
                            {{ $arr->links() }}
                        </div>
                    </div>
                    <div class="clear defaultFooter productlist-footer"></div>
                </div>
            </div>
    @endsection
