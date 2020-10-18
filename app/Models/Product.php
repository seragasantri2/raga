<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'role_id','nama','deskripsi','harga','stok','image'
    ]; 

 
    
}
