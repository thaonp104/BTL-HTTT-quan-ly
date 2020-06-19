<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AccountController extends Controller
{
    //tra ve view dang nhap
    public function index()
    {
        return view('home');
    }

    //xu li dang nhap
    public function login()
    {

    }

    //xu li dang xuat
    public function logout()
    {

    }

    //tra ve view change PW
    public function editPW()
    {

    }

    //xu li change PW
    public function updatePW()
    {

    }
}
