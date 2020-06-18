@extends('employee.layout.main')
@section('menu')
    <ul class="metismenu" id="side-menu">

        <li class="menu-title">Admin</li>

        <li>
            <a href="/admin/manageaccount" class="waves-effect">
                <i class="ion-md-speedometer"></i>
                <span>  Manage Account  </span>
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
                    <input type="text" class="form-control" value="1" readonly>
                </div>
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" value="username" readonly>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="text" class="form-control" value="password" readonly>
                </div>
                <div class="form-group">
                    <label for="status">Status</label>
                    <input type="text" class="form-control" value="Online" readonly>
                </div>
                <div class="form-group">
                    <label for="employeeid">Employee ID</label>
                    <input type="text" class="form-control" value="1" readonly>
                </div>
                <div class="form-group">
                    <label for="employeename">Employee Name</label>
                    <input type="text" class="form-control" value="Employee Name" readonly>
                </div>
                <div class="form-group">
                    <a href="{{ URL::asset('/admin/manageaccount/edit/1') }}"><button type="button" class="btn btn-primary">Update Account</button></a>
                </div>
            </form>
        </div>
        <!-- end container-fluid -->

    </div>
@endsection
