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

            <form>
                <div class="form-group">
                    <label for="id">ID</label>
                    <input type="text" class="form-control" value="{{ $product['id'] }}" disabled>
                </div>
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" value="{{ $product['name'] }}" disabled>
                </div>
                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="text" class="form-control" value="${{ $product['price'] }}" disabled>
                </div>
                <div class="form-group">
                    <label for="pricenew">Pricenew</label>
                    <input type="text" class="form-control" value="${{ $product['pricenew'] }}" disabled>
                </div>
                <div class="form-group">
                    <label for="pricenew">Category</label>
                    <input type="text" class="form-control" value="{{ $category['name'] }}" disabled>
                </div>
                <div class="form-group">
                    <label for="content">Content</label>
                    <textarea class="form-control" rows="5" disabled>
                        {{ $product['content'] }}
                    </textarea>
                </div>
                <div class="form-group">
                    <label for="quantity">Quantity</label>
                    <input type="text" class="form-control" value="{{ $product['quantity'] }}" disabled>
                </div>
                <div class="form-group">
                    <label for="brand">Brand</label>
                    <input type="text" class="form-control" value="{{ $brand['name'] }}" disabled>
                </div>
                <div class="form-group">
                    <label for="vendor">Vendor</label>
                    <input type="text" class="form-control" value="{{ $vendor['name'] }}" disabled>
                </div>
                <div class="form-group">
                    <a href="{{ URL::asset('/seniormanager/manageproduct/update/'.$product['id']) }}"><button type="button" class="btn btn-primary">Update</button></a>
                </div>
            </form>
        </div>
        <!-- end container-fluid -->

    </div>
@endsection
