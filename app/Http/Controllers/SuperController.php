<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artikel;
use App\Models\User;
use App\Models\Role;
use App\Models\KategoriArtikel;
use App\Models\Tag;
use DB;
use App\Models\Product;
use App\Models\Category;
use App\Models\KatKategori;
use App\Models\SubKategori;
use Illuminate\Support\Facades\Hash;
class SuperController extends Controller
{
  
    
    public function dashboard(Request $request)
    {
        $users = DB::table('users')
                    ->select(DB::raw('COUNT(id) as total_user'))
                    ->where('role_id','=','3')
                    ->first();
        $reseller = DB::table('users')
                    ->select(DB::raw('COUNT(id) as total_reseller'))
                    ->where('role_id','=','2')
                    ->first(); 

        $admin = DB::table('users')
                    ->select(DB::raw('COUNT(id) as total_admin'))
                    ->where('role_id','=','1')
                    ->first();            
        
                    $data = array(
                        'users'  => $users,
                        'reseller' => $reseller,
                        'admin'  => $admin,   
                    );                   
        $products = Product::where('nama','LIKE','%'.$request->search.'%')->paginate(1);
        return view('super.dashboard',  compact('products'),$data);
        // dd($users);
        
    }

    public function profil()
    {
        $profil =   User::all();
        $role   = Role::all();
        return view('super.profil', compact('profil','role'));
    }
    
    public function index()
    {
        $users = User::where('role_id','=','3')->get();
        return view('super.daftaruser', compact('users'));
    }
 
    
    public function update(Request $request, $id)
    {
        User::find($id)->update([
            'first_name'    => $request->first_name,
            'last_name'     => $request->last_name,
            'email'         => $request->email,
            'no_telpon'     => $request->no_telpon,
            'password'      => Hash::make($request->password),
            'alamat'        => $request->alamat,
            'role_id'       =>  $request->role_id
        ]); 
        return redirect()->back();
    }

    public function delete($id)
    {
        User::destroy($id);
        return back();

    } 

    public function admin()
    {
        $admin = User::where('role_id','=','1')->get();
        return view('super.daftaradmin', compact('admin'));
    }

    public function createAdmin(Request $request)
    {
        User::Create([
            'first_name'    => $request->first_name,
            'last_name'    => $request->last_name,
            'email'    => $request->email,
            'no_telpon'    => $request->no_telpon,
            'password'    => $request->password,
            'password'    => Hash::make($request->password_confirmation),
            'alamat'    => $request->alamat,    
            'role_id'   => '1'      
        ]);
        return redirect('/daftaradmin');
    }

    public function reseller()
    {
        $reseller = User::where('role_id','=','2')->get();
        return view('admin.daftarreseller', compact('reseller'));
    }



    

    public function create(Request $request)
    {
        User::Create([
            'first_name'    => $request->first_name,
            'last_name'    => $request->last_name,
            'email'    => $request->email,
            'no_telpon'    => $request->no_telpon,
            'password'    => $request->password,
            'password'    => Hash::make($request->password_confirmation),
            'alamat'    => $request->alamat,    
            'role_id'   => '2'      
        ]);
        return redirect('/daftarreseller');
    }


    
    public function artikel()
    {
        $artikel = Artikel::all();
        $kategori = KategoriArtikel::all();
        $tags = Tag::all();
        return view('super.blog.index', compact('artikel','kategori','tags'));
    }

    public function tambartikel()
    {
        $artikel = Artikel::all();
        $kategori = KategoriArtikel::all();
        $tags = Tag::all();
        return view('super.blog.tambah', compact('artikel','kategori','tags'));
    }

    public function tambahArtikel(Request $request)
    {
        $input = $request->all();
        if($request->hasFile('image'))
        {
            $destination_path = 'gambar_artikel';
            $image = $request->file('image');
            $image_name = $image->getClientOriginalName();
            $path = $request->file('image')->move($destination_path,$image_name);

            $input['image'] =   $image_name;
        }
        
        Artikel::create($input);
        return redirect('/artikel');
    }

