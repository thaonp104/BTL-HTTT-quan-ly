<div class="top_right">
             <div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
  	<?php
        use Illuminate\Support\Facades\DB;
//      $this->model=new model();
//      $arr=$this->model->get_all("select * from slide order by pk_slide_id desc limit 0,3");
//        $arr = DB::table('slide')->orderBy('pk_slide_id','desc')->get();
//        var_dump($arr);
//  		$n=1;
//  		foreach ($arr as $values) {
  	 ?>
{{--    <li data-target="#demo" data-slide-to="<?php echo $n ?>" <?php if($n==1){ ?> class="active" <?php } ?> ></li>--}}
{{--    <?php $n++; ?>--}}
{{--    <?php  } ?>--}}
  </ul>

  <!-- The slideshow -->
  <div class="carousel-inner">
    <?php
  	    $n=1;
//  	foreach ($arr as $rows) {
  	 ?>
    <div class="carousel-item <?php echo $n==1?"active":"";  ?>">
      <img style="height: 236px;width: 743px;" src="{{ URL::asset('images/slide1.jpg') }}" alt="Los Angeles">
    </div>
      <div class="carousel-item <?php echo $n==2?"active":"";  ?>">
          <img style="height: 236px;width: 743px;" src="{{ URL::asset('images/slide2.jpg') }}" alt="Los Angeles">
      </div>
      <div class="carousel-item <?php echo $n==3?"active":"";  ?>">
          <img style="height: 236px;width: 743px;" src="{{ URL::asset('images/slide3.jpg') }}" alt="Los Angeles">
      </div>
    <?php $n++ ?>
<!--    --><?php //} ?>
  </div>

  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>

</div>
  </div>
