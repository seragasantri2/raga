<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artikel;
use App\Models\Cart;
use App\Models\Product;
use App\Models\Category;
use Auth;

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
        $artikel = Artikel::all();
        return view('user.blog', compact('artikel'));
        
    }
    
    public function kategori($id)
    {
        $kategori  = KategoriArtikel::all();
        $artikel = Artikel::where('kategori_id',$id)->get();
        return view('user.blog', compact('kategori', 'artikel','id'));
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

    public function cart()
    {
        $cart = cart::where('user_id', Auth::user()->id)->get();
        return view('user.cart',compact('cart'));
    }
    public function store(request $request)
    {
        $duplicate = cart::where('produk_id', $request->produk_id)->first();
        if ($duplicate) {
            return redirect('/cart')->with('error','Barang Sudah Ada Pada Cart');
        }
        Cart::create([
            'user_id'       => auth::user()->id,
            'produk_id'    => $request->produk_id,
            'qty'           =>  1
        ]);

        return redirect('/cart')->with('success', 'Barang Berhasil Ditambahkan');
    }

    public function updatecart(Request $request, $id)
    {
        Cart::where('id',$id)->update([
            'qty'   => $request->qty
        ]);
        return response()->json([
            'succes' => true
        ]);
    }

    public function removecart($id)
    {
        cart::destroy($id);
        return redirect()->back();
    }
}