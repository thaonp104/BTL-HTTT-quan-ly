@extends('customer.layouts.main')
@section('title')
    Information account
@endsection
@section('content')
    <script>
        document.getElementById("item_menu1").classList.remove('current');
    </script>
<div class="row justify-content-center" style="width: 1170px; margin: 40px auto">
	<div class="col-md-10">
		<form>
			<div class="card-header" style="margin-bottom: 10px;">Thông tin tài khoản của bạn</div>

				<div class="row">
					<div class="col-md-3">Tài khoản: </div>
					<div class="col-md-9"><?php echo $arr->username; ?></div>
				</div><div class="row">
					<div class="col-md-3">Họ tên: </div>
					<div class="col-md-9"><?php echo $inf->fullname; ?></div>
				</div>
				<div class="row">
					<div class="col-md-3">Ngày sinh: </div>
					<div class="col-md-9"><?php echo $inf->birthday;
							 ?></div>
				</div>
				<div class="row">
					<div class="col-md-3">Địa chỉ: </div>
					<div class="col-md-9"><?php echo $inf->address; ?></div>
				</div>
				<div class="row">
					<div class="col-md-3">Số điện thoại(+84): </div>
					<div class="col-md-9"><?php echo $inf->phone; ?></div>
				</div>
				<div class="row">
					<div class="col-md-3"></div>
					<div class="col-md-9">
						<a href="{{ URL::asset(route('customer.editAccount')) }}">Sửa thông tin cá nhân</a>
					</div>
				</div>

	</form>
	</div>
</div>
    @endsection
