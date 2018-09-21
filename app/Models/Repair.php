<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Repair extends Model
{
    //
    protected $guarded = ['id'];
    public function user(){
        return $this->belongsTo('App\Member','user_id','id');
    }
}
