<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    //
    public function showFavoriteProducts ()
    {
        return view('customer.frontend.view_favorite_product');
    }

    public function showGroupProducts(Request $request){
        $id=isset($request['id'])?$request['id']:"";
        $arr=DB::table('group_product')->where('group_product_id',$id)->first();
        $check=DB::table('category_product')->where('group_product_id',$id)->get();
        $data['arr'] = $arr;
        $data['check'] = $check;
        return view('customer.frontend.view_group_product',$data);
    }

    public function search(Request $request)
    {
        $key=isset($request["key"])?$request["key"]:"jdskdjsd";
        $record_perpage=4;
        $total = DB::table('product')->where('c_name','like', '%'.$key.'%')
            ->orWhere('c_content','like','%'.$key.'%')->count();
        $num_page=ceil($total/$record_perpage);
        $page=isset($request["p"])&&$request["p"]>0?($request["p"]-1):0;
        $from=$page*$record_perpage;
        $arr = DB::table('product')->where('c_name','like', '%'.$key.'%')
            ->orWhere('c_content','like','%'.$key.'%')
            ->orderBy('product_id','desc')
            ->paginate(8);
        $data['arr'] = $arr;
        $data['key'] = $request['key'];
        $data['num_page'] = $num_page;
        return view('customer.frontend.view_search',$data);
    }

    public function showCategoryProducts(Request $request)
    {
        $id=isset($request["category"])?$request["category"]:"";
        $record_perpage=4;
        $total= DB::table('product')->where('category_product_id', $id)->count();
        $num_page=ceil($total/$record_perpage);
        $page=isset($request["p"])&&$request["p"]>0?($request["p"]-1):0;
        $from=$page*$record_perpage;
        $arr=DB::table('product')->where('category_product_id',$id)
            ->orderBy('product_id','desc')
            ->paginate(4);
        $ht = DB::table('category_product')->where('category_product_id',$id)->first();
        $data['arr']=$arr;
        $data['ht']=$ht;
        $data['num_page'] = $num_page;
        return view('customer/frontend/view_category_product',$data);
    }

    //Show detail product
    public function showDetail(Request $request)
    {
        $id=isset($request["id"])?$request["id"]:"";
        $arr = DB::table('product')->where('product_id',$id)->first();
        $data['arr'] = $arr;
        return view('customer/frontend/view_product',$data);
    }

    public function addFavoriteProduct(Request $request)
    {
        $id=isset($request["id"])?$request["id"]:"";
        if(!session()->has('favorite')) session(['favorite' => array()]);
        $product = DB::table('product')->where('product_id', $id)->first();
        session(['favorite.'.$id => array(
            'product_id' => $id,
            'c_name' => $product->c_name,
            'c_img' => $product->c_img,
            'number' => 1,
            'c_price' => $product->c_pricenew
        )]);
        return view("customer.frontend.view_favorite_product");
    }

    public function deleteFavoriteProduct(Request $request)
    {
        $id=isset($request["id"])?$request["id"]:"";
        session()->forget('favorite.'.$id);
        return view("customer.frontend.view_favorite_product");
    }
}
