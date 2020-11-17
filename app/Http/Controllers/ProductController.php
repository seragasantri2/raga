<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    
    public function index(request $request)
    {
        Product::where('nama', $request->search)->paginate(10);
        $category   = Category::all();
        $products = Product::all();
        
        return view('product/product',compact('products', 'category'));
    }

    public function create()
    {
       
        return view('product.create');
    }   

    public function createData(Request $request)
    {
        $input = $request->all();
        if($request->hasFile('image'))
        {
            $destination_path = 'gambar_produk';
            $image = $request->file('image');
            $image_name = $image->getClientOriginalName();
            $path = $request->file('image')->move($destination_path,$image_name);

            $input['image'] =   $image_name;
        }
        
        Product::create($input);
        return redirect("/product");
    }

    public function update(Request $request, $id)
    {
        $product = product::find($id)->update([
            'category_id'       => $request->category_id,
            'nama'              => $request->nama,
            'deskripsi'         => $request->deskripsi,
            'harga'             => $request->harga,
            'harga_reseller'    => $request->harga_reseller,
            'stok'              => $request->stok,
            'panjang'           => $request->panjang,
            'berat'             => $request->berat,
            'tinggi'            => $request->tinggi,
            'lebar '            => $request->lebar
         
             
        ]);
      return redirect()->back();
    
    }

    public function delete($id)
    {
        Product::destroy($id);
        return back();

    }

    public function jadwal()
    {
        return view('product.jadwal');
    }


}
