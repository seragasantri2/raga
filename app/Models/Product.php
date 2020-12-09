<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'category_id','main_id','sub_id','nama','deskripsi','harga','harga_reseller','stok','image','berat','panjang','lebar','tinggi'
    ]; 

    public function Category()
    {
        return $this->belongsto('App\Models\Category');
    }
    
}
