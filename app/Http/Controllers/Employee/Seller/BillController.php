<?php

namespace App\Http\Controllers\Employee\Seller;

use App\Bill;
use App\Customer;
use App\Employee;
use App\Http\Controllers\Controller;
use App\Http\Requests\AddBillRequest;
use App\Item;
use App\Order;
use App\Product;
use App\Product_Branch;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class BillController extends Controller
{
    //show list bills
    public function index()
    {
        $employee = User::find(auth()->user()->id)->employee;
        $branch = $employee->branchesid;
        $bills = Customer::rightJoin('orders', 'orders.customersid', '=', 'customers.id')
            ->where('orders.branchesid', $branch)->get();
        $data['bills'] = $bills;
        return view('employee.seller.ManageBill', $data);
    }

    //show detail bill by id
    public function show(Request $request)
    {
        $id = $request['id'];
        $bill = Bill::where('bills.id', $id)
            ->leftJoin('orders', 'orders.id', '=', 'bills.ordersid')
            ->first();
        $employee = Employee::where('id', $bill->employeesid)->first();
        $customer = Customer::where('id',$bill->customersid)->first();
        $items = Item::where('ordersid', $id)
            ->get();
        $prB = Product_Branch::all();
        $products = Product::all();
        $data['bill'] = $bill;
        $data['items'] = $items;
        $data['employee'] = $employee;
        $data['customer'] = $customer;
        $data['products'] = $products;
        $data['prB'] = $prB;
        return view('employee.seller.DetailBill', $data);
    }

    public function edit(Request $request)
    {
        $id = $request['id'];
        $bill = Bill::where('bills.id', $id)
            ->leftJoin('orders', 'orders.id', '=', 'bills.ordersid')
            ->first();
        $customer = Customer::where('id',$bill->customersid)->first();
        if($bill->employeesid!=null) $employee = Employee::where('id', $bill->employeesid)->first();
        else $employee = null;
        $items = Product::leftJoin('items', 'products.id', '=', 'items.product_branchid')
            ->where('items.ordersid', $id)
            ->get();
        $data['bill'] = $bill;
        $data['items'] = $items;
        $data['employee'] = $employee;
        $data['customer'] = $customer;
        return view('employee.seller.updateBill', $data);
    }

    public function update(Request $request)
    {
        $id = $request['id'];
        $items = Item::where('items.ordersid', $id)
            ->get();
        $b = Bill::where('id', $id)->first();
        $order = Order::where('id', $b->ordersid)->first();
        $em = Employee::where('accountsid', auth()->user()->id)->first();
        $products = Product_Branch::all();
        if($request->status !=3) {
            foreach ($items as $item) {
                foreach ($products as $p) {
                    if($p->id == $item->productsid) {
                        if($p->quantity < $item->quantity) {
                            return redirect('/seller/managebill/update/'.$id.'?alert=error');
                        }
                    }
                }
            }
            $order->status = $request->status;
            $order->save();
            $b->employeesid = $em->id;
            $b->save();
            return redirect('/seller/managebill/detail/'.$id);
        } else {
            if($order->status == 2) {
                foreach ($items as $item) {
                    foreach ($products as $p) {
                        if($p->id == $item->product_branchid) {
                            $p->quantity = $p->quantity + $item->quantity;
                            $p->save();
                        }
                    }
                }
            }
            $b->employeesid = $em->id;
            $order->status = 3;
            $order->save();
            $b->save();
            return redirect('/seller/managebill/detail/'.$id);
        }
    }

    public function create()
    {
        $employee = User::find(auth()->user()->id)->employee;
        $branch = $employee->branchesid;
        $products = Product::rightJoin('product_branch', 'products.id', '=', 'product_branch.productsid')
            ->where('branchesid',$branch)->get();
        $data['products'] = $products;
//        dd($products);
        return view('employee.seller.AddBill',$data);
    }

    public function store(Request $request)
    {
        //lay request
        $fullname = $request['fullname'];
        $address = $request['address'];
        $phone = preg_replace("/[\s]/", "", $request['phone'] );
        $birthday = $request['birthday'];
        $product = $request['product'];
        $quantity = $request['quantity'];
        $date = $request['date'];
        //check quantity trong kho
        $employee = User::find(auth()->user()->id)->employee;
        $branch = $employee->branchesid;
        $products = Product::rightJoin('product_branch', 'products.id', '=', 'product_branch.productsid')
            ->where('branchesid',$branch)->get();
        $stt = 0;
        $total = 0;
        $pros = Product::all();
        $data['products'] = $products;
        $data['fullname'] = $fullname;
        $data['address'] = $address;
        $data['phone'] = $phone;
        $data['birthday'] = $birthday;
        $data['date'] = $date;
        foreach ($request['product'] as $p) {
            foreach ($products as $pr) {
                if($pr['id'] == $p && $pr['quantity'] < $quantity[$stt]) {
                    $data['error'] = "quantity";
                    return view('employee.seller.AddBill',$data);
                }
                if($pr['id'] == $p) {
                    foreach ($pros as $pro) {
                        if($pro->id == $pr['productsid']) {
                            $total = $pro->pricenew * $quantity[$stt];
                        }
                    }
                }
            }
            $stt++;
        }
        if(!preg_match('/^[0-9]+$/',$phone)) {
            $data['error'] = 'phone';
            return view('employee.seller.AddBill',$data);
        } else {
           if(strlen($phone) <9 || strlen($phone)>11) {
               $data['error'] = 'phone';
               return view('employee.seller.AddBill',$data);
           }
        }
        //insert customer
        $customer = Customer::where('phone', $phone)->first();
        if($customer!=null && $customer['fullname'] != $fullname) {
            $data['error'] = "customer";
            return view('employee.seller.AddBill',$data);
        } else if ($customer==null) {
            $c = new Customer();
            $c->fullname = $fullname;
            $c->address = $address;
            $c->phone = $phone;
            $c->birthday = $birthday;
            $c->save();
        }

        $cus = Customer::where('fullname', $fullname)->where('phone', $phone)->first();
        //insert order
        $o = new Order();
        $o->date = $date;
        $o->address = $address;
        $o->status = 2;
        $o->customersid = $cus->id;
        $o->branchesid = $branch;
        $o->total = $total;
        $o->save();

        $ord = DB::table('orders')
            ->where('branchesid', $branch)
            ->orderBy('id', 'desc')
            ->first();
        //insert bill
        $bill = new Bill();
        $bill->ordersid = $ord->id;
        $bill->employeesid = $employee->id;
        $bill->save();
        //insert items
        $i =0;
        foreach ($request['product'] as $p) {
            foreach ($products as $pr) {
                if ($p == $pr->id) {
                    $item = new Item();
                    $item->ordersid = $ord->id;
                    $item->product_branchid = $pr->id;
                    $item->quantity = $quantity[$i];
                    $item->save();
                    $product_branch = Product_Branch::where('id', $pr->id)->first();
                    $product_branch->quantity = $product_branch->quantity - $quantity[$i];
                    $product_branch->save();
                }
            }
            $i++;
        }
        $b = DB::table('bills')
            ->orderBy('id', 'desc')
            ->first();
        return redirect('/seller/managebill/detail/'.$b->id);
    }
}
