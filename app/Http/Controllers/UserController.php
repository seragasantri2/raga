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
        $users = User::where('role_id','=','2')->get();
        return view('user', compact('users'));
    }

    public function admin()
    {
        $admin = User::where('role_id','=','1')->get();
        return view('daftaradmin', compact('admin'));
    }
    
}
