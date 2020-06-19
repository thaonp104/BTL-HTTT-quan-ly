<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function productBranch()
    {
        return $this->hasMany('App\Product_Branch', 'productsid');
    }

    public function vendor()
    {
        return $this->belongsTo('App\Vendor', 'vendorsid');
    }

    public function category()
    {
        return $this->belongsTo('App\Category', 'categoriesid');
    }

    public function brand()
    {
        return $this->belongsTo('App\Brand', 'brandsid');
    }

}
