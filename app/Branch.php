<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    public $timestamps = false;
    protected $table = 'branches';

    public function productBranchs()
    {
        return $this->hasMany('App\Product_branch', 'product_branchid');
    }

    public function employees()
    {
        return $this->hasMany('App\Employee', 'branchesid');
    }

    public function orders()
    {
        return $this->hasMany('App\Order', 'branchesid');
    }
}
