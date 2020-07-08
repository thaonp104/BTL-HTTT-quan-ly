<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Customer as C;
use App\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function register(Request $request)
    {
        $data['alert'] = $request['alert'];
        return view('customer.frontend.view_sign_customer', $data);
    }

    public function create(Request $request)
    {
        $password=$request["password"];
        $passwordnew = $request['passwordnew'];
        $name = $request['name'];
        $address = $request['address'];
        $birthday = $request['birthday'];
        $phone = preg_replace("/[\s]/", "", $request['phone']);
        $username = $request['username'];
        if(!preg_match('/^[0-9]+$/',$phone)) {
            return redirect("customer/register/phone");
        } else {
            if(strlen($phone) <9 || strlen($phone)>11) {
                return redirect("customer/register/phone");
            }
        }
        $cus = C::all();
        foreach( $cus as $c) {
            if($c->phone == $phone) {
                return redirect("customer/register/phone");
            }
        }
        if($password==$passwordnew){
            $check = DB::table('accounts')->where('username', $username)->count();
            if($check==0){
                $password=bcrypt($password);
                DB::table('accounts')->insert([
                    ['username' => $username, 'password' => $password, 'status' => 1]
                ]);
                $arr = DB::table('accounts')->where('username', $username)->first();
                DB::table('customers')->insert([
                    ['fullname' => $name, 'birthday' => $birthday, 'address' => $address, 'phone' => $phone, 'accountsid' => $arr->id]
                ]);

                echo "Đăng kí thành công. Vui lòng đăng nhập";
                $data['alert'] = 'success';
                return view("customer/frontend/view_customer_login", $data);
            }
            else{
                return redirect("customer/register/email");
            }
        }
        else{
            return redirect("customer/register/password");
        }
    }

    public function logout()
    {
        session()->forget('c_customer');
        session()->flush();
        return redirect('customer/login/normal');
    }

    public  function myAccount(Request $request)
    {
            return view("customer/frontend/view_my_account");
    }

    public function inforAccount()
    {
            $tam= Auth::user();
            $arr = DB::table('accounts')->where('username', $tam->username)->first();
            $inf = DB::table('customers')->where('accountsid',$arr->id)->first();
            $data['arr'] = $arr;
            $data['inf'] = $inf;
            return view('customer.frontend.view_info_account', $data);
    }

    public function editAccount()
    {
            $tam=Auth::user();
            $inf = DB::table('accounts')->where('username', $tam->username)->first();
            $arr = DB::table('customers')->where('accountsid', $inf->id)->first();
            $data['inf'] = $inf;
            $data['arr'] = $arr;
            return view("customer.frontend.view_edit_account", $data);
    }

    public function updateAccount(Request $request)
    {
            $tam=Auth::user();
            $inf = DB::table('accounts')->where('username', $tam->username)->first();
            $arr = DB::table('customers')->where('accountsid', $inf->id)->first();
            $c_name=$request["c_name"];
            $c_birthday=$request["c_birthday"];
            $c_adress=$request["c_adress"];
            $c_phone=$request["c_phone"];
            $affected = DB::table('customers')
                ->where('accountsid', $inf->id)
                ->update([
                    'fullname' => $c_name,
                    'address' => $c_adress,
                    'birthday' => $c_birthday,
                    'phone' => $c_phone
                ]);
            return redirect('customer/inforAccount');
    }

    public function editPassword(Request $request)
    {
            $al = $request['alert'];
            $data['al'] = $al;
            return view("customer.frontend.view_edit_password", $data);
    }

    public function updatePassword(Request $request)
    {
            $tam=Auth::user();
            $inf = DB::table('accounts')->where('username', $tam->username)->first();
            $pw = $request['pw'];
            $newpw = $request['newpw'];
            $renewpw = $request['renewpw'];

             if (!Hash::check($pw, $inf->password)) {
                return redirect('customer/editPassword/error');
            } else {
                 if ($newpw != $renewpw) {
                     return redirect('customer/editPassword/error');
                 } else{
                     DB::table('accounts')
                         ->where('id', $inf->id)
                         ->update([
                             'password' => bcrypt($newpw)
                         ]);
                 }
             }
            return redirect('customer/inforAccount');
    }
}
