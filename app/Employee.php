<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    public $timestamps = false;
    public function account()
    {
        return $this->belongsTo('App\User', 'accountsid');
    }

    public function bills()
    {
        return $this->hasMany('App\Bill', 'employeesid');
    }

    public function branch()
    {
        return $this->belongsTo('App\Branch', 'branchesid');
    }
}
