<?php

namespace App\Http\Controllers\Employee\Telesale;

use App\Bill;
use App\Employee;
use App\Http\Controllers\Controller;
use App\Item;
use App\Order;
use App\User;
use Illuminate\Http\Request;

class BilController extends Controller
{
    //show list bills
    public function index()
    {
        $bills = Order::where('branchesid', null)
            ->leftJoin('customers', 'orders.customersid', '=', 'customers.id')->get();
        $data['bills'] = $bills;
        return view('employee.storemanager.ManageBill', $data);
    }

    //show detail bill by id
    public function show(Request $request)
    {
        $id = $request['id'];
        $bill = Bill::where('bills.id', $id)
            ->leftJoin('orders', 'orders.id', '=', 'bills.ordersid')
            ->leftJoin('customers', 'customers.id', '=', 'orders.customersid')
            ->first();
        if($bill->employeesid!=null) $employee = Employee::where('id', $bill->employeesid)->first();
        else $employee = null;
        $items = Item::where('ordersid', $id)
            ->leftJoin('product_branch', 'product_branch.id', '=', 'items.product_branchid')
            ->leftJoin('products', 'products.id', '=', 'product_branch.productsid')
            ->get();
        $data['bill'] = $bill;
        $data['items'] = $items;
        $data['employee'] = $employee;
        return view('employee.storemanager.DetailBill', $data);
    }
}
