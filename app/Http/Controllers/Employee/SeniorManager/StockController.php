<?php

namespace App\Http\Controllers\Employee\SeniorManager;

use App\Branch;
use App\Http\Controllers\Controller;
use App\Product;
use App\Product_Branch;
use Illuminate\Http\Request;

class StockController extends Controller
{
    public function showout()
    {
        $products = Product::all();
        $branches = Branch::all();
        $data['products'] = $products;
        $data['branches'] = $branches;
        return view('employee.seniormanager.StockOut', $data);
    }

    public function showin()
    {
        $products = Product::all();
        $data['products'] = $products;
        return view('employee.seniormanager.StockIn', $data);
    }

    public function out(Request $request)
    {
        $id = $request->product;
        $product = Product::where('id', $id)->first();
        $total = 0;
        foreach ($request['quantity'] as $q) {
            $total = $total + $q;
        }
        if($total > $product->quantity) {
            return redirect('/seniormanager/managestockout?alert=error');
        }
        $product->quantity = $product->quantity - $total;
        $product->save();
        $branches = Branch::all();
        $k = 1;
        foreach ($branches as $branch) {
            $product_branch = Product_Branch::where('branchesid', $branch->id)
                ->where('productsid', $product->id)->first();
            $product_branch->quantity = $product_branch->quantity + $request['quantity'][$k];
            $product_branch->save();
            $k++;
        }
        return redirect('/seniormanager/managestockout?alert=success');
    }

    public function in(Request $request)
    {
        $id = $request->product;
        $quantity = $request->quantity;
        $p = Product::where('id',$id)->first();
        $p->quantity = $p->quantity + $quantity;
        $p->save();
        return redirect('/seniormanager/managestock?alert=success');
    }
}
