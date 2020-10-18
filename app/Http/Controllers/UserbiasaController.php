<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class UserbiasaController extends Controller
{
      public function __construct()
    {
        $this->middleware(['auth','user']);
    }
    public function index(request $request)
    {
        $user = DB::table('users')
                        ->select(Db::row('count(id) ad total_user'))
                        ->where('role_id','=','2')
                        ->first();
        $data = array(
            
        );
        $products = Product::where('nama','LIKE','%'.$request->search.'%')->paginate(1);
        return view('user.dashboard', compact('products'));
    }
}