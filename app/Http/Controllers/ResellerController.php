<?php

namespace App\Http\Controllers;
use App\Models\Product;
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
     

 
}
