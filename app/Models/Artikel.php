<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    protected $fillable =   ['judul','kategori_id','tag_id','isi','image'];

    public function kategori()
    {
        return $this->belongsTo('App\Models\KategoriArtikel');
    }

    public function tag()
    {
        return $this->belongsTo('App\Models\Tag');
    }

}
