
  <div id="cate-menu" class="DefaultModule cate-menu">
    <div class="defaultTitle cate-menu-title"> <span style="padding-left:10px;">Danh mục sản phẩm</span> </div>
    <div class="defaultContent cate-menu-content">
      <!-- list-left -->
      <ul>
        <?php
          use Illuminate\Support\Facades\DB;
          $arr = DB::table('group_product')->get();
          foreach ($arr as $rows) {
         ?>
        <li class="leve10 content-first">
            <a href="{{URL::asset('customer/groupProducts/'.$rows->group_product_id)}}">
                <span style="font-weight:bold;"><?php echo $rows->c_name; ?></span>
            </a>
          <ul style="display:block">
            <?php
              $list_left = DB::table('category_product')->where('group_product_id', $rows->group_product_id)->get();
             ?>
             <?php foreach ($list_left as $rows) {
              ?>
              <li class="leve11 first">
                  <a href="{{ URL::asset('customer/products/category/'.$rows->category_product_id) }}">
                      <span><?php echo $rows->c_name ?></span>
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
