<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubKategori extends Model
{
    protected $fillable = ['category_id','nama'];

    public function Category()
    {
        return $this->belongsto('App\Models\Category');
    }
}
