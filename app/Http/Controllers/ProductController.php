<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(request $request)
    {
        Product::where('nama', $request->search)->paginate(10);
        $products = Product::all();
        return view('product/product',compact('products'));
    }

    public function create()
    {
        return view('product.create');
    }   

    public function createData(Request $request)
    {

        // $products   = Product::create([
        //     'name'      =>  $request->name,
        //     'desc'      =>  $request->desc,
        //     'price '    =>  $request->price
        // ]);
        Product::create($request->all());
        return redirect("/product");
    }

    public function delete($id)
    {
        Product::destroy($id);
        return back();

    }
}
