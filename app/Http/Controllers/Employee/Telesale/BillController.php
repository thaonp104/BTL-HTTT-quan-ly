<?php

namespace App\Http\Controllers\Employee\Telesale;

use App\Bill;
use App\Employee;
use App\Http\Controllers\Controller;
use App\Item;
use App\Order;
use App\Customer;
use App\Product;
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
}
