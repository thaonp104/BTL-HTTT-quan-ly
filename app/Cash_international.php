<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cash_international extends Model
{
    protected $table = 'cash_internationals';

    public function orders()
    {
        return $this->hasMany('App\Order', 'cash_internationalsid');
    }
}
