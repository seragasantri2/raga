<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
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
        return view('admin.artikel');
    }


    
}
