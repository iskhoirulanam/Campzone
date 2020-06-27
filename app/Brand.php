<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Brand extends Model
{
     protected $fillable = ['nama_brand', 'slug'];
    protected $table = 'brand';
    protected $guarded = [];
    

     public function Produk ()
    {
        //return $this->belongsTo('App\Produk');
        return $this->hasMany('App\Produk', 'brand_id', 'id');
    }

    public function getRouteKeyName()
{
    return 'slug';
}
}