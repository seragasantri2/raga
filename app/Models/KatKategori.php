<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KatKategori extends Model
{
    protected $fillabel = ['category_id','sub_id','nama'];

    public function Category()
    {
        return $this->belongsto('App\Models\Category');
    }
    
    public function SubKat()
    {
        return $this->belongsto('App\Models\SubKategori');
    }
}
