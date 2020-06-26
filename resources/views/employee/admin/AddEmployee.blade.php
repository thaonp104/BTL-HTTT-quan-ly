@extends('employee.layout.main')
@section('head')
    <script type="text/javascript" src="{{ URL::asset('js/jquery.min.js') }}"></script>

    <script src="{{ URL::asset('assets\js\vendor.min.js') }}"></script>
@endsection
@section('menu')
    <ul class="metismenu" id="side-menu">

        <li class="menu-title">Admin</li>

        <li>
            <a href="/admin/managecustomer" class="waves-effect">
                <i class="ion-md-speedometer"></i>
                <span>  Manage Customer  </span>
            </a>
        </li>

        <li>
            <a href="/admin/manageemployee" class="waves-effect">
                <i class="ion-md-speedometer"></i>
                <span>  Manage Employee  </span>
            </a>
        </li>

    </ul>
@endsection
@section('content')
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">

            <form action="/admin/manageemployee/store" method="post">
                @csrf
                <div class="form-group">
                    <label for="username">Fullname</label>
                    <input type="text" class="form-control" name="fullname" @if(isset($fullname)) value="{{ $fullname }}"  @endif required>
                </div>
                <div class="form-group">
                    <label for="password">Address</label>
                    <input type="text" class="form-control" @if(isset($address)) value="{{ $address }}"  @endif  name="address" required>
                </div>
                <div class="form-group">
                    <label for="status">Phone</label>
                    <input type="text" class="form-control" @if(isset($phone)) value="{{ $phone }}"  @endif name="phone" required>
                </div>
                <div class="form-group">
                    <label for="employeename">Birthday</label>
                    <input type="date" class="form-control"  name="birthday" @if(isset($birthday)) value="{{ $birthday }}"  @endif required>
                </div>
                <div class="form-group">
                    <label for="employeename">Role</label>
                    <select name="role" required class="form-control">
                        <option value="seller" @if(isset($role) && $role == 'seller') selected @endif>Seller</option>
                        <option value="storemanager" @if(isset($role) && $role == 'storemanager') selected @endif>Store Manager</option>
                        <option value="seniormanager" @if(isset($role) && $role == 'seniormanager') selected @endif>Senior Manager</option>
                        <option value="telesale" @if(isset($role) && $role == 'telesale') selected @endif>Telesale</option>
                        <option value="admin" @if(isset($role) && $role == 'admin') selected @endif>Admin</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="employeename">Salary</label>
                    <input type="text" class="form-control" name="salary" @if(isset($salary)) value="{{ $salary }}"  @endif required>
                </div>
                <div class="form-group">
                    <label for="employeename">Branch</label>
                    <select name="branch" required class="form-control">
                        @foreach($branches as $b)
                            <option value="{{ $b->id }}" @if(isset($branch) && $branch == $b->id) selected @endif>{{ $b->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="employeename">Username</label>
                    <input type="text" class="form-control" name="username" @if(isset($username)) value="{{ $username }}"  @endif required>
                </div>
                <div class="form-group">
                    <label for="employeename">Password</label>
                    <input type="password" class="form-control" id="pw" name="password" required>
                </div>
                <div class="form-group">
                    <label for="employeename">Re Password</label>
                    <input type="password" class="form-control" id="repw" name="repassword" required>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary" onclick="checkpw()">Submit</button>
                    <a href="{{ URL::asset('/admin/manageemployee') }}"><button type="button" class="btn btn-danger">Cancel</button></a>
                </div>
            </form>
        </div>
        @if(isset($error) && $error == 'password')
            <script>
                alert('Nhập sai ô Re Password, yêu cầu nhập lại!!');
            </script>
        @elseif(isset($error) && $error == 'username')
            <script>
                alert('Username bị trùng, yêu cầu nhập lại!!');
            </script>
        @elseif(isset($error) && $error == 'phone')
            <script>
                alert('Số điện thoại không đúng format (chỉ chứa các kí tự số, độ dài từ 9-11)!!!');
            </script>
        @elseif(isset($error) && $error == 'trungphone')
            <script>
                alert('Số điện thoại đã được sử dụng, yêu cầu nhập lại!!!');
            </script>
        @endif
        <!-- end container-fluid -->

    </div>
@endsection
