<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    public function products()
    {
        return $this->hasMany('App\Product', 'brandsid');
    }
    public function categories()
    {
        return $this->belongsToMany('App\Category', 'brand_category',
            'brandsid', 'categoriesid');
    }
}
