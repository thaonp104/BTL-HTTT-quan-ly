<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewsController extends Controller
{
    public function detail(Request $request)
    {
        $id=isset($request["id"])?$request["id"]:"";
        $arr = DB::table('news')->where('news_id', $id)->first();
        $data['arr'] = $arr;
        return view('customer.frontend.view_detail_news', $data);
    }

    public function category(Request $request)
    {
        $id=isset($request["id"])?$request["id"]:"";
        $arr = DB::table('news')->where('category_news_id',$id)->paginate(4);
        $ht = DB::table('category_news')->where('category_news_id', $id)->first();
        $data['arr'] = $arr;
        $data['ht'] = $ht;
        return view('customer.frontend.view_detail_category', $data);
    }
}
