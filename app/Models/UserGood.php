<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserGood extends Model
{
    //

    protected $guarded = ['id'];
    public function good(){
        return $this->belongsTo('App\Models\Good','good_id','id');
    }
    public function user(){
        return$this->belongsTo('App\Member','user_id','id');
    }
}
