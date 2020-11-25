<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Product;
use Auth;
use DB;
use App\Models\User;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */


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
        return view('admin.dashboard',  compact('products'),$data);
        // dd($users);
        
    }
}
