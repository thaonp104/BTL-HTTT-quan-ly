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

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body table-responsive">
                            <h4 class="m-t-0 header-title mb-4"><b>Bills</b></h4>
                            <div id="datatable_filter" class="dataTables_filter" style="float: right">
                                <label style="display: inline">Search:
                                    <form action="/storemanager/searchbill" method="GET">
                                        <input name="id" type="search" class=" form-control-sm" style="    border: 1px solid #ccc; padding: 18px 10px; margin-bottom: 10px"
                                            value="@if(isset($search)) {{ $search }} @endif" >
                                        <button type="submit" class="btn btn-info" >Submit</button>
                                    </form>
                                </label>
                            </div>
                            <table class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
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
                                            <td style="width: 1%"><a href="/storemanager/managebill/detail/{{$bill->id}}" class="btn btn-primary">Detail</a></td>
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
