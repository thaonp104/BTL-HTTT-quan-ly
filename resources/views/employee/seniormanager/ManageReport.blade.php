@extends('employee.layout.main')
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
                            <h4 class="m-t-0 header-title mb-4"><b>Report Stats</b></h4>
                            <form action="/seniormanager/managereport" method="GET">
                                <div class="form-group row">
                                    <label for="from" class="col-1 col-form-label">From:</label>
                                    <div class="col-5">
                                        <input class="form-control" type="date" name="start" value="{{ $start }}" required>
                                    </div>
                                    <label for="to" class="col-1 col-form-label">To:</label>
                                    <div class="col-5">
                                        <input class="form-control" type="date" name="end" value="{{ $end }}" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <label for="from" class="col-1 col-form-label">Branch:</label>
                                    <div class="col-11">
                                        <select class="form-control" name="branch">
                                            <option value="0"
                                                    @if($branch == 0) selected @endif>Tổng hợp</option>
                                            <option value="1" @if($branch == 1) selected @endif>Branch 1</option>
                                            <option value="2" @if($branch == 2) selected @endif>Branch 2</option>
                                            <option value="3" @if($branch == 3) selected @endif>Branch 3</option>
                                            <option value="null" @if($branch == null) selected @endif>Online</option>
                                        </select>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-info" style="margin-left: 90px; margin-top: 20px; margin-bottom: 20px">Submit</button>
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
                                    <th>Branch</th>
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
                                        <td>
                                            @if($bill->branchesid == 1)
                                                Branch 1
                                            @elseif($bill->branchesid == 2)
                                                Branch 2
                                            @elseif($bill->branchesid == 3)
                                                Branch 3
                                            @elseif($bill->status == null)
                                                Đơn online
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
