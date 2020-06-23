<?php

namespace App\Http\Controllers\Employee\StoreManager;

use App\Bill;
use App\Customer;
use App\Employee;
use App\Http\Controllers\Controller;
use App\Item;
use App\Product;
use App\Product_Branch;
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
        $bills = Customer::rightJoin('orders', 'orders.customersid', '=', 'customers.id')
            ->where('orders.branchesid', $branch)->get();
        $data['bills'] = $bills;
        return view('employee.storemanager.ManageBill', $data);
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
        return view('employee.storemanager.DetailBill', $data);
    }

    //search bill by id, name
//    public function search(Request $request)
//    {
//        $employee = User::find(auth()->user()->id)->employee;
//        $branch = $employee->branchesid;
//        $bills = Order::where('branchesid', $branch)
//            ->where('orders.id', 'like', '%'.$request['id'].'%')
//            ->leftJoin('customers', 'orders.customersid', '=', 'customers.id')->get();
//        $data['search'] = $request['id'];
//        $data['bills'] = $bills;
//        return view('employee.storemanager.ManageBill', $data);
//    }
}
