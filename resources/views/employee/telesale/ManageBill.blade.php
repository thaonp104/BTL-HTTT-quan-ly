
@extends('employee.layout.main')
@section('head')
    <script type="text/javascript" src="{{ URL::asset('js/jquery.min.js') }}"></script>

    <script src="{{ URL::asset('assets\js\vendor.min.js') }}"></script>
@endsection
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

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body table-responsive">
                            <h4 class="m-t-0 header-title mb-4"><b>Bills</b></h4>
                            <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Customer's name</th>
                                    <th>Date</th>
                                    <th>Total</th>
                                    <th>Status</th>
                                    <th>Detail</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($bills as $bill)
                                    <tr>
                                        <td>{{$bill->id}}</td>
                                        <td>{{ $bill->fullname }}</td>
                                        <td>{{ $bill->date }}</td>
                                        <td> {{ $bill->total }}</td>
                                        <td>
                                            @if($bill->status == 0)
                                                Chờ xác nhận
                                            @elseif($bill->status == 1)
                                                Đang giao hàng
                                            @elseif($bill->status == 2)
                                                Đã giao hàng
                                            @elseif($bill->status == 3)
                                                Đã huỷ
                                            @endif
                                        </td>
                                        <td style="width: 1%"><a href="/telesale/managebill/detail/{{$bill->id}}" class="btn btn-primary">Detail</a></td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
