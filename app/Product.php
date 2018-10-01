<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function descriptions()
    {
        return $this->belongsToMany('App\Description', 'product_description')
            ->withPivot('type');
    }
}
