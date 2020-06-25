<?php

namespace App\Http\Controllers;

use App\Employee;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $id = Auth::user()->id;
        $position = Employee::where('accountsid', $id)->first();
        if ($position==null) {
//            return redirect()->guest(route('logout'))->with('post');
            return redirect('/logout');
        } else {
            if ($position->role == 'admin') {
                return redirect('/admin/managecustomer');
            } else if ($position->role == 'seller') {
                return redirect('/seller/manageproduct');
            } else if ($position->role == 'storemanager') {
                return redirect('/storemanager/manageproduct');
            } else if ($position->role == 'seniormanager') {
                return redirect('/seniormanager/manageproduct');
            } else if ($position->role == 'telesale'){
                return redirect('/telesale/managebill');
            }
        }
    }
}
