@extends('employee.layout.main')
@section('head')
    <script type="text/javascript" src="{{ URL::asset('js/jquery.min.js') }}"></script>

    <script src="{{ URL::asset('assets\js\vendor.min.js') }}"></script>
@endsection
@section('menu')
    <ul class="metismenu" id="side-menu">

        <li class="menu-title">Seller</li>

        <li>
            <a href="/seller/manageproduct" class="waves-effect">
                <i class="ion-md-speedometer"></i>
                <span>  Manage Product  </span>
            </a>
        </li>

        <li>
            <a href="/seller/managebill" class="waves-effect">
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
            </form>
        </div>
        <!-- end container-fluid -->

    </div>
@endsection
