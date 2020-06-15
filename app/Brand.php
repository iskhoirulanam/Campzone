<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Brand extends Model
{
    protected $table = 'brand';
    protected $guarded = ['id'];
    

     public function produk ()
    {
        //return $this->belongsTo('App\Produk');
        return $this->hasMany('App\Produk', 'brand_id', 'id');
    }
}