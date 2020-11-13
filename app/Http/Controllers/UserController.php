<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artikel;
use App\Models\User;
use App\Models\KategoriArtikel;
use App\Models\Tag;
use Illuminate\Support\Facades\Hash;
class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth','admin']);
    }
    
    public function index()
    {
        $users = User::where('role_id','=','3')->get();
        return view('admin.daftaruser', compact('users'));
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
        return view('admin.daftaradmin', compact('admin'));
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
        return view('admin.blog.index', compact('artikel','kategori','tags'));
    }

    public function tambartikel()
    {
        $artikel = Artikel::all();
        $kategori = KategoriArtikel::all();
        $tags = Tag::all();
        return view('admin.blog.tambah', compact('artikel','kategori','tags'));
    }

    public function tambahArtikel(Request $request)
    {
        $input = $request->all();
        if($request->hasFile('image'))
        {
            $destination_path = 'public/images/artikel';
            $image = $request->file('image');
            $image_name = $image->getClientOriginalName();
            $path = $request->file('image')->storeAs($destination_path,$image_name);

            $input['image'] =   $image_name;
        }
        
        Artikel::create($input);
        return redirect('/admin/artikel');
    }

    public function kategoriartikel()
    {
        $kategori = KategoriArtikel::all();
        return view('admin.blog.kategori', compact('kategori'));
    }

    public function tambahKategori(Request $request)
    {
        KategoriArtikel::create(['nama' => $request->nama]);
        return redirect('/admin/kategoriartikel');
    }

    public function perbaruiKategori(Request $request)
    {
        $artikel = Artikel::where('id', $request->id)->first();
        $kategori = KategoriArtikel::all();
        $tags = Tag::all();
        return view('admin.blog.perbarui', compact('artikel','kategori','tags'));
    }


    public function updateartikel(Request $request, $id)
    {
        Artikel::find($id)->update([
            'judul'    => $request->judul,
            'kategori_id'     => $request->kategori_id,
            'tag_id'         => $request->tag_id,
            'isi'     => $request->isi,
        ]); 
        return redirect('/admin/artikel');
    }

    public function tag()
    {
        $tag = Tag::all();
        return view('admin.blog.tag',compact('tag')); 
    }

    public function tambahTag(Request $request)
    {
        Tag::Create(['nama'  => $request->nama]);
        return redirect('/admin/Tartikel');
    }


    
}
