<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use function GuzzleHttp\Psr7\str;

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

//    public function getPhoneAttribute($value)
//    {
//        $value = preg_replace("/[^0-9]/", "", $value );
//        $s='';
//        for ($i = 0; $i<strlen($value); $i++) {
//            if($i==3 || $i==6) $s.$this->append(' ');
//            $s.$this->append($value[$i]);
//        }
//        return $s;
//    }

//    public function setPhoneAttribute($value)
//    {
//        return preg_replace("/[^0-9]/", "", $value );
//    }
}
