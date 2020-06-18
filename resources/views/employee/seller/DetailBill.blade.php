@extends('employee.layout.main')
@section('menu')
    <ul class="metismenu" id="side-menu">

        <li class="menu-title">Seller</li>

        <li>
            <a href="/seller/manageproduct" class="waves-effect">
                <i class="ion-md-speedometer"></i>
                <span>  Manage Product  </span>
            </a>
        </li>

        <li>
            <a href="/seller/managebill" class="waves-effect">
                <i class="ion-md-basket"></i>
                <span> Manage Bill </span>
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
                    <label for="date">Date</label>
                    <input type="text" class="form-control" value="8/6/2020" readonly>
                </div>
                <div class="form-group">
                    <label for="status">Status</label>
                    <select class="form-control" readonly>
                        <option value="0">On going</option>
                        <option value="1">Done</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="total">Total</label>
                    <input type="text" class="form-control" value="20.000.000" readonly>
                </div>
                <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" class="form-control" value="23 Wall Street" readonly>
                </div>
                <div class="form-group">
                    <label for="accountid">Account ID</label>
                    <input type="text" class="form-control" value="1" readonly>
                </div>
                <div class="form-group">
                    <label for="customername">Customer Name</label>
                    <input type="text" class="form-control" value="Customer Name" readonly>
                </div>
                <div class="form-group">
                    <a href="{{ URL::asset('/seller/managebill/updatebill/1') }}"><button type="button" class="btn btn-primary">Update Bill</button></a>
                </div>
            </form>
        </div>
        <!-- end container-fluid -->

    </div>
@endsection
