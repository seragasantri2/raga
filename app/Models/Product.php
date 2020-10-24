<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'category_id','nama','deskripsi','harga','stok','image'
    ]; 

 public function Category()
 {
     return $this->belongsTo('App/Models/Category');
 }
    
}
