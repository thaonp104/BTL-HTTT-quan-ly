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
        $arr=DB::table('categories')->where('id',$id)->first();
        $brand_category = DB::table('brand_category')->select('brandsid')
            ->where('categoriesid', $id);
        $check = DB::table('brands')->whereIn('id', $brand_category)->get();
        $data['arr'] = $arr;
        $data['check'] = $check;
        return view('customer.frontend.view_group_product',$data);
    }

    public function search(Request $request)
    {
        $key=isset($request["key"])?$request["key"]:"jdskdjsd";
        $record_perpage=4;
        $total = DB::table('products')->where('name','like', '%'.$key.'%')
            ->orWhere('content','like','%'.$key.'%')->count();
        $num_page=ceil($total/$record_perpage);
        $page=isset($request["p"])&&$request["p"]>0?($request["p"]-1):0;
        $from=$page*$record_perpage;
        $arr = DB::table('products')->where('name','like', '%'.$key.'%')
            ->orWhere('content','like','%'.$key.'%')
            ->orderBy('id','desc')
            ->paginate(8);
        $data['arr'] = $arr;
        $data['key'] = $request['key'];
        $data['num_page'] = $num_page;
        return view('customer.frontend.view_search',$data);
    }

    public function showCategoryProducts(Request $request)
    {
        $id=isset($request["category"])?$request["category"]:"";
        $ca = isset($request["group"])?$request["group"]:"";
        $record_perpage=4;
        $total= DB::table('products')->where('brandsid', $id)->count();
        $num_page=ceil($total/$record_perpage);
        $page=isset($request["p"])&&$request["p"]>0?($request["p"]-1):0;
        $from=$page*$record_perpage;
        $arr=DB::table('products')->where('brandsid',$id)
            ->where('categoriesid', $ca)
            ->orderBy('id','desc')
            ->paginate(4);
        $ht = DB::table('brands')->where('id',$id)->first();
        $data['arr']=$arr;
        $data['ht']=$ht;
        $data['num_page'] = $num_page;
        return view('customer/frontend/view_category_product',$data);
    }

    //Show detail product
    public function showDetail(Request $request)
    {
        $id=isset($request["id"])?$request["id"]:"";
        $arr = DB::table('products')->where('id',$id)->first();
        $data['arr'] = $arr;
        $productBranch = DB::table('product_branch')->where('productsid', $id)->get();
        $data['productBranch'] = $productBranch;
        return view('customer/frontend/view_product',$data);
    }

    public function addFavoriteProduct(Request $request)
    {
        $id=isset($request["id"])?$request["id"]:"";
        if(!session()->has('favorite')) session(['favorite' => array()]);
        $product = DB::table('products')->where('id', $id)->first();
        session(['favorite.'.$id => array(
            'id' => $id,
            'name' => $product->name,
            'img' => $product->img,
            'number' => 1,
            'price' => $product->pricenew
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
