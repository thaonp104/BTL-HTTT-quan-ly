@extends('employee.layout.main')
@section('head')
    <script type="text/javascript" src="{{ URL::asset('js/jquery.min.js') }}"></script>

    <script src="{{ URL::asset('assets\js\vendor.min.js') }}"></script>
@endsection
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

            <form action="/admin/managecustomer/update" method="post">
                @csrf
                <div class="form-group">
                    <label for="id">ID</label>
                    <input type="text" class="form-control" value="{{ $customer->id }}" name="id" readonly>
                </div>
                <div class="form-group">
                    <label for="username">Fullname</label>
                    <input type="text" class="form-control" value="{{ $customer->fullname }}" readonly>
                </div>
                <div class="form-group">
                    <label for="username">Address</label>
                    <input type="text" class="form-control" value="{{ $customer->address }}" readonly>
                </div>
                <div class="form-group">
                    <label for="username">Phone</label>
                    <input type="text" class="form-control" value="{{ $customer->phone }}" readonly>
                </div>
                <div class="form-group">
                    <label for="username">Birthday</label>
                    <input type="text" class="form-control" value="{{ $customer->birthday }}" readonly>
                </div>
                @if($account!=null)
                    <div class="form-group">
                        <label for="status">Status</label>
                        <input type="text" class="form-control"
                               value="@if($account->status == 0) Ngừng hoạt động @else Hoạt động @endif" readonly>
                    </div>
                @endif
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Chuyển trạng thái</button>
                    <a href="{{ URL::asset('/admin/managecustomer/detail/'.$customer->id) }}"><button type="button" class="btn btn-danger">Cancel</button></a>
                </div>
            </form>
        </div>
        <!-- end container-fluid -->

    </div>
@endsection
