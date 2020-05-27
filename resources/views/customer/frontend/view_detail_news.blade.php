@extends('customer.layouts.main')
@section('title')
    Detail News
@endsection
@section('content')
    <script>
        document.getElementById("item_menu1").classList.remove('current');
    </script>
<div class="row justify-content-center" style="width: 1170px; margin: 40px auto">
	<div class="col-md-10">
		<header style="color: green"><h4>TIN TỨC</h4></header>

		<div style="margin-top: 10px;"><h5><?php echo $arr->c_name ?></h5></div>
		<div><img style="width: 800px;" src="{{ URL::asset('news/'.$arr->c_img) }}"></div>
		<div><?php echo $arr->c_content ?></div>
		<div><?php echo $arr->c_description ?></div>
	</div>
</div>
@endsection
