@extends('customer.layouts.main')
@section('title')
    Favorite Products
@endsection
@section('content')
<div class="ProductListContainer ListItems DefaultModule" style="width: 1170px; margin: 40px auto">
                	<div class="category-title defaultTitle productlist-title">
                    	<h4>Sản phẩm yêu thích</h4>
                    </div>
                    <div id="ProductList" class="defaultContent listing-type-list productlist-content catalog-listing">

                    <ul class="ProductList First">
                      <!-- sản phẩmmmmmmmmm -->
                      <?php
                        if (session()->has("favorite"))
                            foreach (session("favorite") as $favorite) {
                       ?>
                    <li class="Odd">
                      <div id="ProductImage" class="ProductImage ProductImageTooltip po_1510729"> <a href="{{ URL::asset('customer/product/detail/'.$favorite['product_id']) }}"><img style="width: 120px;" alt="Lenovo Miix 8" src="{{ URL::asset('backend/images/'.$favorite['c_img']) }}"/></a> </div>
                      <!--<span class="FeturedFlag"></span>-->
                      <!--<div class="saleFlag iconSprite disable"></div>-->
                      <div class="ProductDetails"> <strong> <a href="{{ URL::asset('customer/product/detail/'.$favorite['product_id']) }}"><?php echo $favorite['c_name'] ?></a> </strong> </div>
                      <div class="ProductPrice">
                        <div class="special_price"> <span class="price"> <em><?php echo number_format($favorite['c_price']) ?> ₫</em> </span> </div>
                      </div>
                      <!--<div class="ProductRating Rating5" style="display:none"></div>-->
                      <div > <a href="{{ URL::asset('customer/deleteFavorite/'.$favorite['product_id']) }}"><span>Xóa khỏi danh sách</span></a> </div>
                    </li>
                    <!-- end sản phẩm -->
                  <?php } ?>
                  </ul>


                        <div class="clear"></div>
                        <div class="clear"></div>
                        <!--  -->
                    </div>
                    <div class="clear defaultFooter productlist-footer"></div>
                </div>
            </div>
    @endsection
