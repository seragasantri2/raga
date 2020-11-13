<?php

namespace App\Http\Controllers;
use App\Models\category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    
    public function index()
    {
        $category = Category::all();
        return view('category', compact('category'));
    }

    public function category(request $request)
    {
        $category = Category::create([
            'nama'  => $request->nama,
        ]);
        return redirect()->back();
    }

    
    public function update(request $request, $id)
    {
        $category = Category::find($id)->update([
            'nama'  => $request->nama,
        ]);
        return redirect()->back();
    }

    public function cdelete($id)
    {
        category::destroy($id);
        return back();

    }
}
