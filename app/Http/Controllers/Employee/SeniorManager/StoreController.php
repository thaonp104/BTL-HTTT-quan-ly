<?php

namespace App\Http\Controllers\Employee\SeniorManager;

use App\Branch;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StoreController extends Controller
{
    //show list store
    public function index()
    {
        $stores = Branch::all();
        $data['stores'] = $stores;
        return view('employee.seniormanager.ManageStore', $data);
    }

    //show detail store by id
    public function show(Request $request)
    {
        $branch = Branch::where('id', $request['id'])->first();
        $data['branch'] = $branch;
        return view('employee.seniormanager.DetailStore', $data);
    }

    //show form add store
    public function create()
    {
        return view('employee.seniormanager.AddStore');
    }

    //add new store
    public function store(Request $request)
    {
        $name = $request['name'];
        $address = $request['address'];
        $phone = $request['phone'];
        $branch = new Branch();
        $branch->name = $name;
        $branch->address = $address;
        $branch->phone = $phone;
        $branch->save();
        $br = DB::table('branches')
            ->orderBy('id', 'desc')
            ->first();
        return redirect('/seniormanager/managestore/detail/'.$br->id);
    }

    //show form update store
    public function edit(Request $request)
    {
        $branch = Branch::where('id', $request['id'])->first();
        $data['branch'] = $branch;
        return view('employee.seniormanager.updateStore', $data);
    }

    //update store
    public function update(Request $request)
    {
        $name = $request['name'];
        $address = $request['address'];
        $phone = $request['phone'];
        $id = $request['id'];
        $branch = Branch::where('id', $id)->first();
        $branch->name = $name;
        $branch->address = $address;
        $branch->phone = $phone;
        $branch->save();
        return redirect('/seniormanager/managestore/detail/'.$id);
    }

}
