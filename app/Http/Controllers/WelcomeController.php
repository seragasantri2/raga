<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Product;
use App\Models\Blog;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index(request $request, $id = null)
    {
        $category   = category::all();
        $product    = Product::where('nama','LIKE','%'.$request->search.'%')->paginate(12);
        return view('welcome', compact('product','category','id'));
    }

    public function category(request $request, $id)
    {
        $category   = category::all();
        $product    = Product::where('category_id',$id)->paginate(12);
        $products    = Product::where('nama','LIKE','%'.$request->search.'%')->paginate(12);
        return view('welcome.product',compact('category','product','products','id')); 
    }

    public function create(request $request)
    {
        
        Blog::create([
            'text'  => $request->text
        ]);
        return redirect()->back(); 
    }

    public function blog()
    {
        $category   = category::all();
        $blog   = Blog::all();
        return view('blog', compact('blog','category'));
        // dd($blog);
    }

    public function kontak()
    {
        return view('kontak');
    }

    public function pusatbantuan()
    {
        return view('pusatbantuan');
    }
}
