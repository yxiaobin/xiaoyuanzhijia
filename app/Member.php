<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    //
    protected $table = "member";
    protected $primaryKey = "id";
    public $timestamps = false;

    public function exchange(){
        return $this->hasMany('App\Models\UserGood','user_id','id');
    }
}
