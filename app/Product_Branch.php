<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product_Branch extends Model
{
    public $timestamps = false;
    protected $table = "product_branch";

    public function product()
    {
        return $this->belongsTo('App\Product', 'productsid');
    }

    public function branch()
    {
        return $this->belongsTo('App\Branch', 'brnahcesid');
    }

    public function items()
    {
        return $this->hasMany('App\Item', 'product_branchid');
    }
}
