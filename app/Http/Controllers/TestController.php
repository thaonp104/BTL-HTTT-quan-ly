<?php

namespace App\Http\Controllers;

use App\Adv;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    public function index() {
        $arr = DB::table('slide')->orderBy('pk_slide_id','desc')->get();
        print_r($arr);
    }
}
