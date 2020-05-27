<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use MongoDB\Driver\Session;

class CartController extends Controller
{
    public function showCart()
    {
        if(!session()->has('cart')) session(['cart' => array()]);
        return view('customer.frontend.view_cart');
    }

    public function add(Request $request){

        $id = $request['pk_product_id'];
        if(session()->has('cart.'.$id)) {
            //nếu đã có sp trong giỏ hàng thì số lượng lên 1
            $number = session('cart.'.$id.'.number');
            $number ++;
            session(['cart.'.$id.'.number' => $number]);
        } else {
            $product = DB::table('product')->where('product_id',$id)->first();
            session(['cart.'.$id => array(
                'product_id' => $id,
                'c_name' => $product->c_name,
                'c_img' => $product->c_img,
                'number' => 1,
                'c_price' => $product->c_pricenew
            )]);
        }
        session(['total' => $this->total()]);
//        var_dump(session("cart"));
        return redirect('customer/cart');
    }

    public function update(Request $request)
    {
        foreach (session("cart") as $product) {
            $str="product_".$product["product_id"];
            $number= $request[$str];
            //cập nhật
            $this->item_update($product["product_id"],$number);
            session(["total" => $this->total()]);
        }
        return redirect('customer/cart');
    }

    public function delete()
    {
        session(['cart' => array()]);
        session(["total" => $this->total()]);
        return redirect('customer/cart');
    }

    public function total(){
        $total = 0;
        foreach(session('cart') as $product){
            $total += $product['c_price'] * $product['number'];
        }
        return $total;
    }

    public function item_update($pk_product_id, $number){
        if($number==0){
            //xóa sp ra khỏi giỏ hàng
            session()->forget('cart.'.$pk_product_id);
        } else {
            session(['cart.'.$pk_product_id.'.number' => $number]);
        }
    }
}
