<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StoryComment extends Model
{
    //
    protected $guarded = ['id'];
    public function user(){
        return $this->belongsTo('App\Member','user_id','id');
    }
   public function father(){
        return $this->belongsTo('App\Member','father_id','id');
   }
}
