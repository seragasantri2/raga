<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class UserbiasaController extends Controller
{
      public function __construct()
    {
        $this->middleware(['auth','user']);
    }
    public function index(request $request, $id=null)
    {
        $products = Product::all();
        return view('user.user', compact('products','id'));
    }

    
    public function detail($id)
    {
        
        $product    = Product::findOrFail($id); 
        return view('welcome.detail', compact('product'));
        // dd($product);
    }
}