<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Merek extends Model
{
   protected $fillable = [
        'name_merek', 'slug'
    ];
}