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
            $arr = DB::table('accounts')->where('username', $name)->first();
            $inf = DB::table('customers')->where('accountsid', $arr->id)->first();
            $ord = DB::table('orders')->where('customersid', $inf->id)->get();
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
            $arr = DB::table('accounts')->where('username', $tmp)->first();
//            var_dump($arr);
            $check = DB::table('customers')->where('accountsid', $arr->id)->first();
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
            $c_date=date('Y-m-d');
            $tong=session("total");
            $arr = DB::table('accounts')->where('username',$name)->first();
            $inf = DB::table('customers')->where('accountsid', $arr->id)->first();
            DB::table('orders')->insert([
                [
                    'total' => $tong,
                    'date' => $c_date,
                    'customersid' => $inf->id,
                    'address' => $inf->address,
                    'status' => 0
                ]
            ]);
            $kq = DB::table('orders')->orderBy('id', 'desc')->first();

            foreach (session('cart') as $product) {
                $id=$product['id'];
                $number=$product['number'];
                DB::table('items')->insert([
                    [
                        'ordersid' => $kq->id,
                        'product_branchid' => $id,
                        'quantity' => $number
                    ]
                ]);
                $p = DB::table('products')->where('id',$id)->first();
                $quantity = $p->quantity - $number;
                DB::table('products')->where('id', $id)
                    ->update(['quantity' => $quantity]);

            }
            session(['cart' => array()]);
            session(["total" => 0]);
            return redirect('customer/order/show/'.$kq->id);
        }
        else{
            return redirect("customer/login/normal");
        }

    }

    public function destroy(Request $request)
    {
        $id = $request['id'];
        $order = DB::table('orders')->where('id', $id)->update([
            'status' => 3
        ]);
        return redirect('customer/order/show/'.$id);
    }

    public function show(Request $request)
    {
        $id=isset($request["id"])?$request["id"]:"";
        $tam = DB::table('orders')->where('id', $id)->first();
        $check = DB::table('customers')->where('id',$tam->customersid)->first();
        $arr = DB::table('items')->where('ordersid', $id)->get();
        $data['id'] = $id;
        $data['tam'] = $tam;
        $data['check'] = $check;
        $data['arr'] = $arr;
        return view("customer.frontend.view_order_detail", $data);
    }
}
