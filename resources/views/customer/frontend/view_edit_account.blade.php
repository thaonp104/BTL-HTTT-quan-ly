@extends('customer.layouts.main')
@section('title')
    Edit account
@endsection
@section('content')
    <script>
        document.getElementById("item_menu1").classList.remove('current');
    </script>
<div style="width: 1170px; margin: 40px auto" class="row justify-content-center">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header bg-danger text-white">Sửa thông tin cá nhân</div>
            <div class="card-body">
                <form method="post" enctype="multipart/form-data" action="{{ URL::asset(route('customer.updateAccount')) }}">
                    @csrf
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-4">Họ và tên:</div>
                            <div class="col-md-8"><input required type="text" class="form-control" name="c_name" value="<?php echo isset($arr->fullname)?$arr->fullname:""?>"></div>
                        </div>
                    </div>
                    <!--  -->
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-4">Ngày sinh:</div>
                            <div class="col-md-8"><input required type="date" class="form-control" name="c_birthday" value="<?php echo isset($arr->birthday)?$arr->birthday:""?>"></div>
                        </div>
                    </div>
                    <!--  -->
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-4">Địa chỉ:</div>
                            <div class="col-md-8"><input required type="text" class="form-control" name="c_adress" value="<?php echo isset($arr->address)?$arr->address:""?>"></div>
                        </div>
                    </div>
                    <!--  -->
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-4">Số điện thoại (+84):</div>
                            <div class="col-md-8"><input required type="number" class="form-control" name="c_phone" value="<?php echo isset($arr->phone)?$arr->phone:""?>"></div>
                        </div>
                    </div>
                    <!--  -->

                    <!--  -->

            </div>
            <!--  -->
            <div class="form-group">
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-3">
                        <input type="submit" name="" value="Cập nhật" class="btn btn-primary">
                    </div>
                    <div class="col-md-3">
                        <input type="reset" name="" value="Nhập lại" class="btn btn-danger">
                    </div>
                    <div class="col-md-4">
                        <a href="{{ URL::asset('customer/editPassword/normal') }}">
                            <input type="button" value="Thay đổi mật khẩu" class="btn btn-primary">
                        </a>
                    </div>
                    <div class="col-md-1"></div>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>
</div>
    @endsection
