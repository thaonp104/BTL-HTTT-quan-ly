<?php

namespace App\Http\Controllers\Employee\StoreManager;

use App\Bill;
use App\Employee;
use App\Http\Controllers\Controller;
use App\Item;
use App\User;
use Illuminate\Http\Request;
use App\Order;

class BillController extends Controller
{
    //show list bills
    public function index()
    {
        $employee = User::find(auth()->user()->id)->employee;
        $branch = $employee->branchesid;
        $bills = Order::where('branchesid', $branch)
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
        $employee = Employee::where('id', $bill->employeesid)->first();
        $items = Item::where('ordersid', $id)
            ->leftJoin('product_branch', 'product_branch.id', '=', 'items.product_branchid')
            ->leftJoin('products', 'products.id', '=', 'product_branch.productsid')
            ->get();
        $data['bill'] = $bill;
        $data['items'] = $items;
        $data['employee'] = $employee;
        return view('employee.storemanager.DetailBill', $data);
    }

    //search bill by id, name
    public function search(Request $request)
    {
        $employee = User::find(auth()->user()->id)->employee;
        $branch = $employee->branchesid;
        $bills = Order::where('branchesid', $branch)
            ->where('orders.id', 'like', '%'.$request['id'].'%')
            ->leftJoin('customers', 'orders.customersid', '=', 'customers.id')->get();
        $data['search'] = $request['id'];
        $data['bills'] = $bills;
        return view('employee.storemanager.ManageBill', $data);
    }
}
