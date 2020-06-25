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

            <form>
                <div class="form-group">
                    <label for="id">ID</label>
                    <input type="text" class="form-control" value="{{ $employee->id }}" readonly>
                </div>
                <div class="form-group">
                    <label for="username">Fullname</label>
                    <input type="text" class="form-control" value="{{ $employee->fullname }}" readonly>
                </div>
                <div class="form-group">
                    <label for="password">Address</label>
                    <input type="text" class="form-control" value="{{ $employee->address }}" readonly>
                </div>
                <div class="form-group">
                    <label for="status">Phone</label>
                    <input type="text" class="form-control" value="{{ $employee->phone }}" readonly>
                </div>
                <div class="form-group">
                    <label for="employeename">Birthday</label>
                    <input type="text" class="form-control" value="{{ $employee->birthday }}" readonly>
                </div>
                <div class="form-group">
                    <label for="employeename">Role</label>
                    <input type="text" class="form-control" value="{{ $employee->role }}" readonly>
                </div>
                <div class="form-group">
                    <label for="employeename">Salary</label>
                    <input type="text" class="form-control" value="{{ $employee->salary }}" readonly>
                </div>
                <div class="form-group">
                    <label for="employeename">Branch</label>
                    <input type="text" class="form-control" value="@foreach($branches as $b) @if($b->id == $employee->branchesid) {{ $b->name }} @endif @endforeach" readonly>
                </div>
                <div class="form-group">
                    <label for="status">Status</label>
                    <input type="text" class="form-control"
                           value="@if($account->status == 0) Ngừng hoạt động @else Hoạt động @endif" readonly>
                </div>
                <div class="form-group">
                    <a href="{{ URL::asset('/admin/manageemployee/edit/'.$employee->id) }}"><button type="button" class="btn btn-primary">Update Employee</button></a>
                </div>
            </form>
        </div>
        <!-- end container-fluid -->

    </div>
@endsection
