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
                            <h4 class="m-t-0 header-title mb-4"><b>Products</b></h4>

                            <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">

                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Price</th>
                                        <th>Pricenew</th>
                                        <th>Img</th>
                                        <th>Content</th>
                                        <th>Quantity</th>
                                        <th>Brand</th>
                                        <th>Vendor</th>
                                        <th>Detail</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Tiger Nixon</td>
                                        <td>$320,800</td>
                                        <td>$400,000</td>
                                        <td>link img</td>
                                        <td>content</td>
                                        <td>5</td>
                                        <td>Apple</td>
                                        <td>Apple</td>
                                        <td style="width: 1%"><a href="/seniormanager/manageproduct/detail/{id}" class="btn btn-primary">Detail</a></td>
                                    </tr>
                                </tbody>
                            </table>
                            <a href="/seniormanager/manageproduct/addproduct" class="btn btn-info">Add Product</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->
        </div>
        <!-- end container-fluid -->

    </div>
@endsection
