<?php

namespace App\Http\Controllers\Employee\Telesale;

use App\Bill;
use App\Employee;
use App\Http\Controllers\Controller;
use App\Item;
use App\Order;
use App\Customer;
use App\Product;
use App\User;
use Illuminate\Http\Request;

class BillController extends Controller
{
    //show list bills
    public function index()
    {
        $bills = Customer::rightJoin('orders', 'orders.customersid', '=', 'customers.id')
            ->where('orders.branchesid', null)->get();
        $data['bills'] = $bills;
        return view('employee.telesale.ManageBill', $data);
    }

    //show detail bill by id
    public function show(Request $request)
    {
        $id = $request['id'];
        $bill = Bill::where('bills.id', $id)
            ->leftJoin('orders', 'orders.id', '=', 'bills.ordersid')
            ->first();
        $customer = Customer::where('id',$bill->customersid)->first();
        if($bill->employeesid!=null) $employee = Employee::where('id', $bill->employeesid)->first();
        else $employee = null;
        $items = Product::leftJoin('items', 'products.id', '=', 'items.productsid')
            ->where('items.ordersid', $id)
            ->get();
        $data['bill'] = $bill;
        $data['items'] = $items;
        $data['employee'] = $employee;
        $data['customer'] = $customer;
        return view('employee.telesale.DetailBill', $data);
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
        $items = Product::leftJoin('items', 'products.id', '=', 'items.productsid')
            ->where('items.ordersid', $id)
            ->get();
        $data['bill'] = $bill;
        $data['items'] = $items;
        $data['employee'] = $employee;
        $data['customer'] = $customer;
        return view('employee.telesale.updateBill', $data);
    }

    public function update(Request $request)
    {
        $id = $request['id'];
        $items = Item::where('items.ordersid', $id)
            ->get();
        $b = Bill::where('id', $id)->first();
        $order = Order::where('id', $b->ordersid)->first();
        $em = Employee::where('accountsid', auth()->user()->id)->first();
        $products = Product::all();
        if($request->status !=3) {
            foreach ($items as $item) {
                foreach ($products as $p) {
                    if($p->id == $item->productsid) {
                        if($p->quantity < $item->quantity) {
                            return redirect('/telesale/managebill/update/'.$id.'?alert=error');
                        }
                    }
                }
            }
            if ($order->status == 0) {
                foreach ($items as $item) {
                    foreach ($products as $p) {
                        if($p->id == $item->productsid) {
                            $p->quantity = $p->quantity - $item->quantity;
                            $p->save();
                        }
                    }
                }
            }
            $order->status = $request->status;
            $order->save();
            $b->employeesid = $em->id;
            $b->save();
            return redirect('/telesale/managebill/detail/'.$id);
        } else {
            if($order->status == 1) {
                foreach ($items as $item) {
                    foreach ($products as $p) {
                        if($p->id == $item->productsid) {
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
            return redirect('/telesale/managebill/detail/'.$id);
        }
    }

}
