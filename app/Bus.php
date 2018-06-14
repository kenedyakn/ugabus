<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bus extends Model
{
    function agent(){
        return $this->belongsTo('App\Agent');
    }

    function routes(){
        return $this->hasMany('App\Route');
    }
}
