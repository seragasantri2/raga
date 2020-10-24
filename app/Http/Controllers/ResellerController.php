<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResellerController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth','Reseller']);
    }
    
    public function index()
    {
        return view('reseller.dashboard');
    }
     
}
