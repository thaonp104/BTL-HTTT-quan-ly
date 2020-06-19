<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use Illuminate\Support\Facades\Hash;

class AccountController extends Controller
{
    //tra ve view dang nhap
    public function index()
    {
        return view('home');
    }

    //tra ve view change PW
    public function editPW()
    {
        $data['error'] =0;
        if(isset($_GET['error'])) $data['error'] = $_GET['error'];
        $data['success'] =0;
        if(isset($_GET['success'])) $data['success'] = $_GET['success'];
        return view('employee.layout.changePW', $data);
    }

    //xu li change PW
    public function updatePW(Request $request)
    {
        if(isset($request['submit'])){
            $pw = $request['pw'];
            $newpw = $request['newpw'];
            $renewpw = $request['renewpw'];
            if(Hash::check($pw, auth()->user()->password)) {
                if($newpw == $renewpw) {
                    $account = DB::table('accounts')->where('id',auth()->user()->id)
                    ->update(['password'=> bcrypt($newpw)]);
                    return redirect('/employee/changepw?success=1');
                } else {
                    return redirect('/employee/changepw?error=1');
                }
            } else {
                return redirect('/employee/changepw?error=1');
            }
        } else {
            return redirect('/employee/changepw');
        }
    }
}
