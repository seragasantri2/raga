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
        return view('user');
    }
}