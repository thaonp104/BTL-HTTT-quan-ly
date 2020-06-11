@extends('customer.layouts.main')
@section('title')
    Cart
@endsection
@section('content')
<form method="post" action="{{ URL::asset('customer/updateCart') }}">
    @csrf
        <div class="row" style="width: 1170px; margin: 40px auto">
          <div class="col-12">
            <div class="table-responsive">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col"> </th>
                    <th scope="col">Tên sản phẩm</th>
                    <th scope="col" class="text-center">Số lượng</th>
                    <th scope="col" class="text-right">Số tiền</th>
                    <th> </th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                    if (session()->has('cart')) {
                        foreach (session("cart") as $product) {

                 ?>
                  <tr>
                    <td><img style="width: 100px;" src="{{ URL::asset('images/'.$product['img']) }}" /></td>
                    <td><a href="{{ URL::asset('customer/product/detail/'.$product['id']) }}"><?php echo $product['name'] ?></a></td>
                    <td><input class="form-control" type="number" name="product_<?php echo $product['id']; ?>" value="<?php echo $product['number'];?>" /></td>
                    <td class="text-right"><?php echo number_format($product['price']*$product['number']); ?>VNĐ</td>
                    <td class="text-right"><a href="index.php?controller=cart&act=delete&id=<?php echo $product['id']?>"><i class="fa fa-trash"></a></td>
                  </tr>
                <?php } ?>

                  <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td><strong>Tổng giá sản phẩm: </strong></td>
                    <td class="text-right"><?php echo number_format(session('total')); ?>VNĐ</td>
                  </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
          <div class="col mb-2">
            <div class="row">
              <div class="col-md-12 col-sm-6 text-right"> <a href="{{ URL::asset('customer') }}" class="btn btn-primary">Tiếp tục mua hàng</a>
                <input type="submit" class="btn btn-primary" name="" value="Cập nhật">

                <a href="{{ URL::asset('customer/deleteCart') }}" class="btn btn-warning">Xóa toàn bộ sản phẩm</a>
                <a href="{{ URL::asset('customer/order/create') }}" class="btn btn-primary">Thanh toán</a>
              </div>
            </div>
            </div>
          </div>
        </div>
      </form>
@endsection
