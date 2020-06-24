
  <div id="cate-menu" class="DefaultModule cate-menu">
    <div class="defaultTitle cate-menu-title"> <span style="padding-left:10px;">Danh mục sản phẩm</span> </div>
    <div class="defaultContent cate-menu-content">
      <!-- list-left -->
      <ul>
        <?php
          use Illuminate\Support\Facades\DB;
          $arr = DB::table('categories')->get();
          foreach ($arr as $rows) {
         ?>
        <li class="leve10 content-first">
            <a href="{{URL::asset('customer/groupProducts/'.$rows->id)}}">
                <span style="font-weight:bold;"><?php echo $rows->name; ?></span>
            </a>
          <ul style="display:block">
            <?php
              $brand_category = DB::table('brand_category')->select('brandsid')
                  ->where('categoriesid', $rows->id);
              $list_left = DB::table('brands')->whereIn('id', $brand_category)->get();
             ?>
             <?php foreach ($list_left as $row) {
              ?>
              <li class="leve11 first">
                  <a href="{{ URL::asset('customer/products/category/'.$row->id.'/'.$rows->id) }}">
                      <span><?php echo $row->name ?></span>
                  </a>
                <ul style="display:block;">
                </ul>
              </li>
            <?php } ?>
          </ul>
        </li>
        <?php } ?>
        <!-- end list left -->
      </ul>
    </div>
    <div class="defaultFooter cate-menu-footer">
      <div></div>
    </div>
  </div>
