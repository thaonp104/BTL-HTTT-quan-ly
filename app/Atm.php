<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Atm extends Model
{
    public function orders()
    {
        return $this->hasMany('App\Order', 'atmsid');
    }
}
