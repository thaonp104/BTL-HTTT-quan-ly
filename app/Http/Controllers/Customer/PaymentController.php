<?php

namespace App\Http\Controllers\Customer;

use App\Atm;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PaymentController extends Controller
{
    public function index()
    {
        return view('customer.frontend.payment');
    }

    public function cancel()
    {
        session(['order' => array()]);
        return redirect('/customer');
    }

    public function vnpay(Request $request)
    {
        if ($request['paymethod'] == 'QRPAY') {
            session(['order.method' => 'QRPAY']);
            return view('customer.frontend.payment_vnpayqr');
        } else {
            session(['order.method' => 'ATM']);
            $atms = Atm::all();
            foreach ($atms as $a) {
                if($a['name'] == $request['paymethod']) {
                    session(['order.atmsid' => $a['id']]);
                    $data['atm'] = $a;
                }
            }
            return view('customer.frontend.payment_tknh', $data);
        }
    }

    public function store()
    {
        DB::table('orders')->insert([
            [
                'total' => session('order.total'),
                'date' => session('order.date'),
                'customersid' => session('order.customersid'),
                'address' => session('order.address'),
                'fullname' => session('order.fullname'),
                'phone' => session('order.phone'),
                'method' => session('order.method'),
                'atm_type' => session('order.atm_type'),
                'atmsid' => session('order.atmsid'),
                'status' => session('order.status')
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
        session(['order' => array()]);
        return redirect('customer/order/show/'.$kq->id);
    }

    public function accuracy(Request $request)
    {
        if (isset($request['card_number']) && isset($request['card_holder_atm'])) {
            session(['order.atm_type' => 'cash']);
        } else if (isset($request['account_number']) && isset($request['card_holder_acc'])) {
            session(['order.atm_type' => 'account']);
        } else if (isset($request['user_name']) && isset($request['full_name'])) {
            session(['order.atm_type' => 'internet banking']);
        }

        if (isset($request['accuracy']) && $request['accuracy'] == '123456') {
            $this->store();
            $kq = DB::table('orders')->orderBy('id', 'desc')->first();
            return redirect('customer/order/show/'.$kq->id);
        } else if (isset($request['accuracy']) && $request['accuracy'] != '123456') {
            $data['error'] = true;
            return view('customer.frontend.payment_accuracy', $data);
        } else {
            return view('customer.frontend.payment_accuracy');
        }
    }

}
