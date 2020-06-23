<?php

namespace App\Http\Controllers\Employee\SeniorManager;

use App\Brand;
use App\Category;
use App\Http\Controllers\Controller;
use App\Product;
use App\User;
use App\Vendor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    //show list product cua branch
    public function index()
    {
        $products = Product::all();
        $data['products'] = $products;
        $data['categories'] = Category::all();
        return view('employee.seniormanager.ManageProduct', $data);
    }

    //show detail product by id
    public function show(Request $request)
    {
        $id = $request['id'];
        $product = Product::where('id', $id)->first();
        $category = $product->category;
        $brand = $product->brand;
        $vendor = $product->vendor;
        $data['product'] = $product;
        $data['category'] = $category;
        $data['vendor'] = $vendor;
        $data['brand'] = $brand;
        return view('employee.seniormanager.DetailProduct', $data);
    }

    //hien thi form them product
    public function create()
    {
        $categories = Category::all();
        $brands = Brand::all();
        $vendors = Vendor::all();
        $data['categories']= $categories;
        $data['brands']= $brands;
        $data['vendors'] = $vendors;
        return view('employee.seniormanager.AddProduct', $data);
    }

    //xu li logic them san pham
    public function store(Request $request)
    {
        $data['name'] = $request['name'];
        $data['price'] = $request['price'];
        $data['pricenew'] = $request['pricenew'];
        $data['quantity'] = $request['quantity'];
        $data['img'] = $request['img'];
        $data['content'] = $request['content'];
        $data['brandsid'] = $request['brand'];
        $data['vendorsid'] = $request['vendor'];
        $data['categoriesid'] = $request['category'];
        Product::create($data);
        $p = DB::table('products')->orderBy('id', 'desc')->first();
        return redirect('/seniormanager/manageproduct/detail/'.$p->id);

    }

    //hien thi form edit product
    public function edit(Request $request)
    {
        $id = $request['id'];
        $product = Product::where('id', $id)->first();
        $category = $product->category;
        $brand = $product->brand;
        $vendor = $product->vendor;
        $data['product'] = $product;
        $data['category'] = $category;
        $data['vendor'] = $vendor;
        $data['brand'] = $brand;
        return view('employee.seniormanager.updateProduct', $data);
    }

    //xu li logic update product
    public function update(Request $request)
    {
        $id = $request['id'];
        $name = $request['name'];
        $price = $request['price'];
        $pricenew = $request['pricenew'];
        $content = $request['content'];
        $quantity = $request['quantity'];

        Product::where('id', $id)
        ->update(['name' => $name, 'price' => $price, 'pricenew' => $pricenew, 'content' => $content, 'quantity' => $quantity]);
        return redirect('/seniormanager/manageproduct/detail/'.$id);
    }
}
