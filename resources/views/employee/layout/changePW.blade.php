@extends('employee.layout.main')
@section('menu')
    <ul class="metismenu" id="side-menu">

        <li class="menu-title">Online Handling Employee</li>

        <li>
            <a href="#" class="waves-effect">
                <i class="ion-md-basket"></i>
                <span>Home Page</span>
            </a>
        </li>

    </ul>
@endsection

@section('content')
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">

            <form action="/employee/updatePW" method="POST">
                @csrf
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" name="pw" required>
                </div>
                <div class="form-group">
                    <label for="newpassword">New Password</label>
                    <input type="password" class="form-control" name="newpw" required>
                </div>
                <div class="form-group">
                    <label for="newpassword2">Retype New Password</label>
                    <input type="password" class="form-control" name="renewpw" required>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                    <a href="/home"><button type="button" class="btn btn-danger">Cancel</button></a>
                </div>
            </form>
        </div>
        <!-- end container-fluid -->

    </div>
    <input type="hidden" name="error" value="{{ $error }}" id="error">
    <input type="hidden" name="success" value="{{ $success }}" id="success">
    <script>
        let error = document.getElementById('error').value;
        let success = document.getElementById('success').value;
        if (error==1) alert('Nhập sai thông tin password hoặc Retype password mới không đúng, xin nhập lại!') ;
        else if (success==1) alert('Cập nhật thành công!') ;
    </script>
@endsection
