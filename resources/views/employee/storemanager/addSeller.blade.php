@extends('employee.layout.main')
@section('menu')
    <ul class="metismenu" id="side-menu">

        <li class="menu-title">Store Manager</li>

        <li>
            <a href="/storemanager/manageseller" class="waves-effect">
                <i class="ion-md-speedometer"></i>
                <span>  Manage Seller  </span>
            </a>
        </li>

        <li>
            <a href="/storemanager/manageproduct" class="waves-effect">
                <i class="ion-md-speedometer"></i>
                <span>  Manage Product  </span>
            </a>
        </li>

        <li>
            <a href="/storemanager/managebill" class="waves-effect">
                <i class="ion-md-speedometer"></i>
                <span> Manage Bill </span>
            </a>
        </li>

        <li>
            <a href="/storemanager/managereportstore" class="waves-effect">
                <i class="ion-md-speedometer"></i>
                <span>  Manage Report Store  </span>
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
                    <label for="name">Name</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="dateofbirth">Date of birth</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="salary">Salary</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="branch">Branch</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="account">Account</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="/storemanager/manageseller"><button type="button" class="btn btn-danger">Cancel</button></a>
                </div>
            </form>
        </div>
        <!-- end container-fluid -->

    </div>
@endsection