<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class UserbiasaController extends Controller
{
      public function __construct()
    {
        $this->middleware(['auth','user']);
    }
    public function index(request $request, $id=null)
    {
        $category  = category::all();
        $products = Product::where('nama','LIKE','%'.$request->search.'%')->paginate(12);
        return view('user.user', compact('products','category','id'));
    }

    public function detail($id)
    {
        $category  = category::all();
        $product = Product::findORFail($id);
        return view('user.detail', compact('product','category'));
    }
    
    public function blog()
    {
        
        return view('user.blog');
        // dd($blog);
    }

    public function kontak()
    {
        return view('user.kontak');
    }
 
    public function pusatbantuan()
    {
        return view('user.pusatbantuan');
    }

    public function category($id)
    {
        $category  = category::all();
        $products = Product::where('category_id',$id)->paginate(6);
        return view('user.user', compact('category', 'products','id'));
    }
}