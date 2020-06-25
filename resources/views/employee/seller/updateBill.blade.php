@extends('employee.layout.main')
@section('head')
    <script type="text/javascript" src="{{ URL::asset('js/jquery.min.js') }}"></script>

    <script src="{{ URL::asset('assets\js\vendor.min.js') }}"></script>
@endsection
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

            <form action="/seller/managebill/updatebill" method="post">
                @csrf
                <div class="form-group">
                    <label for="id">ID</label>
                    <input type="text" class="form-control" value="{{ $bill->id }}" name="id" readonly>
                </div>
                <div class="form-group">
                    <label for="productname">Customer's name</label>
                    <input type="text" class="form-control" value="{{ $customer->fullname }}" disabled>
                </div>
                <div class="form-group">
                    <label for="date">Customer's Phone</label>
                    <input type="text" class="form-control" value="{{ $customer->phone }}" disabled>
                </div>
                <div class="form-group">
                    <label for="branchname">Address</label>
                    <input type="text" class="form-control" value="{{ $bill->address }}" disabled>
                </div>
                <div class="form-group">
                    <label for="date">Date</label>
                    <input type="text" class="form-control" value="{{ $bill->date }}" disabled>
                </div>
                <div class="form-group">
                    <label for="date">Total</label>
                    <input type="text" class="form-control" value="{{ $bill->total }}" disabled>
                </div>
                <div class="form-group">
                    <label for="total">Status</label>
                    <input type="text" class="form-control"
                           value="@if($bill->status == 0) Chờ xác nhận
                        @elseif($bill->status == 1) Đang giao hàng
                        @elseif($bill->status == 2) Đã giao hàng
                        @elseif($bill->status == 3) Đã huỷ
                        @endif
                               " disabled>
                </div>
                <div class="form-group">
                    <label for="total">Change status</label>
                    @if($bill->status == 0)
                        <select name="status" class="form-control" required>
                            <option value="1">Đang giao hàng</option>
                            <option value="2">Đã giao hàng</option>
                            <option value="3">Đã huỷ</option>
                        </select>
                    @elseif($bill->status == 2)
                        <select name="status" class="form-control" required>
                            <option value="3">Đã huỷ</option>
                        </select>
                    @endif
                </div>
                <div class="form-group">
                    <label for="address">Employee</label>
                    <input type="text" class="form-control" value="{{ $bill->employeesid }}" disabled>
                </div>
                <table class="table table-bordered dt-responsive nowrap">
                    <tr>
                        <th>Product</th>
                        <th>quantity</th>
                        <th>Price</th>
                    </tr>
                    @foreach($items as $item)
                        <tr>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->quantity }}</td>
                            <td>{{ $item->pricenew*$item->quantity }}</td>
                        </tr>
                    @endforeach
                </table>
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="{{ URL::asset('/seller/managebill/detail/'.$bill['id']) }}"><button type="button" class="btn btn-danger">Cancel</button></a>
            </form>
        </div>
        <!-- end container-fluid -->

    </div>
@endsection
