<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    public $timestamps = false;
    public function account()
    {
        return $this->belongsTo('App\User', 'accountsid');
    }

    public function orders(){
        return $this->hasMany('App\Order', 'customersid');
    }
}
