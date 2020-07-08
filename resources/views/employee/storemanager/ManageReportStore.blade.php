@extends('employee.layout.main')
@section('head')
    <script type="text/javascript" src="{{ URL::asset('js/jquery.min.js') }}"></script>

    <script src="{{ URL::asset('assets\js\vendor.min.js') }}"></script>
@endsection
@section('menu')
    <ul class="metismenu" id="side-menu">

        <li class="menu-title">Store Manager</li>

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

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body table-responsive">
                            <h4 class="m-t-0 header-title mb-4"><b>Report Store Stats</b></h4>
                            <form action="/storemanager/managereportstore" method="GET">
                                <div class="form-group row">
                                    <label for="from" class="col-1 col-form-label">From:</label>
                                    <div class="col-5">
                                        <input class="form-control" type="date" name="start" required>
                                    </div>
                                    <label for="to" class="col-1 col-form-label">To:</label>
                                    <div class="col-5">
                                        <input class="form-control" type="date" name="end" required>
                                    </div>
                                    <button type="submit" class="btn btn-info" style="margin-left: 102px; margin-top: 20px">Submit</button>
                                </div>
                            </form>
                            <h4>Total: ${{ number_format($total) }}</h4>
                            <table class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Customer's name</th>
                                        <th>Date</th>
                                        <th>Total</th>
                                        <th>Status</th>
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
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->
        </div>
        <!-- end container-fluid -->

    </div>
@endsection
