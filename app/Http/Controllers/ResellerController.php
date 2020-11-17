<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Cart;
use App\Models\Product;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use DB;
use Auth;

class ResellerController extends Controller
{
 
   
    
    public function index(request $request, $id=null)
    {
        $category  = category::all();
        $products = Product::where('nama','LIKE','%'.$request->search.'%')->paginate(12);
        return view('reseller.dashboard', compact('products','category','id'));
    }

    public function detail($id)
    {
        $category  = category::all();
        $product = Product::findORFail($id);
        return view('reseller.detail', compact('product','category'));
    }

    public function blog()
    {
        $artikel = Artikel::all();
        return view('reseller.blog', compact('artikel'));
        
    }
    
    public function kategori($id)
    {
        $kategori  = KategoriArtikel::all();
        $artikel = Artikel::where('kategori_id',$id)->get();
        return view('reseller.blog', compact('kategori', 'artikel','id'));
    }

    public function kontak()
    {
        return view('reseller.kontak');
    }
 
    public function pusatbantuan()
    {
        return view('reseller.pusatbantuan');
    }

    public function category($id)
    {
        $category  = category::all();
        $products = Product::where('category_id',$id)->paginate(6);
        return view('reseller.dashboard', compact('category', 'products','id'));
    }

    public function cart()
    {
        $cart = cart::where('user_id', Auth::user()->id)->get();
        return view('reseller.cart',compact('cart'));
    }
    public function store(request $request)
    {
        $duplicate = cart::where('produk_id', $request->produk_id)->first();
        if ($duplicate) {
            return redirect('/reseller/cart')->with('error','Barang Sudah Ada Pada Cart');
        }
        Cart::create([
            'user_id'       => auth::user()->id,
            'produk_id'    => $request->produk_id,
            'qty'           =>  1
        ]);

        return redirect('/reseller/cart')->with('success', 'Barang Berhasil Ditambahkan');
    }
    public function update(Request $request, $id)
    {
        Cart::where('id',$id)->update([
            'qty'   => $request->quantity
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