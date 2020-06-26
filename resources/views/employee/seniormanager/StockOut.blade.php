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
        <a href="/seniormanager/managestock" style="position: absolute; right: 30px">
            <button class="btn btn-info">Stock In</button>
        </a>
        <h1>Stock Out</h1>
        <form action="/seniormanager/managestockout" method="post">
            @csrf
            <div class="form-group">
                <label for="name">Product</label>
                <select class="js-example-basic-single form-control" name="product">
                    @foreach($products as $product)
                        <option value="{{ $product->id }}">{{ $product->id }}-{{ $product->name }}-(Còn: {{ $product->quantity }})</option>
                    @endforeach
                </select>
            </div>
            <label>quantity</label>
            @foreach($branches as $b)
                <div class="form-group">
                    <label for="quantity">Branch {{ $b->name }}</label>
                    <input type="number" class="form-control" placeholder="quantity" min="1" name="quantity[{{ $b->id }}]" required>
                </div>
            @endforeach
            <button type="submit" class="btn btn-primary">Add</button>
        </form>
    </div>
    @if(isset($_GET['alert']) && $_GET['alert'] == 'success')
        <script>
            alert('Xuất kho thành công!');
        </script>
    @elseif(isset($_GET['alert']) && $_GET['alert'] == 'error')
        <script>
            alert('Số lượng xuất vượt quá số lượng trong kho, yêu cầu nhập lại!');
        </script>
    @endif
@endsection
