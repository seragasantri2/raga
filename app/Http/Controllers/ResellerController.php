<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use DB;

class ResellerController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth','Reseller']);
    }
    
    public function index(Request $request)
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
        return view('reseller.dashboard',  compact('products'),$data);
    }

    public function product()
    {
        $products = Product::all();
        return view('reseller.product', compact('products'));
        // dd($products);
    }

    public function update(Request $request, $id)
    {
        $product = product::find($id)->update([
            'category_id'   => $request->category_id,
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
            'harga' => $request->harga,
            'stok'  => $request->stok,
        
             
        ]);
      return redirect()->back();
     
    } 


    public function user()
    {
        $users  = User::where('role_id','=','3')->get();
        return view('reseller.user', compact('users'));
    }



    public function updateUser(Request $request, $id)
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

    public function promo() 
    {
        return view('reseller.jadwal');
    }

   
     

 
}
