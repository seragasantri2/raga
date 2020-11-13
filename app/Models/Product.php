<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'category_id','nama','deskripsi','harga','stok','image','berat','panjang','lebar','tinggi'
    ]; 

 public function Category()
 {
     return $this->belongsto('App\Models\Category');
 }
    
}
