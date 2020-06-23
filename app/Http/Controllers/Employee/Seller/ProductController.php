<?php

namespace App\Http\Controllers\Employee\Seller;

use App\Category;
use App\Http\Controllers\Controller;
use App\Product;
use App\User;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //show list product cua branch
    public function index()
    {
        $employee = User::find(auth()->user()->id)->employee;
        $branch = $employee->branchesid;
        $products = Product::join('product_branch', 'product_branch.productsid', '=', 'products.id')
            ->where('branchesid', $branch)->get();
        $data['products'] = $products;
        $data['categories'] = Category::all();
        return view('employee.seller.ManageProduct', $data);
    }

    //show detail product by id
    public function show(Request $request)
    {
        $id = $request['id'];
        $product = Product::join('product_branch', 'product_branch.productsid', '=', 'products.id')
            ->where('product_branch.id', $id)->first();
        $category = $product->category;
        $brand = $product->brand;
        $vendor = $product->vendor;
        $data['product'] = $product;
        $data['category'] = $category;
        $data['vendor'] = $vendor;
        $data['brand'] = $brand;
        return view('employee.seller.DetailProduct', $data);
    }
}
