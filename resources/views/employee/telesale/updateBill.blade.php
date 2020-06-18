@extends('employee.layout.main')
@section('menu')
    <ul class="metismenu" id="side-menu">

        <li class="menu-title">Online Handling Employee</li>

        <li>
            <a href="/telesale/managebill" class="waves-effect">
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
                    <input type="text" class="form-control" value="1" disabled>
                </div>
                <div class="form-group">
                    <label for="date">Date</label>
                    <input type="text" class="form-control" value="8/6/2020">
                </div>
                <div class="form-group">
                    <label for="status">Status</label>
                    <select class="form-control">
                        <option value="0">On going</option>
                        <option value="1">Done</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="total">Total</label>
                    <input type="text" class="form-control" value="20.000.000">
                </div>
                <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" class="form-control" value="23 Wall Street">
                </div>
                <div class="form-group">
                    <label for="accountid">Account ID</label>
                    <input type="text" class="form-control" value="1" disabled>
                </div>
                <div class="form-group">
                    <label for="customername">Customer Name</label>
                    <input type="text" class="form-control" value="Customer Name" disabled>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="/telesale/managebill/detail/1"><button type="button" class="btn btn-danger">Cancel</button></a>
                </div>
            </form>
        </div>
        <!-- end container-fluid -->

    </div>
@endsection
