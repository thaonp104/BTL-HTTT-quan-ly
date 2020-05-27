<div class="newsLastest DefaultModule">
  <?php
    use Illuminate\Support\Facades\DB;
    $arr = DB::table('category_news')->get();
    foreach ($arr as $rows) {
   ?>
  <div class="defaultTitle newsLastest-Title"> <span><?php echo $rows->c_name ?></span> </div>
  <?php
      $check = DB::table('news')->where('category_news_id', $rows->category_news_id)->orderBy('news_id', 'desc')->limit(5)->get();
  ?>
  <div class="defaultContent newsLastest-content">
  <?php foreach ($check as $rows) {
   ?>
    <div class="newsLastest_Item">
      <div class="newsLastest_Image"><img style="width: 200px;" alt="" src="{{ URL::asset('news/'.$rows->c_img) }}"/></div>
      <div class="newsLastest_Title"> <a href="{{ URL::asset('customer/news/detail/'.$rows->news_id) }}"><span><?php echo $rows->c_name ?></span></a> </div>
      <div class="Clear"></div>
    </div>
     <?php } ?>
    <div class="ViewMore"> <a href="{{ URL::asset('customer/news/category/'.$rows->category_news_id) }}">Xem thêm</a> </div>
    <div class="Clear"></div>
  </div>
  <div class="clear defaultFooter newsLastest-footer"></div>
<?php } ?>
</div>


