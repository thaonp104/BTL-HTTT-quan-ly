@extends('employee.layout.main')
@section('head')
    <script type="text/javascript" src="{{ URL::asset('js/jquery.min.js') }}"></script>

    <script src="{{ URL::asset('assets\js\vendor.min.js') }}"></script>
@endsection
@section('menu')
    <ul class="metismenu" id="side-menu">

        <li class="menu-title">Admin</li>

        <li>
            <a href="/admin/managecustomer" class="waves-effect">
                <i class="ion-md-speedometer"></i>
                <span>  Manage Customer  </span>
            </a>
        </li>

        <li>
            <a href="/admin/manageemployee" class="waves-effect">
                <i class="ion-md-speedometer"></i>
                <span>  Manage Employee  </span>
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
                            <h4 class="m-t-0 header-title mb-4"><b>Accounts</b></h4>

                            <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">

                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Username</th>
                                    <th>Password</th>
                                    <th>status</th>
                                    <th>Detail</th>
                                </tr>
                                </thead>

                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>username</td>
                                    <td>password</td>
                                    <td>Online</td>
                                    <td style="width: 1%"><a href="/admin/manageaccount/detail/{id}" class="btn btn-primary">Detail</a></td>
                                </tr>
                                </tbody>
                            </table>
                            <a href="{{ URL::asset('/admin/manageaccount/create') }}" class="btn btn-info">Add Account</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->
        </div>
        <!-- end container-fluid -->

    </div>
@endsection
