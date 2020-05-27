<?php
    use Illuminate\Support\Facades\DB;
    $arr = DB::table('advs')->orderBy('adv_id','desc')->get();
    foreach ($arr as $rows) {
 ?>
<div id="TextHTML-Module" class="DefaultModule">
    <a href="<?php echo $rows->c_url ?>"> <img style="height:100%;"  src="{{ URL::asset('banner/'.$rows->c_img) }}"/> </a>
 </div>
<?php } ?>
