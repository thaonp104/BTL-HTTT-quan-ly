@extends('employee.layout.main')
@section('head')
    <script type="text/javascript" src="{{ URL::asset('js/jquery.min.js') }}"></script>

    <script src="{{ URL::asset('assets\js\vendor.min.js') }}"></script>
@endsection
@section('menu')
    <ul class="metismenu" id="side-menu">

        <li class="menu-title">Senior Manager</li>

        <li>
            <a href="/seniormanager/manageproduct" class="waves-effect">
                <i class="ion-md-speedometer"></i>
                <span>  Manage Product  </span>
            </a>
        </li>

        <li>
            <a href="/seniormanager/managestore" class="waves-effect">
                <i class="ion-md-speedometer"></i>
                <span> Manage Store </span>
            </a>
        </li>

        <li>
            <a href="/seniormanager/managereport" class="waves-effect">
                <i class="ion-md-speedometer"></i>
                <span>  Manage Report  </span>
            </a>
        </li>

        <li>
            <a href="/seniormanager/managestock" class="waves-effect">
                <i class="ion-md-speedometer"></i>
                <span>  Manage Stock  </span>
            </a>
        </li>

    </ul>
@endsection
@section('content')
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">

            <form action="/seniormanager/managestore/addstore" method="post">
                @csrf
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" placeholder="name" name="name">
                </div>
                <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" class="form-control" placeholder="address" name="address">
                </div>
                <div class="form-group">
                    <label for="address">Phone</label>
                    <input type="text" class="form-control" placeholder="phone" name="phone">
                </div>
                <button type="submit" class="btn btn-primary">Add</button>
                <a href="{{ URL::asset('seniormanager/managestore') }}"><button type="button" class="btn btn-danger">Cancel</button></a>
            </form>
        </div>
        <!-- end container-fluid -->

    </div>
@endsection
