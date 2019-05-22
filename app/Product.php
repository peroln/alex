<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public const UPDATED_AT = 'last_update';
    public const CREATED_AT = null;
    protected $appends = array('arrayTags');

    public function getArrayTagsAttribute(){
         return $this->tags()->get()->implode( 'name',', ');
    }

    public function productsSizes()
    {
        return $this->hasMany('App\ProductSize');
    }

    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public function tags()
    {
        return $this->belongsToMany('App\Tag', 'products_tags');
    }

}
