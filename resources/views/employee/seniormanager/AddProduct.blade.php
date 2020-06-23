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

            <form action="/seniormanager/managerproduct/storeproduct" method="post">
                @csrf
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" placeholder="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="text" class="form-control" placeholder="price" name="price" required>
                </div>
                <div class="form-group">
                    <label for="pricenew">Pricenew</label>
                    <input type="text" class="form-control" placeholder="pricenew" name="pricenew" required>
                </div>
                <div class="form-group">
                    <label for="image">Image</label>
                    <input type="text" class="form-control" placeholder="link image" name="img" required>
                    <input type="file" class="form-control-file">
                </div>
                <div class="form-group">
                    <label for="content">Content</label>
                    <input type="text" class="form-control" placeholder="Content" name="content" required>
                </div>
                <div class="form-group">
                    <label for="quantity">Quantity</label>
                    <input type="text" class="form-control" placeholder="quantity" name="quantity" required>
                </div>
                <div class="form-group">
                    <label for="brand">Category</label>
                    <select name="category" class="form-control" required>
                        @foreach($categories as $c)
                            <option value="{{ $c['id'] }}">{{ $c['name'] }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="brand">Brand</label>
                    <select name="brand" class="form-control" required>
                        @foreach($brands as $b)
                            <option value="{{ $b['id'] }}">{{ $b['name'] }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="vendor">Vendor</label>
                    <select name="vendor" class="form-control" required>
                        @foreach($vendors as $v)
                            <option value="{{ $v['id'] }}">{{ $v['name'] }}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Add</button>
            </form>
        </div>
        <!-- end container-fluid -->

    </div>
@endsection
