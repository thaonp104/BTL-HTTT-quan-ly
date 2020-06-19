<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function products()
    {
        return $this->hasMany('App\Product', 'categoriesid');
    }

    public function brands()
    {
        return $this->belongsToMany('App\Brand', 'brand_category',
            'categoriesid','brandsid');
    }
}
