@extends('customer.layouts.main')
@section('title')
    Edit Password
@endsection
@section('content')
    <input type="hidden" value="{{ $al }}" id="al">
    <script>
        document.getElementById("item_menu1").classList.remove('current');
        var al = document.getElementById('al').value;
        if(al == 'error'){
            alert('Mập khẩu sai hoặc mật khẩu mới nhập lại lỗi, Mời nhập lại!!')
        }
    </script>
    <div style="width: 1170px; margin: 40px auto" class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header bg-danger text-white">Sửa thông tin cá nhân</div>
                <div class="card-body">
                    <form method="post" enctype="multipart/form-data" action="{{ URL::asset(route('customer.updatePassword')) }}">
                        @csrf
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-4">Mật khẩu hiện tại:</div>
                                <div class="col-md-8"><input required type="password" class="form-control" name="pw"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-4">Mật khẩu mới:</div>
                                <div class="col-md-8"><input required type="password" class="form-control" name="newpw"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-4">Nhập lại mật khẩu mới:</div>
                                <div class="col-md-8"><input required type="password" class="form-control" name="renewpw"></div>
                            </div>
                        </div>
                </div>
                <!--  -->
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-4">
                            <input type="submit" name="" value="Cập nhật" class="btn btn-primary">
                        </div>
                        <div class="col-md-3">
                            <input type="reset" name="" value="Nhập lại" class="btn btn-danger">
                        </div>
                        <div class="col-md-3">
                            <a href="{{ URL::asset(route('customer.inforAccount')) }}">
                                <input type="button" value="Thoát" class="btn btn-primary">
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
