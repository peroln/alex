<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public const UPDATED_AT = 'last_update';
    public const CREATED_AT = null;

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */

    public function products()
    {

        return $this->belongsToMany('App\Product', 'products_tags');

    }
}
