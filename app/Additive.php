<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Additive extends Model
{
    public const UPDATED_AT = 'last_update';
    public const CREATED_AT = null;

    public function products()
    {

        return $this->belongsToMany('App\Product', 'products_additives');

    }
}
