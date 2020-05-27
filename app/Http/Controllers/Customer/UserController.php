<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function login(Request $request)
    {
        $data['alert'] = $request['alert'];
        return view('customer.frontend.view_customer_login', $data);
    }

    public function loginCustomer(Request $request)
    {
        $c_email=$request["c_email"];
        $c_password=$request["c_password"];
        $check = DB::table('customer_accounts')->where('c_email', $c_email)->first();
        if(isset($check->c_email)){
            if($check->c_password==md5($c_password)){
                session(['c_customer' => $c_email]);
                return redirect('customer/myAccount');
            }
            else{
                return redirect('customer/login/fail');
            }
        }
        else{
            return redirect('customer/login/fail');
        }
    }
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
        $phone = $request['phone'];
        $email = $request['email'];
        if($password==$passwordnew){
            $check = DB::table('customer_accounts')->where('c_email', $email)->count();
            if($check==0){
                $c_password=md5($password);
                DB::table('customers')->insert([
                    ['c_name' => $name, 'c_birthday' => $birthday, 'c_adress' => $address, 'c_phone' => $phone]
                ]);
                $arr = DB::table('customers')->where('c_name', $name)
                    ->where('c_phone', $phone)->first();
                DB::table('customer_accounts')->insert([
                    ['c_email' => $email, 'c_password' => $c_password, 'customer_id' => $arr->customer_id]
                ]);
                echo "Đăng kí thành công. Vui lòng đăng nhập";
                return view("customer/frontend/view_customer_login");
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
        if($request->session()->has('c_customer')){
            return view("customer/frontend/view_my_account");
        }
        else{
            return redirect("customer/login/normal");
        }
    }

    public function inforAccount()
    {
        if(session()->has('c_customer')){
            $tam=session("c_customer");
            $arr = DB::table('customer_accounts')->where('c_email', $tam)->first();
            $inf = DB::table('customers')->where('customer_id',$arr->customer_id)->first();
            $data['arr'] = $arr;
            $data['inf'] = $inf;
            return view('customer.frontend.view_info_account', $data);
        }
        else{
            return redirect("customer/login/normal");
        }

    }

    public function editAccount()
    {
        if(session()->has('c_customer')){
            $tam=session("c_customer");
            $inf = DB::table('customer_accounts')->where('c_email', $tam)->first();
            $arr = DB::table('customers')->where('customer_id', $inf->customer_id)->first();
            $data['inf'] = $inf;
            $data['arr'] = $arr;
            return view("customer.frontend.view_edit_account", $data);
        }
        else{
            return redirect("customer/login/normal");
        }
    }

    public function updateAccount(Request $request)
    {
        if($request->session()->has('c_customer')){
            $tam=session("c_customer");
            $inf = DB::table('customer_accounts')->where('c_email', $tam)->first();
            $arr = DB::table('customers')->where('customer_id', $inf->customer_id)->first();
            $c_name=$request["c_name"];
            $c_birthday=$request["c_birthday"];
            $c_adress=$request["c_adress"];
            $c_phone=$request["c_phone"];
            $affected = DB::table('customers')
                ->where('customer_id', $arr->customer_id)
                ->update([
                    'c_name' => $c_name,
                    'c_adress' => $c_adress,
                    'c_birthday' => $c_birthday,
                    'c_phone' => $c_phone
                ]);
            return redirect('customer/inforAccount');
        }
        else{
            return redirect("customer/login/normal");
        }
    }

    public function editPassword(Request $request)
    {
        if(session()->has('c_customer')){
            $al = $request['alert'];
            $data['al'] = $al;
            return view("customer.frontend.view_edit_password", $data);
        }
        else{
            return redirect("customer/login/normal");
        }
    }

    public function updatePassword(Request $request)
    {
        if($request->session()->has('c_customer')){
            $tam=session("c_customer");
            $inf = DB::table('customer_accounts')->where('c_email', $tam)->first();
            $pw = $request['pw'];
            $newpw = $request['newpw'];
            $renewpw = $request['renewpw'];
             if (md5($pw) != $inf->c_password) {
                return redirect('customer/editPassword/error');
            } else {
                 if ($newpw != $renewpw) {
                     return redirect('customer/editPassword/error');
                 } else{
                     DB::table('customer_accounts')
                         ->where('customer_id', $inf->customer_account_id)
                         ->update([
                             'c_password' => md5($newpw)
                         ]);
                 }
             }
            return redirect('customer/inforAccount');
        }
        else{
            return redirect("customer/login/normal");
        }
    }
}
