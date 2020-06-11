<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StoreController extends Controller
{
    public function showAboutUs ()
    {
        return view('customer.frontend.view_about');
    }
    public function showProducts ()
    {
        $record_perpage=16;
        $total = DB::table('products')->count();
        $num_page=ceil($total/$record_perpage);
        $arr = DB::table('products')->orderBy('id', 'desc')->paginate(8);
        $data['arr'] = $arr;
        $data['num_page'] = $num_page;
        return view('customer.frontend.view_hot_product', $data);
    }

    public function showNews()
    {
        $record_perpage=4;
        $total = DB::table('news')->count();
        $num_page=ceil($total/$record_perpage);
        $arr = DB::table('news')->orderBy('news_id', 'desc')->paginate(4);
        $data['arr'] = $arr;
        $data['num_page'] = $num_page;
        return view('customer.frontend.view_news', $data);
    }

    public function showMap()
    {
        $ht="Bản đồ";
        $data['ht'] = $ht;
        return view('customer.frontend.view_map', $data);
    }

    public function showContact()
    {
        return view('customer.frontend.view_contact');
    }
}
