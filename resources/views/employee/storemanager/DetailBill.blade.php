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
                    <label for="id">ID</label>
                    <input type="text" class="form-control" value="1" disabled>
                </div>
                <div class="form-group">
                    <label for="productname">Product name</label>
                    <input type="text" class="form-control" value="Screwdriver" disabled>
                </div>
                <div class="form-group">
                    <label for="branchname">Branch name</label>
                    <input type="text" class="form-control" value="Branch Name" disabled>
                </div>
                <div class="form-group">
                    <label for="date">Date</label>
                    <input type="text" class="form-control" value="8/6/2020" disabled>
                </div>
                <div class="form-group">
                    <label for="status">Status</label>
                    <select class="form-control" disabled>
                        <option value="0">On going</option>
                        <option value="1">Done</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="total">Total</label>
                    <input type="text" class="form-control" value="20.000.000" disabled>
                </div>
                <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" class="form-control" value="23 Wall Street" disabled>
                </div>
                <div class="form-group">
                    <label for="accountid">Account ID</label>
                    <input type="text" class="form-control" value="1" disabled>
                </div>
                <div class="form-group">
                    <label for="customername">Customer Name</label>
                    <input type="text" class="form-control" value="Customer Name" disabled>
                </div>
            </form>
        </div>
        <!-- end container-fluid -->

    </div>
@endsection
