<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
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

    public function admin()
    {
        $admin = User::where('role_id','=','1')->get();
        return view('admin.daftaradmin', compact('admin'));
    }

    public function reseller()
    {
        $reseller = User::where('role_id','=','2')->get();
        return view('admin.daftarreseller', compact('reseller'));
    }
    
    public function artikel()
    {
        return view('admin.artikel');
    }
    
}
