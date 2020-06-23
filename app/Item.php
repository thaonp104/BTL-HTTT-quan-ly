<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    public function productBranch()
    {
        return $this->belongsTo('App\Product_Branch', 'product_branchid');
    }

    public function order()
    {
        return $this->belongsTo('App\Order', 'ordersid');
    }

    public function product()
    {
        return $this->belongsTo('App\Product', 'productsid');
    }
}
