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
     <div class="defaultTitle TitleContent"> <h5><?php echo $arr->name ?></h5> </div>
 <?php
 use Illuminate\Support\Facades\DB;
 foreach ($check as $rows) {
 ?>
 <!--  -->
     <div class="defaultTitle TitleContent"> <span><?php echo $rows->name ?></span> </div>
     <div class="defaultContent BlockContent">
         <ul class="ProductList First">
             <?php
             $kt = DB::table('products')->where('brandsid',$rows->id)->limit(6)->get();
             foreach ( $kt as $rows) {
             ?>
             <li class="Odd">
                 <div id="ProductImage" class="ProductImage ProductImageTooltip po_1510729"> <a href="{{ URL::asset('customer/product/detail/'.$rows->id) }}"><img style="width: 100px;" alt="Lenovo Miix 8" src="{{ URL::asset('images/'.$rows->img) }}"/></a> </div>
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
         </ul>
         <!-- end productlist first-->


         <!-- end ProductList last-->
         <?php
             $xt = DB::table('products')->where('name',$rows->name)->first();
             $xx = $xt->categoriesid
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