    public function perbaruiartikel(Request $request)
    {
        $artikel = Artikel::where('id', $request->id)->first();
        $kategori = KategoriArtikel::all();
        $tags = Tag::all();
        return view('super.blog.perbarui', compact('artikel','kategori','tags'));
    }

    public function updateartikel(Request $request, $id)
    {
        $input = $request->all();
        if($request->hasFile('image'))
        {
            $destination_path = 'gambar_artikel';
            $image = $request->file('image');
            $image_name = $image->getClientOriginalName();
            $path = $request->file('image')->move($destination_path,$image_name);

            $input['image'] =   $image_name;
        }
        
        Artikel::find($id)->update($input);
        return redirect('/artikel');
    }

    public function deleteartikel($id)
    {
        Artikel::destroy($id);
        return redirect('/artikel');

    }

    public function kategoriartikel()
    {
        $kategori = KategoriArtikel::all();
        return view('super.blog.kategori', compact('kategori'));
    }

    public function tambahKategori(Request $request)
    {
        KategoriArtikel::create(['nama' => $request->nama]);
        return redirect('/kategoriartikel');
    }

    public function perbaruiKategori(Request $request, $id)
    {
        KategoriArtikel::find($id)->update(['nama' => $request->nama]);
        return redirect('/kategoriartikel');
    }

    public function deletekategori($id)
    {
        KategoriArtikel::destroy($id);
        return redirect('/kategoriartikel');

    }



    public function tag()
    {
        $tag = Tag::all();
        return view('super.blog.tag',compact('tag')); 
    }

    public function tambahTag(Request $request)
    {
        Tag::Create(['nama'  => $request->nama]);
        return redirect('/Tartikel');
    }

    
    public function updatetag(Request $request, $id)
    {
        Tag::find($id)->update([
            'nama'  => $request->nama       
        ]);
        return redirect('/Tartikel');
    
    }

    public function deletetag($id)
    {
        Tag::destroy($id);
        return back();

    }

    public function produk(request $request)
    {
        Product::where('nama', $request->search)->paginate(10);
        $category   = Category::all();
        $main = SubKategori::all();
        $sub    = KatKategori::all();
        $products = Product::all();
        
        return view('super.product.product',compact('products', 'category','main','sub'));
    }

    public function createproduk()
    {
       
        return view('super.product.create');
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

    public function updateproduk(Request $request, $id)
    {
        $product = product::find($id)->update([
            'category_id'       => $request->category_id,
            'main_id'           => $request->main_id,
            'sub_id'            => $request->sub_id,
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

    public function deleteproduk($id)
    {
        Product::destroy($id);
        return back();

    }


    public function indexkategori()
    {
        $category = Category::all();
        $main = SubKategori::all();
        $sub    = KatKategori::all();
        return view('super.category', compact('category','main','sub'));
    }

    public function categoryproduk(request $request)
    {
        $category = Category::create([
            'nama'  => $request->nama,
        ]);

        return redirect()->back();
    }

    public function maincategoryproduk(request $request)
    {
        $category = Category::all();
        $main = SubKategori::create([
            'category_id' => $request->category_id,
            'nama'  => $request->nama,
        ]);

        return redirect()->back();
    }

    
    public function subcategoryproduk(request $request)
    {
        $sub = KatKategori::create([
            'category_id' => $request->category_id,
            'sub_id' => $request->sub_id,
            'nama'  => $request->nama,
            ]);
            
            return redirect()->back();
        }
        
             
          public function mainkat($id)
          {
             
              $category  = category::all();
              $main = SubKategori::where('category_id',$id)->get();
              return response()->json($main, 200);
              
          }
      
          public function subkat($id)
          {
             
              $sub = KatKategori::where('sub_id',$id)->get();
              return response()->json($sub, 200);
              
          }

    
    public function updatekategoriproduk(request $request, $id)
    {
        $category = Category::find($id)->update([
            'nama'  => $request->nama,
        ]);
        return redirect()->back();
    }

    public function kategoridelete($id)
    {
        category::destroy($id);
        return back();

    }

    public function jadwal()
    {
        return view('super.product.jadwal');
    }

    
}
