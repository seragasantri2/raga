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
        $user = User::all();
        return view('user', compact('user'));
    }

    public function admin()
    {
        return view('daftaradmin');
    }
    
}
