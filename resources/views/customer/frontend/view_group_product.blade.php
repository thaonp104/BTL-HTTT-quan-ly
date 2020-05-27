@extends('customer.frontend.master2')
@section('title')
    Products
@endsection
@section('content_right')
    <script>
        document.getElementById("item_menu1").classList.remove('current');
        document.getElementById("item_menu3").classList.add('current');
    </script>
 <div>
     <div class="defaultTitle TitleContent"> <h5><?php echo $arr->c_name ?></h5> </div>
 <?php
 use Illuminate\Support\Facades\DB;
 foreach ($check as $rows) {
 ?>
 <!--  -->
     <div class="defaultTitle TitleContent"> <span><?php echo $rows->c_name ?></span> </div>
     <div class="defaultContent BlockContent">
         <ul class="ProductList First">
             <?php
             $kt = DB::table('product')->where('category_product_id',$rows->category_product_id)->orderBy('product_id','desc')->limit(6)->get();
             foreach ( $kt as $rows) {
             ?>
             <li class="Odd">
                 <div id="ProductImage" class="ProductImage ProductImageTooltip po_1510729"> <a href="{{ URL::asset('customer/product/detail/'.$rows->product_id) }}"><img style="width: 100px;" alt="Lenovo Miix 8" src="{{ URL::asset('backend/images/'.$rows->c_img) }}"/></a> </div>
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
         <?php
             $xt = DB::table('product')->where('c_name',$rows->c_name)->first();
             $xx = $xt->category_product_id
         ?>
         <div class="ViewMore"> <a href="{{ URL::asset('customer/products/category/'.$xx) }}">Xem thêm</a> </div>
         <div class="Clear"></div>
     </div>
     <div class="defaultFooter FooterContent"></div>
     <div class="Clear"></div>


     <!-- -------------- -->

     <?php } ?>

 </div>
@endsection
