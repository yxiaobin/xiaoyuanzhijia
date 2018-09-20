<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserGood extends Model
{
    //
    public function good(){
        return $this->belongsTo('App\Models\Good','good_id','id');
    }
}
