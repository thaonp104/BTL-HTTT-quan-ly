<?php

namespace App\Http\Controllers\Employee\SeniorManager;

use App\Http\Controllers\Controller;
use App\Order;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

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
        if(!isset($request->branch)) $branch=0;
        else $branch = $request->branch;
        if($branch == 0) {
            $bills = Order::where('date', '>=' , $start)
                ->where('date', '<=', $end)
                ->where('status', 2)
                ->join('customers', 'orders.customersid', '=', 'customers.id')->get();
        } else {
            $bills = Order::where('branchesid', $branch)
                ->where('date', '>=' , $start)
                ->where('date', '<=', $end)
                ->where('status', 2)
                ->join('customers', 'orders.customersid', '=', 'customers.id')->get();
        }
        $data['bills'] = $bills;
        $total = 0;
        foreach ($bills as $bill)
        {
            $total+=$bill->total;
        }
        $data['total'] = $total;
        $data['start'] = $start;
        $data['end'] = $end;
        $data['branch'] = $branch;
        return view('employee.seniormanager.ManageReport', $data);
    }
}
