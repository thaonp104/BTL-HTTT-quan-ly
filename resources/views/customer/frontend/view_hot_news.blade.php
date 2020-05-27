<div class="newsLastest DefaultModule">
    <div class="defaultTitle newsLastest-Title"> <span>Tin tức</span> </div>
    <div class="defaultContent newsLastest-content">
        <?php
            use Illuminate\Support\Facades\DB;
            $arr = DB::table('news')->where('c_hotnews',1)->orderBy('news_id','desc')->limit(3)->get();
            foreach ($arr as $rows) {
         ?>
      <div class="newsLastest_Item">
        <div  class="newsLastest_Image"><img style="width: 200px;" alt="" src="{{ URL::asset('news/'.$rows->c_img) }}"></div>
        <div class="newsLastest_Title"> <a href="{{ URL::asset('customer/news/detail/'.$rows->news_id) }}"><span><?php echo $rows->c_name ?></span></a>
          <p class="newsLastest_Summary"></p>
        </div>
        <div class="Clear"></div>
      </div>

    <?php } ?>
      <div class="ViewMore"> <a href="{{ URL::asset(route('customer.news')) }}">Xem thêm</a> </div>
      <div class="Clear"></div>
    </div>
    <div class="clear defaultFooter newsLastest-footer"></div>
</div>
