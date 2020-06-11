
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Senior Manager</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Responsive bootstrap 4 admin template" name="description">
        <meta content="Coderthemes" name="author">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets\images\favicon.ico">

        <!-- third party css -->
        <link href="{{ URL::asset('assets\libs\datatables\dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ URL::asset('assets\libs\datatables\buttons.bootstrap4.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ URL::asset('assets\libs\datatables\responsive.bootstrap4.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ URL::asset('assets\libs\datatables\select.bootstrap4.min.css') }}" rel="stylesheet" type="text/css"> 

        <!-- App css -->
        <link href="{{ URL::asset('assets\css\bootstrap.min.css') }}" rel="stylesheet" type="text/css" id="bootstrap-stylesheet">
        <link href="{{ URL::asset('assets\css\icons.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ URL::asset('assets\css\app.min.css') }}" rel="stylesheet" type="text/css" id="app-stylesheet">

    </head>

    <body>

        <!-- Begin page -->
        <div id="wrapper">

            
            <!-- Topbar Start -->
            <div class="navbar-custom">
                <ul class="list-unstyled topnav-menu float-right mb-0">

                    <li class="dropdown notification-list">
                        <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <img src="{{ URL::asset('assets\images\users\avatar-1.jpg') }}" alt="user-image" class="rounded-circle">
                            <span class="pro-user-name ml-1">
                                Thompson   <i class="mdi mdi-chevron-down"></i> 
                            </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                            <!-- item-->
                            <div class="dropdown-header noti-title">
                                <h6 class="text-overflow m-0">Welcome !</h6>
                            </div>

                            <div class="dropdown-divider"></div>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="mdi mdi-logout-variant"></i>
                                <span>Logout</span>
                            </a>
                            
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="mdi mdi-logout-variant"></i>
                                <span>Change password</span>
                            </a>

                        </div>
                    </li>

                </ul>

                <!-- LOGO -->
                <div class="logo-box">
                    <a href="index.html" class="logo text-center logo-dark">
                        <span class="logo-lg">
                            <img src="{{ URL::asset('assets\images\logo-dark.png') }}" alt="" height="18">
                            <!-- <span class="logo-lg-text-dark">Velonic</span> -->
                        </span>
                        <span class="logo-sm">
                            <!-- <span class="logo-lg-text-dark">V</span> -->
                            <img src="{{ URL::asset('assets\images\logo-sm.png') }}" alt="" height="22">
                        </span>
                    </a>

                    <a href="index.html" class="logo text-center logo-light">
                        <span class="logo-lg">
                            <img src="{{ URL::asset('assets\images\logo-light.png') }}" alt="" height="18">
                            <!-- <span class="logo-lg-text-dark">Velonic</span> -->
                        </span>
                        <span class="logo-sm">
                            <!-- <span class="logo-lg-text-dark">V</span> -->
                            <img src="{{ URL::asset('assets\images\logo-sm.png') }}" alt="" height="22">
                        </span>
                    </a>
                </div>

                <!-- LOGO -->
  
            </div>
            <!-- end Topbar --> <!-- ========== Left Sidebar Start ========== -->
<div class="left-side-menu">

    <div class="slimscroll-menu">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
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

        </div>
        <!-- End Sidebar -->

        <div class="clearfix"></div>

    </div>
    <!-- Sidebar -left -->

</div>
<!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body table-responsive">
                                        <h4 class="m-t-0 header-title mb-4"><b>Stores</b></h4>

                                        <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">

                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Name</th>
                                                    <th>Address</th>
                                                    <th>Detail</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Tiger Nixon</td>
                                                    <td>23 Wall Street</td>
                                                    <td style="width: 1%"><a href="/seniormanager/managestore/detail/{id}" class="btn btn-primary">Detail</a></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <a href="/seniormanager/managestore/addstore" class="btn btn-info">Add Store</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->
                    </div>
                    <!-- end container-fluid -->

                </div>
                <!-- end content -->
            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->

        </div>
        <!-- END wrapper -->

        <!-- <script type="text/javascript" src="{{ URL::asset('js/jquery.min.js') }}"></script> -->
        <!-- Vendor js -->
        <script src="{{ URL::asset('assets\js\vendor.min.js') }}"></script>

        <!-- Required datatable js -->
        <script src="{{ URL::asset('assets\libs\datatables\jquery.dataTables.min.js') }}"></script>
        <script src="{{ URL::asset('assets\libs\datatables\dataTables.bootstrap4.min.js') }}"></script>
        <!-- Buttons examples -->
        <script src="{{ URL::asset('assets\libs\datatables\dataTables.buttons.min.js') }}"></script>
        <script src="{{ URL::asset('assets\libs\datatables\buttons.bootstrap4.min.js') }}"></script>
        <script src="{{ URL::asset('assets\libs\jszip\jszip.min.js') }}"></script>
        <script src="{{ URL::asset('assets\libs\pdfmake\pdfmake.min.js') }}"></script>
        <script src="{{ URL::asset('assets\libs\pdfmake\vfs_fonts.js') }}"></script>
        <script src="{{ URL::asset('assets\libs\datatables\buttons.html5.min.js') }}"></script>
        <script src="{{ URL::asset('assets\libs\datatables\buttons.print.min.js') }}"></script>

        <!-- Responsive examples -->
        <script src="{{ URL::asset('assets\libs\datatables\dataTables.responsive.min.js') }}"></script>
        <script src="{{ URL::asset('assets\libs\datatables\responsive.bootstrap4.min.js') }}"></script>

        <script src="{{ URL::asset('assets\libs\datatables\dataTables.keyTable.min.js') }}"></script>
        <script src="{{ URL::asset('assets\libs\datatables\dataTables.select.min.js') }}"></script>

        <!-- Datatables init -->
        <script src="{{ URL::asset('assets\js\pages\datatables.init.js') }}"></script>

        <!-- App js -->
        <script src="{{ URL::asset('assets\js\app.min.js') }}"></script>

    </body>

</html>