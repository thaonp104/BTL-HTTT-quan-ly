<?php

namespace App\Http\Controllers\Employee\Admin;

use App\Customer;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class CustomerController extends Controller
{

    //show list customer
    public function index()
    {
        $customers = Customer::all();
        $data['customers'] = $customers;
        return view('employee.admin.ManageCustomer', $data);
    }

    //show detail customer by id
    public function show(Request $request)
    {
        $customer = Customer::find($request->id);
        $data['customer'] = $customer;
        $account = $customer->account;
        $data['account'] = $account;
        return view('employee.admin.DetailCustomer', $data);
    }

    //show form edit customer
    public function edit(Request $request)
    {
        $customer = Customer::find($request->id);
        $data['customer'] = $customer;
        $account = $customer->account;
        $data['account'] = $account;
        return view('employee.admin.EditCustomer', $data);
    }

    //update customer
    public function update(Request $request)
    {
        $id = $request['id'];
        $customer = Customer::find($id);
        $account = User::where('id', $customer->accountsid)->first();
        if($account->status == 0) $account->status = 1;
        else $account->status = 0;
        $account->save();
        return redirect('/admin/managecustomer/detail/'.$id);
    }
}
