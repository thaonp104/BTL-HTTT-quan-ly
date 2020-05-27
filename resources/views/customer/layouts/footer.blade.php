<div id="Footer">
    <div id="FooterContainer">
      <div style="width:100%; float:left;">
        <div id="footer_wrapper">
          <?php
            use Illuminate\Support\Facades\DB;
            $arr=DB::table('group_product')->get();
            foreach ($arr as $rows) {
           ?>
          <div id="thong_tin" class="bottom_box">
            <ul>
              <li> <a class="tieu_de" href="{{URL::asset('customer/groupProducts/'.$rows->group_product_id)}}"><?php echo $rows->c_name ?></a> </li>
              <?php
                $check = DB::table('category_product')->where('group_product_id', $rows->group_product_id)->get();
                foreach ($check as $rows) {
              ?>
              <li> <a href="{{ URL::asset('customer/products/category/'.$rows->category_product_id) }}"><?php echo $rows->c_name ?></a> </li>
            <?php } ?>
            </ul>
          </div>
       <?php } ?>

          <div id="thong_tin" class="bottom_box bizmart_box">
            <ul>
              <li> <a class="tieu_de bizmart" href="#">C</a> <a href="#">ông ty Cổ phần Công nghệ DKT</a> </li>
              <li class="locate"> <a href="#"> <img src="{{ URL::asset('images/locate.gif') }}"/> 442 Độ Cấn, Ba Đình, Hà Nội </a> </li>
              <li class="ctinfo"> <a href="#"> <img src="{{ URL::asset('images/bsphone.gif') }}"/> +04 6674 2332 </a> <a href="#">
                      <img src="{{ URL::asset('images/mail.gif') }}"/> support$bizweb.vn </a> </li>
              <li class="fthotline"> <a href="#"> <span class="bold"> HOTLINE: <span>0934 515 339 - 04 6674 5832</span> </span> </a> </li>
            </ul>
          </div>
        </div>
      </div>
      <div id="wrap_all"></div>
    </div>
    <div id="Powerby"> Thiết kế bởi <a href="#" target="_blank" title="Giải pháp thiết kế web bán hàng số 1 Việt Nam">
            <strong>Bizweb</strong> </a><br/>
      &copy; Copyright 2008 - 2003 Bizweb.vn - Giải pháp thiết kế web bán hàng số 1 Việt Nam </div>
    <div class="Clear"></div>
  </div>
