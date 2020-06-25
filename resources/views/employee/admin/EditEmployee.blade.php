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

            <form action="/admin/manageemployee/update" method="post">
                @csrf
                <div class="form-group">
                    <label for="id">ID</label>
                    <input type="text" class="form-control" value="{{ $employee->id }}" name="id" readonly>
                </div>
                <div class="form-group">
                    <label for="username">Fullname</label>
                    <input type="text" class="form-control" value="{{ $employee->fullname }}" name="fullname" required>
                </div>
                <div class="form-group">
                    <label for="password">Address</label>
                    <input type="text" class="form-control" value="{{ $employee->address }}" name="address" required>
                </div>
                <div class="form-group">
                    <label for="status">Phone</label>
                    <input type="text" class="form-control" value="{{ $employee->phone }}" name="phone" required>
                </div>
                <div class="form-group">
                    <label for="employeename">Birthday</label>
                    <input type="date" class="form-control" value="{{ $employee->birthday }}" name="birthday" required>
                </div>
                <div class="form-group">
                    <label for="employeename">Role</label>
                    <select name="role" required class="form-control">
                        <option value="seller" @if($employee->role == 'seller') selected @endif>Seller</option>
                        <option value="storemanager" @if($employee->role == 'storemanager') selected @endif>Store Manager</option>
                        <option value="seniormanager" @if($employee->role == 'seniormanager') selected @endif>Senior Manager</option>
                        <option value="telesale" @if($employee->role == 'telesale') selected @endif>Telesale</option>
                        <option value="admin" @if($employee->role == 'admin') selected @endif>Admin</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="employeename">Salary</label>
                    <input type="text" class="form-control" value="{{ $employee->salary }}" name="salary" required>
                </div>
                <div class="form-group">
                    <label for="employeename">Branch</label>
                    <select name="branch" required class="form-control">
                        @foreach($branches as $b)
                            <option value="{{ $b->id }}" @if($employee->branchesid == $b->id) selected @endif>{{ $b->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="status">Status</label>
                    <select name="status" required class="form-control">
                        <option value="0" @if($account->status == 0) selected @endif>Ngừng hoạt động</option>
                        <option value="1" @if($account->status == 1) selected @endif>Hoạt động</option>
                    </select>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="{{ URL::asset('/admin/manageemployee/detail/'.$employee->id) }}"><button type="button" class="btn btn-danger">Cancel</button></a>
                </div>
            </form>
        </div>
        <!-- end container-fluid -->

    </div>
@endsection
