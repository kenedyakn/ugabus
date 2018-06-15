<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Route extends Model
{
    function bus(){
        return $this->belongsTo('App\Bus');
    }
}
