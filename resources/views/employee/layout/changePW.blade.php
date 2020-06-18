@extends('employee.layout.main')
@section('menu')
    <ul class="metismenu" id="side-menu">

        <li class="menu-title">Online Handling Employee</li>

        <li>
            <a href="#" class="waves-effect">
                <i class="ion-md-basket"></i>
                <span>Home Page</span>
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
                    <label for="password">Password</label>
                    <input type="password" class="form-control" name="pw">
                </div>
                <div class="form-group">
                    <label for="newpassword">New Password</label>
                    <input type="password" class="form-control" name="newpw">
                </div>
                <div class="form-group">
                    <label for="newpassword2">Retype New Password</label>
                    <input type="password" class="form-control" name="renewpw">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="#"><button type="button" class="btn btn-danger">Cancel</button></a>
                </div>
            </form>
        </div>
        <!-- end container-fluid -->

    </div>
@endsection
