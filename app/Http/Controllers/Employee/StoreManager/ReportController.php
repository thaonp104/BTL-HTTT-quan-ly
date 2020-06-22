<?php

namespace App\Http\Controllers\Employee\StoreManager;

use App\Http\Controllers\Controller;
use App\Order;
use App\User;
use Illuminate\Http\Request;
use Carbon\Carbon;

class ReportController extends Controller
{
    public function index( Request $request)
    {
        if(!isset($request['start']) && !isset($request['end'])) {
            $start = Carbon::now()->month;
            $year = Carbon::now()->year;
            if($start<10){
                $start = $year.'-0'.$start."-".'01';
            } else {
                $start = $year.'-'.$start."-".'01';
            }
            $end = Carbon::now()->format('Y-m-d');
        } else {
            $start = $request['start'];
            $end = $request['end'];
        }
        $employee = User::find(auth()->user()->id)->employee;
        $branch = $employee->branchesid;
        $bills = Order::where('branchesid', $branch)
            ->where('date', '>=' , $start)
            ->where('date', '<=', $end)
            ->join('customers', 'orders.customersid', '=', 'customers.id')->get();
        $data['bills'] = $bills;
        $total = 0;
        foreach ($bills as $bill)
        {
            $total+=$bill->total;
        }
        $data['total'] = $total;
        return view('employee.storemanager.ManageReportStore', $data);
    }
}
