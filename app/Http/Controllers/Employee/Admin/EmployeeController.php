<?php

namespace App\Http\Controllers\Employee\Admin;

use App\Account;
use App\Branch;
use App\Customer;
use App\Employee;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmployeeController extends Controller
{
    //show list employee
    public function index()
    {
        $employees = Employee::all();
        $data['employees'] = $employees;
        $branches = Branch::all();
        $data['branches'] = $branches;
        return view('employee.admin.ManageEmployee', $data);
    }

    //show detail employee by id
    public function show(Request $request)
    {
        $id = $request->id;
        $employee = Employee::find($id);
        $account = $employee->account;
        $data['employee'] = $employee;
        $data['account'] = $account;
        $data['branches'] = Branch::all();
        return view('employee.admin.DetailEmployee', $data);
    }

    //show form edit employee
    public function edit(Request $request)
    {
        $id = $request->id;
        $employee = Employee::find($id);
        $account = $employee->account;
        $data['employee'] = $employee;
        $data['account'] = $account;
        $data['branches'] = Branch::all();
        return view('employee.admin.EditEmployee', $data);
    }

    //update employee
    public function update(Request $request)
    {
        $id = $request['id'];
        $fullname = $request['fullname'];
        $address = $request['address'];
        $phone = preg_replace("/[\s]/", "", $request['phone']);;
        $birthday = $request['birthday'];
        $role = $request['role'];
        $salary = $request['salary'];
        $branch = $request['branch'];
        $status = $request['status'];
        $data['fullname'] = $fullname;
        $data['address'] = $address;
        $data['phone'] = $phone;
        $data['birthday'] = $birthday;
        $data['role'] = $role;
        $data['salary'] = $salary;
        $data['branch'] = $branch;
        $data['branches'] = Branch::all();
        if(!preg_match('/^[0-9]+$/',$phone)) {
            $data['error'] = 'phone';
            return view('employee.admin.AddEmployee',$data);
        } else {
            if(strlen($phone) <9 || strlen($phone)>11) {
                $data['error'] = 'phone';
                return view('employee.admin.AddEmployee',$data);
            }
        }
        $emp = Employee::where('phone', $phone)->first();
        if($emp!=null) {
            $data['error'] = "trungphone";
            return view('employee.admin.AddEmployee',$data);
        }
        $employee = Employee::find($id);
//        dd($employee);
        $employee->fullname = $fullname;
        $employee->address = $address;
        $employee->phone = $phone;
        $employee->birthday = $birthday;
        $employee->role = $role;
        $employee->salary = $salary;
        if($role != 'admin' && $role != 'telesale' && $role != 'seniormanager')
            $employee->branchesid = $branch;
        else $employee->branchesid = null;
        $employee->save();
        $account = User::where('id', $employee->accountsid)->first();
        $account->status = $status;
        $account->save();
        return redirect('/admin/manageemployee/detail/'.$id);
    }

    //show form add employee
    public function create(Request $request)
    {
        $data['branches'] = Branch::all();
        return view('employee.admin.AddEmployee', $data);
    }

    //store employee
    public function store(Request $request)
    {
        $fullname = $request['fullname'];
        $address = $request['address'];
        $phone = $request['phone'];
        $birthday = $request['birthday'];
        $role = $request['role'];
        $salary = $request['salary'];
        $branch = $request['branch'];
        $username = $request['username'];
        $password = $request['password'];
        $repassword = $request['repassword'];
        $data['fullname'] = $fullname;
        $data['address'] = $address;
        $data['phone'] = $phone;
        $data['birthday'] = $birthday;
        $data['role'] = $role;
        $data['salary'] = $salary;
        $data['branch'] = $branch;
        $data['branches'] = Branch::all();
        $data['username'] = $username;
        if(!preg_match('/^[0-9\s]+$/',$phone)) {
            $data['error'] = 'phone';
            return view('employee.admin.AddEmployee',$data);
        } else {
            $phone = preg_replace("/[^0-9]/", "", $phone );
            if(strlen($phone) <9 || strlen($phone)>11) {
                $data['error'] = 'phone';
                return view('employee.admin.AddEmployee',$data);
            }
        }
        if ($password != $repassword) {
            $data['error'] = 'password';
            return view('employee.admin.AddEmployee', $data);
        }
        $accounts = User::all();
        foreach ($accounts as $a) {
            if($a->username == $username) {
                $data['error'] = 'username';
                return view('employee.admin.AddEmployee', $data);
            }
        }
        $account = new User();
        $account->username = $username;
        $account->password = bcrypt($password);
        $account->status = 1;
        $account->save();
        $accountsid = DB::table('accounts')
            ->where('username', $username)
            ->orderBy('id', 'desc')
            ->first();
        $employee = new Employee();
        $employee->fullname = $fullname;
        $employee->address = $address;
        $employee->phone = $phone;
        $employee->birthday = $birthday;
        $employee->role = $role;
        $employee->salary = $salary;
        if($role != 'admin' && $role != 'telesale' && $role != 'seniormanager')
            $employee->branchesid = $branch;
        else $employee->branchesid = null;
        $employee->accountsid = $accountsid->id;
        $employee->save();
        $id = DB::table('employees')
            ->where('accountsid', $accountsid->id)
            ->orderBy('id', 'desc')
            ->first();
        return redirect('/admin/manageemployee/detail/'.$id->id);
    }
}
