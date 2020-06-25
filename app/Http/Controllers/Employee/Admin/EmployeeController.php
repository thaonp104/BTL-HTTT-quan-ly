<?php

namespace App\Http\Controllers\Employee\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    //show list employee
    public function index()
    {
        return view('employee.admin.ManageEmployee');
    }

    //show detail employee by id
    public function show(Request $request)
    {
        return view('employee.admin.DetailEmployee');
    }

    //show form edit employee
    public function edit(Request $request)
    {
        return view('employee.admin.EditEmployee');
    }

    //update employee
    public function update(Request $request)
    {
        $id = $request['id'];
        return redirect('/admin/manageemployee/detail/'.$id);
    }

    //show form add employee
    public function create(Request $request)
    {
        return view('employee.admin.AddEmployee');
    }

    //store employee
    public function store(Request $request)
    {
        $id = $request['id'];
        return redirect('/admin/manageemployee/detail/'.$id);
    }
}
