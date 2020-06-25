@extends('employee.layout.main')
@section('head')


    <script type="text/javascript" src="{{ URL::asset('js/jquery.min.js') }}"></script>

    <script src="{{ URL::asset('assets\js\vendor.min.js') }}"></script>

    <style>
        .product{
            border: 1px solid #ccc; padding: 5px; margin-right: 20px;
        }
        .quantity{
            border: 1px solid #ccc; padding: 4px; margin-right: 10px;
        }
        .item{
            padding-left: 0px; margin-bottom: 20px;
            list-style-type: none;
        }
    </style>
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

            <form action="/seller/managebill/store" method="post">
                @csrf
                <div class="form-group">
                    <label for="date">Customer's name</label>
                    <input type="text" class="form-control" name="fullname" required
                    @if(isset($fullname)) value="{{ $fullname }}"  @endif>
                </div>
                <div class="form-group">
                    <label for="status">Address</label>
                    <input type="text" class="form-control" name="address" required @if(isset($address)) value="{{ $address }}"  @endif>
                </div>
                <div class="form-group">
                    <label for="total">Phone</label>
                    <input type="text" class="form-control" name="phone" required @if(isset($phone)) value="{{ $phone }}"  @endif>
                </div>
                <div class="form-group">
                    <label for="address">Birthday</label>
                    <input type="date" class="form-control" name="birthday" required @if(isset($birthday)) value="{{ $birthday }}"  @endif>
                </div>
                <div class="form-group">
                    <label for="accountid">date</label>
                    <input class="form-control" type="date" name="date" required @if(isset($date)) value="{{ $date }}"  @endif>

                </div>
                <div class="items">
                    <h3>
                        <i class="fas fa-box-open"></i>
                        Items
                    </h3>
                    <ul class="item-order col-5 item" id="items"><li><label>Product</label><select name="product[]"  class="product form-control">@foreach($products as $p)<option value="{{ $p->id }}">{{ $p->id }}-{{ $p->name }}-(Còn: {{ $p->quantity }})</option>@endforeach</select><label for="accountid">Quantity</label><br><input type="number" class="quantity form-control" min="1" required  name="quantity[]"></ul>

{{--                    <ul class="item-order col-5 item" id="items"><li><label>Product</label><select name="product"  class="product js-example-basic-single">@foreach($products as $p) <option value="{{ $p->id }}">{{ $p->id }}-{{ $p->name }}-(Còn: {{ $p->quantity }})</option> @endforeach</select><label for="accountid">Quantity</label><br><input type="number" class="quantity" min="1" max="{{ $p->quantity }}" required  name="quantity"></li><br></ul>--}}
                </div>
                <h4>
                    Add item
                    <button class="plus-item" type="button" onclick="add()">
                        <i class="fa fa-plus"></i>
                    </button>
                    Delete item
                    <button class="plus-item" type="button" onclick="remove()">
                        <i class="fa fa-minus"></i>
                    </button>
                </h4>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="{{ URL::asset('/seller/managebill') }}"><button type="button" class="btn btn-danger">Cancel</button></a>
                </div>
            </form>
        </div>
    </div>
    @if(isset($error) && $error == 'quantity')
        <script>
            alert('Số lượng sản phẩm trong kho không đủ, yêu cầu nhập lại số lượng!!!');
        </script>
    @elseif(isset($error) && $error == 'customer')
        <script>
            alert('Số điện thoại đã được sử dụng, yêu cầu nhập lại thông tin khách hàng!!!');
        </script>
    @endif
    <script>
        var count = 1;
        var item =1;
        function add() {
            count++;
            var itm = document.getElementById("items").firstChild;
            var cln = itm.cloneNode(true);
            document.getElementById("items").appendChild(cln);
        }
        function remove() {
            if(count>1) {
                var list = document.getElementById("items");
                list.removeChild(list.lastChild);
                count--;
            }
        }
    </script>
@endsection
