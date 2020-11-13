<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Product;
use App\Models\Artikel;
use App\Models\Blog;
use App\Models\KategoriArtikel;
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
        $kategori = KategoriArtikel::all();
        $artikel = Artikel::all();
        return view('blog', compact('artikel','kategori'));
        
    }

    public function tampilblog(Request $request, $id)
    {
        $kategori = KategoriArtikel::all();
        $artikel = Artikel::where('id', $request->id)->first();
        return view('tampilblog', compact('artikel','kategori'));
    }

    public function kategori($id)
    {
        $kategori  = KategoriArtikel::all();
        $artikel = Artikel::where('kategori_id',$id)->get();
        return view('blog', compact('kategori', 'artikel','id'));
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
