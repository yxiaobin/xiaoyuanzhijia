<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Good extends Model
{
    //
    protected $guarded = ['id'];
    public function user_goods(){
        return $this->hasMany('App\Moels\UserGood','good_id','id');
    }
}
