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
                    <input type="text" class="form-control" value="{{ $bill->id }}" disabled>
                </div>
                <div class="form-group">
                    <label for="productname">Customer's name</label>
                    <input type="text" class="form-control" value="{{ $bill->fullname }}" disabled>
                </div>
                <div class="form-group">
                    <label for="date">Customer's Phone</label>
                    <input type="text" class="form-control" value="{{ $bill->phone }}" disabled>
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
                    <label for="address">Employee</label>
                    <input type="text" class="form-control" value="{{ $bill->employeesid }}" disabled>
                </div>
                <table class="table table-bordered dt-responsive nowrap">
                    <tr>
                        <th>Id Product</th>
                        <th>quantity</th>
                        <th>Price</th>
                    </tr>
                    @foreach($items as $item)
                        <tr>
                            <td>{{ $item->product_branchid }}</td>
                            <td>{{ $item->quantity }}</td>
                            <td>{{ $item->pricenew*$item->quantity }}</td>
                        </tr>
                    @endforeach
                </table>
            </form>
        </div>
        <!-- end container-fluid -->

    </div>
@endsection
