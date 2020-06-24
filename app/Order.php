<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public $timestamps = false;
    public function bill()
    {
        return $this->hasOne('App\Bill', 'ordersid');
    }

    public function customer()
    {
        return $this->belongsTo('App\Customer', 'customersid');
    }

    public function branch(){
        return $this->belongsTo('App\Branch', 'branchesid');
    }

    public function items()
    {
        return $this->hasMany('App\Item', 'ordersid');
    }
}
