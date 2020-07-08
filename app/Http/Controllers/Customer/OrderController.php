<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Http\Requests\createOrder;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function myOrders()
    {
            $arr = DB::table('accounts')->where('username', Auth::user()->username)->first();
            $inf = DB::table('customers')->where('accountsid', $arr->id)->first();
            $ord = DB::table('orders')->where('customersid', $inf->id)->get();
            $data['arr'] = $arr;
            $data['inf'] = $inf;
            $data['ord'] = $ord;
            return view('customer.frontend.view_my_order', $data);
    }

    public function create()
    {
            $arr = DB::table('accounts')->where('username', Auth::user()->username)->first();
            $check = DB::table('customers')->where('accountsid', $arr->id)->first();
            $data['arr'] = $arr;
            $data['check'] = $check;
            return view("customer/frontend/view_bill1", $data);
    }

    public function store(createOrder $request)
    {
        date_default_timezone_set("Asia/Ho_Chi_Minh");
        $c_date=date('Y-m-d');
        $tong=session("total");
        $fullname = $request['fullname'];
        $address = $request['address'];
        $phone = $request['phone'];
        $arr = DB::table('accounts')->where('username',Auth::user()->username)->first();
        $inf = DB::table('customers')->where('accountsid', $arr->id)->first();
        if($request['method'] == 'COD') {
            DB::table('orders')->insert([
                [
                    'total' => $tong,
                    'date' => $c_date,
                    'customersid' => $inf->id,
                    'address' => $address,
                    'fullname' => $fullname,
                    'phone' => $phone,
                    'method' => 'COD',
                    'atm_type' => null,
                    'atmsid' => null,
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

            }
            session(['cart' => array()]);
            session(["total" => 0]);
            return redirect('customer/order/show/'.$kq->id);
        } else {
            session(['order' => array(
                'total' => $tong,
                'date' => $c_date,
                'customersid' => $inf->id,
                'address' => $address,
                'fullname' => $fullname,
                'phone' => $phone,
                'method' => 'vnpay',
                'atm_type' => null,
                'atmsid' => null,
                'status' => 0
            )]);
            return redirect('/customer/vnpay');
        }

    }

    public function destroy(Request $request)
    {
        $id = $request['id'];
        DB::table('orders')->where('id', $id)->update([
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
