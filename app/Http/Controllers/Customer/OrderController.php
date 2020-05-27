<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function myOrders()
    {
        if(session()->has('c_customer')){
            $name=session("c_customer");
            $arr = DB::table('customer_accounts')->where('c_email', $name)->first();
            $inf = DB::table('customers')->where('customer_id', $arr->customer_id)->first();
            $ord = DB::table('order_product')->where('customer_id', $arr->customer_id)->get();
            $data['arr'] = $arr;
            $data['inf'] = $inf;
            $data['ord'] = $ord;
            return view('customer.frontend.view_my_order', $data);
        }
        else{
            return redirect("customer/login/normal");
        }
    }

    public function create()
    {
        if(session()->has('c_customer')){
            //Khách đã đăng nhập
            $tmp=session("c_customer");
            $arr = DB::table('customer_accounts')->where('c_email', $tmp)->first();
            $check = DB::table('customers')->where('customer_id', $arr->customer_id)->first();
            $data['arr'] = $arr;
            $data['check'] = $check;
            return view("customer/frontend/view_bill1", $data);
        }
        else{
            return redirect("customer/login/normal");
            //khách vãng lai

//            return view("customer/frontend/view_bill2");
        }
    }

    public function store(Request $request)
    {
        if(session()->has('c_customer')){
            //Khách đã đăng nhập
            date_default_timezone_set("Asia/Ho_Chi_Minh");
            $name=session("c_customer");
            $c_date=date('Y/m/d  H:i:s');
            $tong=session("total");
            $arr = DB::table('customer_accounts')->where('c_email',$name)->first();
            DB::table('order_product')->insert([
                [
                    'customer_order_id' => 0,
                    'money' => $tong,
                    'c_date' => $c_date,
                    'customer_id' => $arr->customer_id,
                    'status' => 0
                ]
            ]);
            $kq = DB::table('order_product')->where('customer_id',$arr->customer_id)
                ->orderBy('order_id','desc')->first();

            foreach (session('cart') as $product) {
                $id=$product['product_id'];
                $number=$product['number'];
                DB::table('order_detail')->insert([
                    [
                        'order_id' => $kq->order_id,
                        'product_id' => $id,
                        'number' => $number
                    ]
                ]);
            }
            return redirect('customer/order/show/'.$kq->order_id);
        }
        else{
            return redirect("customer/login/normal");
            //khách vãng lai
//            date_default_timezone_set("Asia/Ho_Chi_Minh");
//            $c_name=$request["c_name"];
//            $c_phone=$request["c_phone"];
//            $c_adress=$request["c_adress"];
//            $c_date=date('Y/m/d  H:i:s');
//            $totall=session("total");
//            DB::table('customer_order')->insert([
//                [
//                    'c_name' => $c_name,
//                    'c_phone' => $c_phone,
//                    'c_adress' => $c_adress
//                ]
//            ]);
//            $arr = DB::table('customer_order')->where('c_name',$c_name)
//                ->where('c_phone', $c_phone)
//                ->first();
//
//            $this->model->execute("insert into order_product(customer_order_id,money,c_date,customer_id,status) values('$arr->customer_order_id','$totall','$c_date','0','0')");
//            $sl=$this->model->get_a_record("select order_id from order_product where customer_order_id=$arr->customer_order_id");
//            $_SESSION["order_id"]=$sl->order_id;
//            foreach ($_SESSION['cart'] as $product) {
//                $id=$product['product_id'];
//                $number=$product['number'];
//                $this->model->execute("insert into order_detail set order_id='$sl->order_id',product_id='$id',number='$number'");
//
//            }
//            return redirect('customer/order/show/'.$kq->order_id);
        }

    }

    public function destroy(Request $request)
    {
        $id = $request['id'];
        $order = DB::table('order_product')->where('order_id', $id)->update([
            'status' => 3
        ]);
        return redirect('customer/order/show/'.$id);
    }

    public function show(Request $request)
    {
        $id=isset($request["id"])?$request["id"]:"";
        $tam = DB::table('order_product')->where('order_id', $id)->first();
        $check = DB::table('customers')->where('customer_id',$tam->customer_id)->first();
        $arr = DB::table('order_detail')->where('order_id', $id)->get();
        $data['id'] = $id;
        $data['tam'] = $tam;
        $data['check'] = $check;
        $data['arr'] = $arr;
        return view("customer.frontend.view_order_detail", $data);
    }
}
