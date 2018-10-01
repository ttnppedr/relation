<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Description extends Model
{
    public function product()
    {
        return $this->belongsToMany('App\Product')
            ->using('App\ProductDescription');
    }
}
