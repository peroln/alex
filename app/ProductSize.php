<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductSize extends Model
{
    protected $table = 'products_sizes';
    public const CREATED_AT = null;
    public const UPDATED_AT = 'last_update';

    public function product()
    {
        return $this->belongsTo('App\Product');
    }
}
