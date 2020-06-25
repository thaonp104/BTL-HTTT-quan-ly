@extends('employee.layout.main')
@section('head')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.4.2/chosen.jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
@endsection
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

        <li>
            <a href="/seniormanager/managestock" class="waves-effect">
                <i class="ion-md-speedometer"></i>
                <span>  Manage Stock  </span>
            </a>
        </li>
    </ul>
@endsection
@section('content')
    <div class="container-fluid">
        <a href="/seniormanager/managestockout" style="position: absolute; right: 30px">
            <button class="btn btn-info">Stock Out</button>
        </a>
        <h1>Stock In</h1>
        <form action="/seniormanager/managestockin" method="post">
            @csrf
            <div class="form-group">
                <label for="name">Product</label>
                <select class="js-example-basic-single form-control" name="product">
                    @foreach($products as $product)
                        <option value="{{ $product->id }}">{{ $product->id }}-{{ $product->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="quantity">Quantity</label>
                <input type="text" class="form-control" placeholder="quantity" name="quantity" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    @if(isset($_GET['alert']) && $_GET['alert'] == 'success')
        <script>
            alert('Nhập kho thành công!');
        </script>
    @endif
    <script>
        $(document).ready(function() {
            $('.js-example-basic-single').select2();
        });
    </script>
@endsection
